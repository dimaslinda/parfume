<?php

namespace App\Http\Controllers;

use App\Models\Claims;
use App\Models\Points;
use Spatie\Tags\Tag;
use App\Models\Product;
use App\Models\Rewards;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    /**
     * Tampilkan halaman utama dengan daftar produk dan best deal.
     * Digunakan untuk landing page.
     */
    public function index()
    {
        $products = Product::with('media')->paginate(8);
        $bestdeal = Product::with('media')->where('bestdeal', 1)->paginate(4);
        return view('index', compact('products', 'bestdeal'));
    }

    /**
     * Tampilkan halaman daftar produk beserta tag.
     */
    public function products()
    {
        $products = Product::with('media')->paginate(8);
        $tags = Tag::all();
        return view('products', compact('products', 'tags'));
    }

    /**
     * Tampilkan detail produk berdasarkan slug, beserta produk terkait berdasarkan tag.
     *
     * @param string $slug
     */
    public function detailproducts($slug)
    {
        $produk = Product::where('slug', $slug)->first();

        $tags = $produk->tags->pluck('name');

        if ($tags) {
            $kategoriproducts = Product::with('media', 'tags')->withAnyTagsOfAnyType($tags)->paginate(3);
        } else {
            $kategoriproducts = Product::with('media', 'tags')->orderBy('id', 'desc')->paginate(3);
        }

        $detailproducts = Product::with('media', 'tags')->where('slug', $slug)->first();
        return view('detailproducts', compact('detailproducts', 'kategoriproducts'));
    }

    /**
     * Tampilkan halaman mitra.
     */
    public function mitra()
    {
        return view('mitra');
    }

    /**
     * Tampilkan dashboard user, ranking, reward, dan statistik.
     *
     * - Mengambil data user login
     * - Mengambil reward yang bisa diklaim
     * - Mengurutkan user berdasarkan total_points
     * - Menghitung ranking user
     */
    public function dashboard()
    {
        $user = Auth::user();

        $claimedRewards = Claims::where('user_id', $user->id)->pluck('reward_id')->toArray();
        $claims = Claims::where('user_id', $user->id)->get()->keyBy('reward_id');

        // Mengambil reward yang belum diklaim dan mengurutkannya berdasarkan poin terendah
        $rewards = Rewards::orderBy('point_cost', 'asc')->get();

        // Mengurutkan reward sehingga yang sudah di-claim atau di-reject berada di bawah
        $rewards = $rewards->sortBy(function ($reward) use ($claims) {
            if (isset($claims[$reward->id])) {
                return $claims[$reward->id]->status == 'approved' || $claims[$reward->id]->status == 'rejected' ? 1 : 0;
            }
            return 0;
        });

        // Ambil semua user dan urutkan berdasarkan total_points
        $users = User::with('sales')
            ->get()
            ->sortByDesc(function ($user) {
                return $user->total_points;
            })->values();

        // Hitung ranking user
        $rank = $users->search(function ($u) use ($user) {
            return $u->id === $user->id;
        }) + 1;

        return view('dashboard', compact('user', 'rank', 'rewards', 'claims', 'claimedRewards', 'users'));
    }

    /**
     * Proses klaim reward oleh user.
     *
     * - Cek apakah reward tersedia dan poin cukup
     * - Kurangi poin user di point_histories
     * - Buat data klaim baru
     *
     * @param int $id ID reward
     */
    public function claimReward($id)
    {
        $user = Auth::user();
        $reward = Rewards::find($id);

        if (!$reward) {
            session()->flash('error', 'Reward tidak ditemukan');
            return redirect()->back();
        }

        if ($user->total_points < $reward->point_cost) {
            session()->flash('error', 'Poin Anda tidak mencukupi untuk mengklaim reward ini.');
            return redirect()->back();
        }

        // Catat pengurangan poin di point_histories
        \App\Models\PointHistory::create([
            'user_id' => $user->id,
            'source_user_id' => null,
            'amount' => -$reward->point_cost,
            'type' => 'redeem',
            'description' => 'Redeem reward: ' . $reward->name,
        ]);

        \App\Models\Claims::create([
            'user_id'   => $user->id,
            'reward_id' => $reward->id,
            'status'    => 'pending',
        ]);

        session()->flash('success', "Reward {$reward->name} berhasil diklaim.");

        return redirect()->back();
    }

    /**
     * Tampilkan halaman tentang kami.
     */
    public function aboutus()
    {
        return view('aboutus');
    }
}

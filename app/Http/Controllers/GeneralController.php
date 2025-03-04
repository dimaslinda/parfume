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
    public function index()
    {
        $products = Product::with('media')->paginate(8);
        $bestdeal = Product::with('media')->where('bestdeal', 1)->paginate(4);
        return view('index', compact('products', 'bestdeal'));
    }

    public function products()
    {
        $products = Product::with('media')->paginate(8);
        $tags = Tag::all();
        return view('products', compact('products', 'tags'));
    }

    public function detailproducts($slug)
    {
        $produk = Product::where('slug', $slug)->first();

        $tags = $produk->tags->pluck('name');

        if($tags) {
            $kategoriproducts = Product::with('media', 'tags')->withAnyTagsOfAnyType($tags)->paginate(3);
        } else {
            $kategoriproducts = Product::with('media', 'tags')->orderBy('id', 'desc')->paginate(3);
        }

        $detailproducts = Product::with('media', 'tags')->where('slug', $slug)->first();
        return view('detailproducts', compact('detailproducts', 'kategoriproducts'));
    }


    public function mitra()
    {
        return view('mitra');
    }


    public function dashboard()   {
        $user = Auth::user();

        // Mengambil data peringkat pengguna berdasarkan poin
        $points = DB::select('
            SELECT user_id, points,
                   RANK() OVER (ORDER BY points DESC) as `rank`
            FROM points
        ');

        $claimedRewards = Claims::where('user_id', $user->id)->pluck('reward_id')->toArray();
        $claims = Claims::where('user_id', $user->id)->get()->keyBy('reward_id');

        // Mengambil reward yang belum diklaim dan mengurutkannya berdasarkan poin terendah
        $rewards = Rewards::orderBy('point_cost', 'asc')->get();

        // Mengurutkan reward sehingga yang sudah di-claim atau di-reject berada di bawah
        $rewards = $rewards->sortBy(function($reward) use ($claims) {
            if (isset($claims[$reward->id])) {
                return $claims[$reward->id]->status == 'approved' || $claims[$reward->id]->status == 'rejected' ? 1 : 0;
            }
            return 0;
        });


        $users = User::with(['points', 'sales'])
        ->get()
        ->sortByDesc(function ($user) {
            return $user->points->points ?? 0;
        })->values();


        $pointsCollection = collect($points);
        $userRank = $pointsCollection->firstWhere('user_id', $user->id);
        $rank = $userRank ? $userRank->rank : null;



        return view('dashboard', compact('user', 'rank', 'rewards', 'claims', 'claimedRewards', 'users'));
    }

    public function claimReward($id)
    {
        $user = Auth::user();
        $reward = Rewards::find($id);

        if (!$reward) {
            session()->flash('error', 'Reward tidak ditemukan');
            return redirect()->back();
        }

        $pointRecord = Points::where('user_id', $user->id)->first();

        if ($pointRecord->points < $reward->point_cost) {
            session()->flash('error', 'Poin Anda tidak mencukupi untuk mengklaim reward ini.');
            return redirect()->back();
        }

        Claims::create([
            'user_id'   => $user->id,
            'reward_id' => $reward->id,
            'status'    => 'pending', // Ubah status klaim menjadi 'approved'
        ]);

        session()->flash('success', "Reward {$reward->name} berhasil diklaim.");

        return redirect()->back();
    }
}

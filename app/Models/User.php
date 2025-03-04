<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Panel;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements FilamentUser, HasMedia
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
{
    if ($panel->getId() === 'admin') {
        return $this->hasRole('admin') && $this->hasVerifiedEmail();
    }

    return true;
}


    public function points()
    {
        return $this->hasOne(Points::class);
    }

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }

    public function getRank()
    {
        // Menggunakan query mentah untuk menghitung peringkat
        $points = DB::select(DB::raw('
            SELECT user_id, points,
                   RANK() OVER (ORDER BY points DESC) as `rank`
            FROM points
        '));

        // Konversi hasil menjadi koleksi Laravel
        $pointsCollection = collect($points);

        // Cari peringkat pengguna berdasarkan user_id
        $userRank = $pointsCollection->firstWhere('user_id', $this->id);

        return $userRank ? $userRank->rank : null;
    }

    // Metode untuk mendapatkan tier berdasarkan poin
    public function getTier()
    {
        $points = $this->points->points ?? 0;

        if ($points < 6250) {
            return 'Bronze';
        } elseif ($points >= 6250 && $points <= 213750) {
            return 'Silver';
        } elseif ($points > 213750 && $points <= 505000) {
            return 'Gold';
        } elseif ($points > 505000 && $points <= 10930000) {
            return 'Platinum';
        } else {
            return 'Platinum';
        }
    }

    // Metode untuk mendapatkan poin yang dibutuhkan untuk tier berikutnya
    public function getNextTierPoints()
    {
        $points = $this->points->points ?? 0;

        if ($points < 6250) {
            return 6250;
        } elseif ($points >= 6250 && $points <= 213750) {
            return 213750;
        } elseif ($points > 213750 && $points <= 505000) {
            return 505000;
        } elseif ($points > 505000 && $points <= 10930000) {
            return 10930000;
        } else {
            return $points;
        }
    }

    // Metode untuk menghitung progres menuju tier berikutnya
    public function getProgressToNextTier()
    {
        $points = $this->points->points ?? 0;
        $nextTierPoints = $this->getNextTierPoints();

        return min(($points / $nextTierPoints) * 100, 100);
    }

    // Metode untuk mendapatkan logo tier berikutnya
    public function getNextTierLogo()
    {
        $points = $this->points->points ?? 0;

        if ($points < 6250) {
            return 'img/tier/silver.png'; // Path ke logo Silver
        } elseif ($points >= 6250 && $points <= 213750) {
            return 'img/tier/gold.png'; // Path ke logo Gold
        } elseif ($points > 213750 && $points <= 505000) {
            return 'img/tier/platinum.png'; // Path ke logo Platinum
        } elseif ($points > 505000 && $points <= 10930000) {
            return 'img/tier/platinum.png'; // Path ke logo Diamond
        } else {
            return 'images/unranked.png'; // Path ke logo Unranked
        }
    }

    // Metode untuk mendapatkan logo tier
    public function getTierLogo(): string
    {
        return match($this->getTier()) {
            'Bronze' => 'bronze.png',
            'Silver' => 'silver.png',
            'Gold' => 'gold.png',
            default => 'bronze.png'
        };
    }

    // Metode untuk mendapatkan total quantity sales yang terjual
    public function getTotalSales()
    {
        return $this->sales->sum('quantity');
    }
}

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
    protected $guarded = [];

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
        return $this->hasRole('Admin');
    }

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }

    // Metode untuk mendapatkan tier berdasarkan poin
    public function getTier()
    {
        $points = $this->total_points;

        if ($points < 6250) {
            return 'Bronze';
        } elseif ($points >= 6250 && $points <= 18750) {
            return 'Silver';
        } elseif ($points > 18750 && $points <= 125000) {
            return 'Gold';
        } elseif ($points > 125000 && $points <= 375000) {
            return 'Platinum';
        } else {
            return 'Platinum';
        }
    }

    // Metode untuk mendapatkan poin yang dibutuhkan untuk tier berikutnya
    public function getNextTierPoints()
    {
        $points = $this->total_points;

        if ($points < 6250) {
            return 6250;
        } elseif ($points >= 6250 && $points <= 18750) {
            return 18750;
        } elseif ($points > 18750 && $points <= 125000) {
            return 125000;
        } elseif ($points > 125000 && $points <= 375000) {
            return 375000;
        } else {
            return $points;
        }
    }

    // Metode untuk menghitung progres menuju tier berikutnya
    public function getProgressToNextTier()
    {
        $points = $this->total_points;
        $nextTierPoints = $this->getNextTierPoints();

        return min(($points / $nextTierPoints) * 100, 100);
    }

    // Metode untuk mendapatkan logo tier berikutnya
    public function getNextTierLogo()
    {
        $points = $this->total_points;

        if ($points < 6250) {
            return 'img/tier/silver.png'; // Path ke logo Silver
        } elseif ($points >= 6250 && $points <= 18750) {
            return 'img/tier/gold.png'; // Path ke logo Gold
        } elseif ($points > 18750 && $points <= 125000) {
            return 'img/tier/platinum.png'; // Path ke logo Platinum
        } elseif ($points > 125000 && $points <= 375000) {
            return 'img/tier/platinum.png'; // Path ke logo Diamond
        } else {
            return 'img/tier/platinum-1.png'; // Path ke logo Unranked
        }
    }

    // Metode untuk mendapatkan logo tier
    public function getTierLogo(): string
    {
        return match ($this->getTier()) {
            'Bronze' => 'bronze.png',
            'Silver' => 'silver.png',
            'Gold' => 'gold.png',
            'Platinum' => 'platinum.png',
            default => 'bronze.png'
        };
    }

    // Metode untuk mendapatkan total quantity sales yang terjual
    public function getTotalSales()
    {
        return $this->sales->sum('quantity');
    }

    public function pointHistories()
    {
        return $this->hasMany(\App\Models\PointHistory::class);
    }

    public function getTotalPointsAttribute()
    {
        return $this->pointHistories()->sum('amount');
    }

    public function sponsor()
    {
        return $this->belongsTo(User::class, 'sponsor_id');
    }

    public function downlines()
    {
        return $this->hasMany(User::class, 'sponsor_id');
    }

    /**
     * Mengambil seluruh jaringan downline (tree) user secara rekursif.
     *
     * @param int $maxDepth Batas kedalaman tree (default 5)
     * @param int $currentDepth Kedalaman saat ini (default 1)
     * @return \Illuminate\Support\Collection Koleksi user downline beserta tree-nya
     */
    public function downlineTree($maxDepth = 5, $currentDepth = 1)
    {
        if ($maxDepth > 0 && $currentDepth > $maxDepth) {
            return collect();
        }
        return $this->downlines()->with(['downlines' => function ($q) use ($maxDepth, $currentDepth) {
            $q->with(['downlines' => function ($q2) use ($maxDepth, $currentDepth) {
                $q2->with('downlines');
            }]);
        }])->get()->map(function ($downline) use ($maxDepth, $currentDepth) {
            $downline->downline_tree = $downline->downlineTree($maxDepth, $currentDepth + 1);
            return $downline;
        });
    }

    public function claims()
    {
        return $this->hasMany(\App\Models\Claims::class);
    }
}

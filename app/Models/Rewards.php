<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Model untuk reward/hadiah yang dapat diklaim user.
 *
 * Menggunakan media library untuk gambar reward.
 */
class Rewards extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $guarded = [];
}

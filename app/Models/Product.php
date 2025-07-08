<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

/**
 * Model untuk produk parfum.
 *
 * Menggunakan media library dan tagging.
 */
class Product extends Model implements HasMedia
{
    use InteractsWithMedia, HasTags;

    protected $guarded = [];
}

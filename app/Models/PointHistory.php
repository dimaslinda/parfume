<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointHistory extends Model
{
    protected $table = 'point_histories';
    protected $guarded = [];

    /**
     * Relasi ke user pemilik poin.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke user sumber poin (misal dari downline).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sourceUser()
    {
        return $this->belongsTo(User::class, 'source_user_id');
    }
}

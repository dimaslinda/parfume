<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claims extends Model
{
    protected $guarded = [];

    /**
     * Relasi ke user yang melakukan klaim.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke reward yang diklaim.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reward()
    {
        return $this->belongsTo(Rewards::class);
    }
}

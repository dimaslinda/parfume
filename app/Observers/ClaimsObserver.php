<?php

namespace App\Observers;

use App\Models\Claims;
use App\Models\PointHistory;
use App\Models\Rewards;

class ClaimsObserver
{
    public function updated(Claims $claim)
    {
        if ($claim->isDirty('status') && $claim->status === 'rejected') {
            $reward = Rewards::find($claim->reward_id);
            if ($reward) {
                PointHistory::create([
                    'user_id' => $claim->user_id,
                    'source_user_id' => null,
                    'amount' => $reward->point_cost,
                    'type' => 'claim_rejected',
                    'description' => 'Pengembalian poin karena claim reward "' . $reward->name . '" di-reject',
                ]);
            }
        }
        if ($claim->isDirty('status') && $claim->getOriginal('status') === 'rejected' && in_array($claim->status, ['pending', 'approved'])) {
            $reward = Rewards::find($claim->reward_id);
            if ($reward) {
                PointHistory::create([
                    'user_id' => $claim->user_id,
                    'source_user_id' => null,
                    'amount' => -$reward->point_cost,
                    'type' => 'claim_redeem_again',
                    'description' => 'Pengurangan poin ulang karena claim reward "' . $reward->name . '" diubah dari rejected',
                ]);
            }
        }
    }
}

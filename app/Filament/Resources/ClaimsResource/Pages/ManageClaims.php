<?php

namespace App\Filament\Resources\ClaimsResource\Pages;

use App\Filament\Resources\ClaimsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use App\Models\User;
use App\Models\Rewards;
use App\Models\PointHistory;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class ManageClaims extends ManageRecords
{
    protected static string $resource = ClaimsResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }

    public function getTitle(): string
    {
        return 'Pengajuan Claim Reward';
    }

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        $user = User::findOrFail($data['user_id']);
        $reward = Rewards::findOrFail($data['reward_id']);
        $pointCost = $reward->point_cost;

        // Hitung total poin user dari point_histories
        $totalPoints = $user->pointHistories()->sum('amount');
        if ($totalPoints < $pointCost) {
            throw new \Exception('Poin user tidak cukup untuk redeem reward ini.');
        }

        // Catat pengurangan poin di point_histories
        PointHistory::create([
            'user_id' => $user->id,
            'source_user_id' => null,
            'amount' => -$pointCost,
            'type' => 'redeem',
            'description' => 'Redeem reward: ' . $reward->name,
        ]);

        // Lanjutkan proses create claim
        return parent::handleRecordCreation($data);
    }

    protected function handleRecordUpdate(\Illuminate\Database\Eloquent\Model $record, array $data): \Illuminate\Database\Eloquent\Model
    {
        $newStatus = $data['status'] ?? $record->status;

        if ($newStatus === 'rejected') {
            $user = \App\Models\User::find($record->user_id);
            $reward = \App\Models\Rewards::find($record->reward_id);
            $pointCost = $reward->point_cost ?? 0;

            if ($user && $reward && $pointCost > 0) {
                \App\Models\PointHistory::create([
                    'user_id' => $user->id,
                    'source_user_id' => null,
                    'amount' => $pointCost,
                    'type' => 'claim_rejected',
                    'description' => 'Pengembalian poin karena claim reward "' . $reward->name . '" di-reject',
                ]);
            }
        }

        return parent::handleRecordUpdate($record, $data);
    }
}

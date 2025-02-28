<?php

namespace App\Filament\Resources\RewardsResource\Pages;

use App\Filament\Resources\RewardsResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;

class ManageRewards extends ManageRecords
{
    protected static string $resource = RewardsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function afterSafe(): void
    {
        Notification::make()
            ->title('Reward berhasil diupdate')
            ->success()
            ->send();
    }

    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Reward berhasil ditambahkan')
            ->success()
            ->send();
    }

    protected function afterDelete(): void
    {
        Notification::make()
            ->title('Reward berhasil dihapus')
            ->success()
            ->send();
    }
}

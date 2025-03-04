<?php

namespace App\Filament\Resources\ClaimsResource\Pages;

use App\Filament\Resources\ClaimsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

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
}

<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class SalesOverview extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationGroup = 'Penjualan';
    protected static string $view = 'filament.pages.sales-overview';

    protected static ?string $navigationLabel = 'Penjualan dan Poin';

    public function getTitle(): string
    {
        return 'Data Penjualan dan Poin';
    }

    protected function getTableQuery(): Builder
    {
        return User::query()
            ->withSum('sales', 'quantity')
            ->with('points');
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('Nama Pengguna')
            ->searchable()
            ->sortable(),
            TextColumn::make('sales_sum_quantity')
                ->label('Total Penjualan')
                ->sortable(),
            TextColumn::make('points.points')
                ->label('Total Poin')
                ->sortable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('edit')
                ->label('Tambah Point')
                ->url(fn (User $record) => route('filament.pages.sales-form', ['user' => $record->id]))
                ->color('warning')
                ->icon('heroicon-o-pencil'),
        ];
    }

}

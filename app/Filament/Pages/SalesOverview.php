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

    /**
     * Judul halaman overview penjualan dan poin.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return 'Data Penjualan dan Poin';
    }

    /**
     * Query utama untuk tabel user dan summary sales.
     *
     * @return Builder
     */
    protected function getTableQuery(): Builder
    {
        return User::query()
            ->withSum('sales', 'quantity');
    }

    /**
     * Kolom-kolom yang ditampilkan pada tabel overview.
     *
     * @return array
     */
    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('Nama Pengguna')
                ->searchable()
                ->sortable(),
            TextColumn::make('sales_sum_quantity')
                ->label('Total Penjualan')
                ->sortable(),
            TextColumn::make('total_points')
                ->label('Total Poin')
                ->getStateUsing(fn($record) => $record->total_points)
                ->sortable(),
        ];
    }

    /**
     * Aksi-aksi pada tabel overview (misal: tambah poin, detail).
     *
     * @return array
     */
    protected function getTableActions(): array
    {
        return [
            Action::make('edit')
                ->label('Tambah Point')
                ->url(fn(User $record) => route('filament.pages.sales-form', ['user' => $record->id]))
                ->color('warning')
                ->icon('heroicon-o-pencil'),
            Action::make('detail')
                ->label('Detail Penjualan')
                ->url(fn(User $record) => route('filament.pages.sales-detail', ['user' => $record->id]))
                ->color('primary')
                ->icon('heroicon-o-eye'),
        ];
    }
}

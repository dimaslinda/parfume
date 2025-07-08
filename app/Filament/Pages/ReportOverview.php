<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Filament\Actions\Action;

class ReportOverview extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Laporan';
    protected static string $view = 'filament.pages.report-overview';
    protected static ?string $navigationLabel = 'Laporan Rekap';

    public function getTitle(): string
    {
        return 'Laporan Rekap MLM';
    }

    protected function getTableQuery(): Builder
    {
        return User::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('Nama User')->searchable()->sortable(),
            TextColumn::make('email')->label('Email')->searchable(),
            TextColumn::make('total_points')->label('Total Poin')->getStateUsing(fn($record) => $record->total_points)->sortable(),
            TextColumn::make('sales_sum_quantity')
                ->label('Total Penjualan')
                ->getStateUsing(fn($record) => $record->sales->sum('quantity')),
            TextColumn::make('downlines_count')
                ->label('Jumlah Downline')
                ->getStateUsing(fn($record) => $record->downlines()->count()),
            TextColumn::make('claims_count')
                ->label('Total Reward Redeem')
                ->getStateUsing(fn($record) => $record->claims()->count()),
        ];
    }

    public function getHeaderActions(): array
    {
        return [
            Action::make('export_excel')
                ->label('Export Excel')
                ->url(route('report-overview.export'))
                ->icon('heroicon-o-arrow-down-tray')
                ->openUrlInNewTab(),
        ];
    }
}

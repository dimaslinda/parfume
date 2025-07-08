<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Sales;
use Illuminate\Support\Facades\DB;

class SalesChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Penjualan per Bulan';

    protected function getData(): array
    {
        $sales = Sales::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") as bulan'),
            DB::raw('SUM(quantity) as total')
        )
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Penjualan',
                    'data' => $sales->pluck('total'),
                ],
            ],
            'labels' => $sales->pluck('bulan'),
        ];
    }

    protected function getType(): string
    {
        return 'line'; // atau 'bar'
    }
}

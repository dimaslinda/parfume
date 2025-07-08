<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\PointHistory;
use Illuminate\Support\Facades\DB;

class PointHistoryChart extends ChartWidget
{
    protected static ?string $heading = 'Perolehan Poin per Bulan';

    protected function getData(): array
    {
        $points = PointHistory::where('amount', '>', 0)
            ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as bulan'), DB::raw('SUM(amount) as total'))
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Poin Masuk',
                    'data' => $points->pluck('total'),
                    'backgroundColor' => '#F1C40F',
                    'borderColor' => '#F39C12',
                    'fill' => true,
                    'tension' => 0.4,
                ],
            ],
            'labels' => $points->pluck('bulan'),
        ];
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'labels' => [
                        'color' => '#B7950B',
                        'font' => [
                            'weight' => 'bold',
                            'size' => 14,
                        ],
                    ],
                ],
                'title' => [
                    'display' => true,
                    'text' => static::$heading,
                    'color' => '#B7950B',
                    'font' => [
                        'weight' => 'bold',
                        'size' => 18,
                    ],
                ],
            ],
            'scales' => [
                'x' => [
                    'grid' => [
                        'color' => '#F9E79F',
                    ],
                    'ticks' => [
                        'color' => '#B7950B',
                    ],
                ],
                'y' => [
                    'grid' => [
                        'color' => '#F9E79F',
                    ],
                    'ticks' => [
                        'color' => '#B7950B',
                    ],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

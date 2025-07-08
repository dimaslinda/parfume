<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Claims;
use Illuminate\Support\Facades\DB;

class RewardRedeemChart extends ChartWidget
{
    protected static ?string $heading = 'Reward Redeem per Bulan';

    protected function getData(): array
    {
        $claims = Claims::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as bulan'), DB::raw('COUNT(*) as total'))
            ->where('status', 'approved')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Reward Redeem',
                    'data' => $claims->pluck('total'),
                    'backgroundColor' => '#27AE60',
                    'borderColor' => '#229954',
                ],
            ],
            'labels' => $claims->pluck('bulan'),
        ];
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'labels' => [
                        'color' => '#229954',
                        'font' => [
                            'weight' => 'bold',
                            'size' => 14,
                        ],
                    ],
                ],
                'title' => [
                    'display' => true,
                    'text' => static::$heading,
                    'color' => '#229954',
                    'font' => [
                        'weight' => 'bold',
                        'size' => 18,
                    ],
                ],
            ],
            'scales' => [
                'x' => [
                    'grid' => [
                        'color' => '#D5F5E3',
                    ],
                    'ticks' => [
                        'color' => '#229954',
                    ],
                ],
                'y' => [
                    'grid' => [
                        'color' => '#D5F5E3',
                    ],
                    'ticks' => [
                        'color' => '#229954',
                    ],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}

<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DownlineGrowthChart extends ChartWidget
{
    protected static ?string $heading = 'Pertumbuhan Downline per Bulan';

    /**
     * Ambil data pertumbuhan downline per bulan untuk chart.
     *
     * @return array
     */
    protected function getData(): array
    {
        $downlines = User::whereNotNull('sponsor_id')
            ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as bulan'), DB::raw('COUNT(*) as total'))
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Downline Baru',
                    'data' => $downlines->pluck('total'),
                    'backgroundColor' => '#2D5D8D',
                    'borderColor' => '#6298CE',
                    'fill' => true,
                    'tension' => 0.4,
                ],
            ],
            'labels' => $downlines->pluck('bulan'),
        ];
    }

    /**
     * Opsi chart (warna, label, dsb).
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'labels' => [
                        'color' => '#2D5D8D',
                        'font' => [
                            'weight' => 'bold',
                            'size' => 14,
                        ],
                    ],
                ],
                'title' => [
                    'display' => true,
                    'text' => static::$heading,
                    'color' => '#2D5D8D',
                    'font' => [
                        'weight' => 'bold',
                        'size' => 18,
                    ],
                ],
            ],
            'scales' => [
                'x' => [
                    'grid' => [
                        'color' => '#E5EAF2',
                    ],
                    'ticks' => [
                        'color' => '#2D5D8D',
                    ],
                ],
                'y' => [
                    'grid' => [
                        'color' => '#E5EAF2',
                    ],
                    'ticks' => [
                        'color' => '#2D5D8D',
                    ],
                ],
            ],
        ];
    }

    /**
     * Tipe chart yang digunakan.
     *
     * @return string
     */
    protected function getType(): string
    {
        return 'line';
    }
}

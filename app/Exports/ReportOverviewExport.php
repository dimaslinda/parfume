<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithAutoFilter;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReportOverviewExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new RekapUserSheet(),
            new DownlineSheet(),
        ];
    }
}

class RekapUserSheet implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        return User::all()->map(function ($user) {
            return [
                'Nama' => $user->name,
                'Email' => $user->email,
                'Total Poin' => $user->total_points,
                'Total Penjualan' => $user->sales->sum('quantity'),
                'Jumlah Downline' => $user->downlines()->count(),
                'Total Reward Redeem' => $user->claims()->count(),
            ];
        });
    }
    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'Total Poin',
            'Total Penjualan',
            'Jumlah Downline',
            'Total Reward Redeem',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:F1')->applyFromArray([
            'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => '2D5D8D'],
            ],
            'alignment' => ['horizontal' => 'center'],
        ]);
        $sheet->getStyle('A1:F' . ($sheet->getHighestRow()))
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        foreach (range('A', 'F') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        $sheet->setAutoFilter($sheet->calculateWorksheetDimension());
        return [];
    }
}

class DownlineSheet implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        $rows = [];
        foreach (User::with('downlines')->get() as $user) {
            foreach ($user->downlines as $downline) {
                $rows[] = [
                    'Nama Upline' => $user->name,
                    'Email Upline' => $user->email,
                    'Nama Downline' => $downline->name,
                    'Email Downline' => $downline->email,
                ];
            }
        }
        return collect($rows);
    }
    public function headings(): array
    {
        return [
            'Nama Upline',
            'Email Upline',
            'Nama Downline',
            'Email Downline',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:D1')->applyFromArray([
            'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => '2D5D8D'],
            ],
            'alignment' => ['horizontal' => 'center'],
        ]);
        $sheet->getStyle('A1:D' . ($sheet->getHighestRow()))
            ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        foreach (range('A', 'D') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        $sheet->setAutoFilter($sheet->calculateWorksheetDimension());
        return [];
    }
}

<?php

namespace App\Http\Controllers;

use App\Exports\ReportOverviewExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportOverviewExportController extends Controller
{
    /**
     * Ekspor data laporan overview ke file Excel.
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export()
    {
        return Excel::download(new ReportOverviewExport, 'laporan-rekap-mlm.xlsx');
    }
}

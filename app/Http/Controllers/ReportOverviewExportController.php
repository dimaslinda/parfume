<?php

namespace App\Http\Controllers;

use App\Exports\ReportOverviewExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportOverviewExportController extends Controller
{
    public function export()
    {
        return Excel::download(new ReportOverviewExport, 'laporan-rekap-mlm.xlsx');
    }
}

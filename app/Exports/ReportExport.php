<?php

namespace App\Exports;

use App\Models\report;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportExport implements FromCollection{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Report::all();
    }
}
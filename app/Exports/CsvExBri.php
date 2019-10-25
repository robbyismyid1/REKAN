<?php

namespace App\Exports;

use App\BriData;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExBri implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BriData::all();
    }
}

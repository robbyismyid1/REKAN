<?php

namespace App\Exports;

use App\BjbsData;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExBjbs implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BjbsData::all();
    }
}

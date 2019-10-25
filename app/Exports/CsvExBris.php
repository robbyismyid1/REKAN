<?php

namespace App\Exports;

use App\BrisData;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExBris implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BrisData::all();
    }
}

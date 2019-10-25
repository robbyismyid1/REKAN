<?php

namespace App\Exports;

use App\BsmData;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExBsm implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BsmData::all();
    }
}

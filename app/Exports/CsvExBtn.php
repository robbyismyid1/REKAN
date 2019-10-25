<?php

namespace App\Exports;

use App\BtnData;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExBtn implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BtnData::all();
    }
}

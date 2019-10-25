<?php

namespace App\Exports;

use App\Bjbsh2hData;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExBjbsh2h implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bjbsh2hData::all();
    }
}

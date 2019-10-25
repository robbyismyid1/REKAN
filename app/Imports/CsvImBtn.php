<?php

namespace App\Imports;

use App\BtnData;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvImBtn implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BtnData([
            'no_urut'      =>  $row['0'],
            'tanggal_1'     =>  $row['1'],
            'tanggal_2'  =>  $row['2'],
            'remark'  =>  $row['3'],
            'waktu_posting'  =>  $row['4'],
            'debit'  =>  $row['5'],
            'kredit'  =>  $row['6'],
            'saldo'  =>  $row['7'],
            'kode_transaksi_id'  =>  $row['8'],
        ]);
    }
}

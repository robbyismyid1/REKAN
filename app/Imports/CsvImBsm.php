<?php

namespace App\Imports;

use App\BsmData;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvImBsm implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BsmData([
            'no_urut'      =>  $row['0'],
            'tanggal_1'     =>  $row['1'],
            'tanggal_2'  =>  $row['2'],
            'remark'  =>  $row['3'],
            'kode_rekening_bank'  =>  $row['4'],
            'debit'  =>  $row['5'],
            'kredit'  =>  $row['6'],
            'saldo'  =>  $row['7'],
            'kode_transaksi_id'  =>  $row['8'],
        ]);
    }
}

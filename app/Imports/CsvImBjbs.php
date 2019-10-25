<?php

namespace App\Imports;

use App\BjbsData;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvImBjbs implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BjbsData([
            'no_urut'      =>  $row['0'],
            'tanggal_1'     =>  $row['1'],
            'kode'  =>  $row['2'],
            'remark'  =>  $row['3'],
            'no_bukti'  =>  $row['4'],
            'debit'  =>  $row['5'],
            'kredit'  =>  $row['6'],
            'saldo'  =>  $row['7'],
            'kode_transaksi_id'  =>  $row['8'],
        ]);
    }
}

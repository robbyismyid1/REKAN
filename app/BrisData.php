<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrisData extends Model
{
    //
    protected $fillable = [
        'no_urut', 'tanggal_1', 'tanggal_2', 'remark', 'kode_rekening_bank', 'kredit', 'debit', 'saldo', 'kode_transaksi_id'
       ];
    public $timestamp = true;

    public function kode_transaksi() {
        return $this->belongsTo('App\KodeTransaksi', 'kode_transaksi_id');
    }
}

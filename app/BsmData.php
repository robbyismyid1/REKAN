<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BsmData extends Model
{
    //
    protected $fillable = [
        'no_urut', 'tanggal_1', 'kode', 'remark', 'no_bukti', 'kredit', 'debit', 'saldo', 'kode_transaksi_id'
       ];
    public $timestamp = true;

    public function kode_transaksi() {
        return $this->belongsTo('App\KodeTransaksi', 'kode_transaksi_id');
    }
}

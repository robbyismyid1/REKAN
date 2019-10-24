<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BriData extends Model
{
    //
    protected $fillable = [
        'no_urut', 'tanggal_1', 'tanggal_2', 'remark', 'kode_teller', 'kredit', 'debit', 'saldo', 'kode_transaksi_id'
       ];
    public $timestamp = true;

    public function kode_transaksi() {
        return $this->belongsTo('App\KodeTransaki', 'kode_transaksi_id');
    }
}
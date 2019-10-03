<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BjbsData extends Model
{
    //
    protected $fillable = [
        'no_urut', 'tanggal_1', 'kode', 'remark', 'no_bukti', 'kredit', 'debit', 'saldo', 'kode_rekening_id'
       ];
    public $timestamp = true;

    public function kode_rekening() {
        return $this->belongsTo('App\KodeRekening', 'kode_rekening_id');
    }
}

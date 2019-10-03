<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BtnData extends Model
{
    //
    protected $fillable = [
        'no_urut', 'tanggal_1', 'tanggal_2', 'remark', 'waktu_posting', 'kredit', 'debit', 'saldo', 'kode_rekening_id'
       ];
    public $timestamp = true;

    public function kode_rekening() {
        return $this->belongsTo('App\KodeRekening', 'kode_rekening_id');
    }
}

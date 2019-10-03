<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBtnDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('btn_data', function (Blueprint $table) {
            $table->bigInteger('no_urut');
            $table->date('tanggal_1');
            $table->date('tanggal_2');
            $table->text('remark'); 
            $table->time('waktu_posting');
            $table->bigInteger('debit');
            $table->bigInteger('kredit');
            $table->bigInteger('saldo');
            $table->unsignedBigInteger('kode_rekening_id');
            $table->foreign('kode_rekening_id')->references('id')->on('kode_rekenings');
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('btn_data');
    }
}

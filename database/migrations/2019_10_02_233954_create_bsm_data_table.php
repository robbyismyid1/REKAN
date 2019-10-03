<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBsmDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bsm_data', function (Blueprint $table) {
            $table->bigInteger('no_urut');
            $table->date('tanggal_1');
            $table->date('tanggal_2');
            $table->text('remark'); 
            $table->string('kode_rekening_bank');
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
        Schema::dropIfExists('bsm_data');
    }
}

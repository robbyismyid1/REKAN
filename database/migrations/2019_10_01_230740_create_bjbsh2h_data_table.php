<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBjbsh2hDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bjbsh2h_data', function (Blueprint $table) {
            $table->bigInteger('no_urut');
            $table->date('tanggal_1');
            $table->string('kode');
            $table->text('remark'); 
            $table->string('no_bukti');
            $table->bigInteger('debit');
            $table->bigInteger('kredit');
            $table->bigInteger('saldo');
            $table->unsignedBigInteger('kode_transaksi_id');
            $table->foreign('kode_transaksi_id')->references('id')->on('kode_transaksis');
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
        Schema::dropIfExists('bjbsh2h_data');
    }
}

<?php

use Illuminate\Database\Seeder;

class KodeTransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 1;
        $kode_transaksi->nama = "0";
        $kode_transaksi->nama_kt = "Tidak ada keterangan";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 2;
        $kode_transaksi->nama = "asrama-bm";
        $kode_transaksi->nama_kt = "Penerimaan Asrama Bidikmisi";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 3;
        $kode_transaksi->nama = "bd";
        $kode_transaksi->nama_kt = "Bunga Deposito";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 4;
        $kode_transaksi->nama = "br";
        $kode_transaksi->nama_kt = "Bunga Rekening";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 5;
        $kode_transaksi->nama = "kembali";
        $kode_transaksi->nama_kt = "Pengembalian Pinjaman";
        $kode_transaksi->save();
        
        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 6;
        $kode_transaksi->nama = "kembali-belanja-thn-lalu";
        $kode_transaksi->nama_kt = "Pengembalian Belanja Tahun Yang Lalu";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 7;
        $kode_transaksi->nama = "kopertais";
        $kode_transaksi->nama_kt = "KOPERTAIS";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 8;
        $kode_transaksi->nama = "koreksi";
        $kode_transaksi->nama_kt = "Koreksi kesalahan bank";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 9;
        $kode_transaksi->nama = "lain-lain";
        $kode_transaksi->nama_kt = "Penerimaan yang Masih Belum Pasti";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 10;
        $kode_transaksi->nama = "ob";
        $kode_transaksi->nama_kt = "Overbooking";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 11;
        $kode_transaksi->nama = "oblu";
        $kode_transaksi->nama_kt = "UMK";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 12;
        $kode_transaksi->nama = "pasca";
        $kode_transaksi->nama_kt = "Penerimaan Pasca";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 13;
        $kode_transaksi->nama = "s1-cuti";
        $kode_transaksi->nama_kt = "Cuti";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 14;
        $kode_transaksi->nama = "s1-kompre";
        $kode_transaksi->nama_kt = "Ujian Komprehensif";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 15;
        $kode_transaksi->nama = "s1-legalisir";
        $kode_transaksi->nama_kt = "Legalisir";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 16;
        $kode_transaksi->nama = "s1-mahad";
        $kode_transaksi->nama_kt = "Mahad Aljamiah";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 17;
        $kode_transaksi->nama = "s1-munaqosah";
        $kode_transaksi->nama_kt = "Ujian Munaqosah";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 18;
        $kode_transaksi->nama = "s1-pcmb";
        $kode_transaksi->nama_kt = "Penerimaan Formulir PCMB";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 19;
        $kode_transaksi->nama = "s1-pustaka";
        $kode_transaksi->nama_kt = "Pustaka";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 20;
        $kode_transaksi->nama = "s1-sp";
        $kode_transaksi->nama_kt = "Penerimaan SP";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 21;
        $kode_transaksi->nama = "s1-spp";
        $kode_transaksi->nama_kt = "SPP S1 Reguler";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 22;
        $kode_transaksi->nama = "s1-sup";
        $kode_transaksi->nama_kt = "Ujian Proposal Penelitian Skripsi";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 23;
        $kode_transaksi->nama = "s1-wisuda";
        $kode_transaksi->nama_kt = "Penerimaan Wisuda ke 69 - Januari 2018";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 24;
        $kode_transaksi->nama = "seminar";
        $kode_transaksi->nama_kt = "Penerimaan Hasil Kerjasama";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 25;
        $kode_transaksi->nama = "sewa-bjbs";
        $kode_transaksi->nama_kt = "Bank BJBS";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 26;
        $kode_transaksi->nama = "sewa-bus";
        $kode_transaksi->nama_kt = "Penerimaan Sewa Bus";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 27;
        $kode_transaksi->nama = "sewa-gedung";
        $kode_transaksi->nama_kt = "Sewa Gedung Anwar Musadad / Abjan Soelaeman";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 28;
        $kode_transaksi->nama = "sewa-gor";
        $kode_transaksi->nama_kt = "Penerimaan Sewa Gor";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 29;
        $kode_transaksi->nama = "sewa-kantin";
        $kode_transaksi->nama_kt = "Sewa Kantin Pusat Bisnis";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 30;
        $kode_transaksi->nama = "sewa-kantin ged x L1";
        $kode_transaksi->nama_kt = "Penerimaan Sewa Kantin Gedung X Lantai 1";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 31;
        $kode_transaksi->nama = "sewa-lahan";
        $kode_transaksi->nama_kt = "Sewa Lahan UIN SGD";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 32;
        $kode_transaksi->nama = "sewa-vending";
        $kode_transaksi->nama_kt = "Penerimaan Sewa Vending Machine";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 33;
        $kode_transaksi->nama = "ukt-1";
        $kode_transaksi->nama_kt = "Penerimaan UKT @1.387.000,-";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 34;
        $kode_transaksi->nama = "ukt-2";
        $kode_transaksi->nama_kt = "Penerimaan UKT @1.450.000,-";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 35;
        $kode_transaksi->nama = "ukt-2016";
        $kode_transaksi->nama_kt = "Penerimaan UKT 2016";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 36;
        $kode_transaksi->nama = "ukt-2017";
        $kode_transaksi->nama_kt = "Penerimaan UKT 2017";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 37;
        $kode_transaksi->nama = "ukt-2018";
        $kode_transaksi->nama_kt = "Penerimaan UKT 2018";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 38;
        $kode_transaksi->nama = "ukt-2019";
        $kode_transaksi->nama_kt = "Penerimaan UKT 2019";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 39;
        $kode_transaksi->nama = "ukt-3";
        $kode_transaksi->nama_kt = "Penerimaan UKT @1.637.000,-";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 40;
        $kode_transaksi->nama = "ukt-4";
        $kode_transaksi->nama_kt = "Penerimaan UKT @1.666.000,-";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 41;
        $kode_transaksi->nama = "ukt-k1";
        $kode_transaksi->nama_kt = "Penerimaan Kekurangan UKT K1";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 42;
        $kode_transaksi->nama = "ukt-kekurangan";
        $kode_transaksi->nama_kt = "UKT Kekurangan";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 43;
        $kode_transaksi->nama = "ukt-kelebihan";
        $kode_transaksi->nama_kt = "UKT Kelebihan";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 44;
        $kode_transaksi->nama = "ukt-pindahan";
        $kode_transaksi->nama_kt = "Penerimaan UKT Pindahan";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 45;
        $kode_transaksi->nama = "ukt-ppg";
        $kode_transaksi->nama_kt = "UKT PPG";
        $kode_transaksi->save();

        $kode_transaksi = new \App\KodeTransaksi;
        $kode_transaksi->id = 46;
        $kode_transaksi->nama = "upt-bisnis";
        $kode_transaksi->nama_kt = "UPT Bisnis";
        $kode_transaksi->save();

    }
}

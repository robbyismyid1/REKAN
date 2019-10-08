<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class KodeTransaksi extends Model
{
    //
    protected $fillable = ['nama', 'nama_kt'];
    public $timestamps = true;
    
    public function bris_data()
	{
		return $this->hasMany('App\BrisData', 'kode_transaksi_id');
	}
	public function bridata()
	{
		return $this->hasMany('App\BriData', 'kode_transaksi_id');
	}
	public function btndata()
	{
		return $this->hasMany('App\BtnData', 'kode_transaksi_id');
	}
	public function bjbsh2hdata()
	{
		return $this->hasMany('App\Bjbsh2hData', 'kode_transaksi_id');
	}
	public function bjbsdata()
	{
		return $this->hasMany('App\BjbsData', 'kode_transaksi_id');
	}
	public function bsmdata()
	{
		return $this->hasMany('App\BsmData', 'kode_transaksi_id');
	}

    public static function boot()
	{
		parent::boot();
		self::deleting(function ($kode_transaksi) {
			// mengecek apakah penulis masih punya buku
			if ($kode_transaksi->bris_data->count() > 0) {
				// menyiapkan pesan error
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data BRI-Syariah';
				// $html .= '<ul>';
				// foreach ($kode_transaksi->bris as $data) {
				// 	$html .= "<li>$data->remark</li>";
				// }
				// $html .= '</ul>';
				Session::flash("flash_notification", [
					"level" => "danger",
					"message" => $html,
				]);
				// membatalkan proses penghapusan
				return false;
			}
			else if ($kode_transaksi->bridata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data BRI';
				// $html .= '<ul>';
				// foreach ($kode_transaksi->bridata as $data) {
				// 	$html .= "<li>$data->remark</li>";
				// }
				// $html .= '</ul>';
				Session::flash("flash_notification", [
					"level" => "danger",
					"message" => $html
				]);
				// membatalkan proses penghapusan
				return false;
			}
			else if ($kode_transaksi->btndata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data BTN';
				// $html .= '<ul>';
				// foreach ($kode_transaksi->bridata as $data) {
				// 	$html .= "<li>$data->remark</li>";
				// }
				// $html .= '</ul>';
				Session::flash("flash_notification", [
					"level" => "danger",
					"message" => $html
				]);
				// membatalkan proses penghapusan
				return false;
			}
			else if ($kode_transaksi->bjbsh2hdata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data BJBS H2H';
				// $html .= '<ul>';
				// foreach ($kode_transaksi->bridata as $data) {
				// 	$html .= "<li>$data->remark</li>";
				// }
				// $html .= '</ul>';
				Session::flash("flash_notification", [
					"level" => "danger",
					"message" => $html
				]);
				// membatalkan proses penghapusan
				return false;
			}
			else if ($kode_transaksi->bjbsdata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data BJBS';
				// $html .= '<ul>';
				// foreach ($kode_transaksi->bridata as $data) {
				// 	$html .= "<li>$data->remark</li>";
				// }
				// $html .= '</ul>';
				Session::flash("flash_notification", [
					"level" => "danger",
					"message" => $html
				]);
				// membatalkan proses penghapusan
				return false;
			}
			else if ($kode_transaksi->bsmdata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data BSM';
				// $html .= '<ul>';
				// foreach ($kode_transaksi->bridata as $data) {
				// 	$html .= "<li>$data->remark</li>";
				// }
				// $html .= '</ul>';
				Session::flash("flash_notification", [
					"level" => "danger",
					"message" => $html
				]);
				// membatalkan proses penghapusan
				return false;
			}
		});
	}
}

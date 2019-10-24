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
		self::deleting(function ($kode_transaksi_id) {
			// mengecek apakah penulis masih punya buku
			if ($kode_transaksi_id->bris_data->count() > 0) {
				// menyiapkan pesan error
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data <b>BRI-Syariah</b>';
				// $html .= '<ul>';
				// foreach ($kode_transaksi_id->bris as $data) {
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
			else if ($kode_transaksi_id->bridata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data <b>BRI</b>';
				// $html .= '<ul>';
				// foreach ($kode_transaksi_id->bridata as $data) {
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
			else if ($kode_transaksi_id->btndata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data <b>BTN</b>';
				// $html .= '<ul>';
				// foreach ($kode_transaksi_id->bridata as $data) {
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
			else if ($kode_transaksi_id->bjbsh2hdata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data <b>BJBS H2H</b>';
				// $html .= '<ul>';
				// foreach ($kode_transaksi_id->bridata as $data) {
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
			else if ($kode_transaksi_id->bjbsdata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data <b>BJBS</b>';
				// $html .= '<ul>';
				// foreach ($kode_transaksi_id->bridata as $data) {
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

			else if ($kode_transaksi_id->bsmdata->count() > 0) {
				$html = 'Kode Transaksi tidak bisa dihapus karena masih memiliki data <b>BSM</b>';
				// $html .= '<ul>';
				// foreach ($kode_transaksi_id->bridata as $data) {
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

			else {
				$html = 'Kode Transaksi berhasil dihapus!';
				// $html .= '<ul>';
				// foreach ($kode_transaksi_id->bridata as $data) {
				// 	$html .= "<li>$data->remark</li>";
				// }
				// $html .= '</ul>';
				Session::flash("flash_notification", [
					"level" => "success",
					"message" => $html
				]);
			}
		});
	}
}

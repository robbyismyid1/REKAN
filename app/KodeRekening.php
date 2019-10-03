<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class KodeRekening extends Model
{
    //
    protected $fillable = ['nama'];
    public $timestamps = true;
    
    public function bris_data()
	{
		return $this->hasMany('App\BrisData', 'kode_rekening_id');
	}
	public function bridata()
	{
		return $this->hasMany('App\BriData', 'kode_rekening_id');
	}
	public function btndata()
	{
		return $this->hasMany('App\BtnData', 'kode_rekening_id');
	}
	public function bjbsh2hdata()
	{
		return $this->hasMany('App\Bjbsh2hData', 'kode_rekening_id');
	}
	public function bjbsdata()
	{
		return $this->hasMany('App\BjbsData', 'kode_rekening_id');
	}
	public function bsmdata()
	{
		return $this->hasMany('App\BsmData', 'kode_rekening_id');
	}

    public static function boot()
	{
		parent::boot();
		self::deleting(function ($kode_rekening) {
			// mengecek apakah penulis masih punya buku
			if ($kode_rekening->bris_data->count() > 0) {
				// menyiapkan pesan error
				$html = 'Kode Rekening tidak bisa dihapus karena masih memiliki data BRI-Syariah';
				// $html .= '<ul>';
				// foreach ($kode_rekening->bris as $data) {
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
			else if ($kode_rekening->bridata->count() > 0) {
				$html = 'Kode Rekening tidak bisa dihapus karena masih memiliki data BRI';
				// $html .= '<ul>';
				// foreach ($kode_rekening->bridata as $data) {
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
			else if ($kode_rekening->btndata->count() > 0) {
				$html = 'Kode Rekening tidak bisa dihapus karena masih memiliki data BTN';
				// $html .= '<ul>';
				// foreach ($kode_rekening->bridata as $data) {
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
			else if ($kode_rekening->bjbsh2hdata->count() > 0) {
				$html = 'Kode Rekening tidak bisa dihapus karena masih memiliki data BJBS H2H';
				// $html .= '<ul>';
				// foreach ($kode_rekening->bridata as $data) {
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
			else if ($kode_rekening->bjbsdata->count() > 0) {
				$html = 'Kode Rekening tidak bisa dihapus karena masih memiliki data BJBS';
				// $html .= '<ul>';
				// foreach ($kode_rekening->bridata as $data) {
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
			else if ($kode_rekening->bsmdata->count() > 0) {
				$html = 'Kode Rekening tidak bisa dihapus karena masih memiliki data BSM';
				// $html .= '<ul>';
				// foreach ($kode_rekening->bridata as $data) {
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

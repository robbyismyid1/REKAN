<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class KodeRekening extends Model
{
    //
    protected $fillable = ['nama'];
    public $timestamps = true;
    
    public function bris()
	{
		return $this->hasMany('App\Bris', 'kode_rekening_id');
	}
	public function bridata()
	{
		return $this->hasMany('App\BriData', 'kode_rekening_id');
    }

    public static function boot()
	{
		parent::boot();
		self::deleting(function ($kode_rekening) {
			// mengecek apakah penulis masih punya buku
			if ($kode_rekening->bris->count() > 0) {
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
		});
	}
}

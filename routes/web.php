<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
Route::get('/home', function() {
    return redirect('/admin/bjbs-landing-page');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/user', 'UsersController');

    Route::resource('/bri', 'BriController');
    Route::get('/bri-rekap-tahun', 'BriController@rekaptahun');
    Route::get('/bri-landing-page', 'BriController@home');
    Route::get('/bri-januari', 'BriController@rekapjanuari');
    Route::get('/bri-februari', 'BriController@rekapfebruari');
    Route::get('/bri-maret', 'BriController@rekapmaret');
    Route::get('/bri-april', 'BriController@rekapapril');
    Route::get('/bri-mei', 'BriController@rekapmei');
    Route::get('/bri-juni', 'BriController@rekapjuni');
    Route::get('/bri-juli', 'BriController@rekapjuli');
    Route::get('/bri-agustus', 'BriController@rekapagustus');
    Route::get('/bri-september', 'BriController@rekapseptember');
    Route::get('/bri-oktober', 'BriController@rekapoktober');
    Route::get('/bri-nopember', 'BriController@rekapnopember');
    Route::get('/bri-desember', 'BriController@rekapdesember');

    Route::resource('/bri-syariah', 'BrisController');
    Route::get('/bri-syariah-rekap-tahun', 'BrisController@rekaptahun');
    Route::get('/bri-syariah-landing-page', 'BrisController@home');
    Route::get('/bri-syariah-januari', 'BrisController@rekapjanuari');
    Route::get('/bri-syariah-februari', 'BrisController@rekapfebruari');
    Route::get('/bri-syariah-maret', 'BrisController@rekapmaret');
    Route::get('/bri-syariah-april', 'BrisController@rekapapril');
    Route::get('/bri-syariah-mei', 'BrisController@rekapmei');
    Route::get('/bri-syariah-juni', 'BrisController@rekapjuni');
    Route::get('/bri-syariah-juli', 'BrisController@rekapjuli');
    Route::get('/bri-syariah-agustus', 'BrisController@rekapagustus');
    Route::get('/bri-syariah-september', 'BrisController@rekapseptember');
    Route::get('/bri-syariah-oktober', 'BrisController@rekapoktober');
    Route::get('/bri-syariah-nopember', 'BrisController@rekapnopember');
    Route::get('/bri-syariah-desember', 'BrisController@rekapdesember');

    Route::resource('/btn', 'BtnController');
    Route::get('/btn-rekap-tahun', 'BtnController@rekaptahun');
    Route::get('/btn-landing-page', 'BtnController@home');
    Route::get('/btn-januari', 'BtnController@rekapjanuari');
    Route::get('/btn-februari', 'BtnController@rekapfebruari');
    Route::get('/btn-maret', 'BtnController@rekapmaret');
    Route::get('/btn-april', 'BtnController@rekapapril');
    Route::get('/btn-mei', 'BtnController@rekapmei');
    Route::get('/btn-juni', 'BtnController@rekapjuni');
    Route::get('/btn-juli', 'BtnController@rekapjuli');
    Route::get('/btn-agustus', 'BtnController@rekapagustus');
    Route::get('/btn-september', 'BtnController@rekapseptember');
    Route::get('/btn-oktober', 'BtnController@rekapoktober');
    Route::get('/btn-nopember', 'BtnController@rekapnopember');
    Route::get('/btn-desember', 'BtnController@rekapdesember');

    Route::resource('/bjbs', 'BjbsController');
    Route::get('/bjbs-rekap-tahun', 'BjbsController@rekaptahun');
    Route::get('/bjbs-landing-page', 'BjbsController@home');
    Route::get('/bjbs-januari', 'BjbsController@rekapjanuari');
    Route::get('/bjbs-februari', 'BjbsController@rekapfebruari');
    Route::get('/bjbs-maret', 'BjbsController@rekapmaret');
    Route::get('/bjbs-april', 'BjbsController@rekapapril');
    Route::get('/bjbs-mei', 'BjbsController@rekapmei');
    Route::get('/bjbs-juni', 'BjbsController@rekapjuni');
    Route::get('/bjbs-juli', 'BjbsController@rekapjuli');
    Route::get('/bjbs-agustus', 'BjbsController@rekapagustus');
    Route::get('/bjbs-september', 'BjbsController@rekapseptember');
    Route::get('/bjbs-oktober', 'BjbsController@rekapoktober');
    Route::get('/bjbs-nopember', 'BjbsController@rekapnopember');
    Route::get('/bjbs-desember', 'BjbsController@rekapdesember');

    Route::resource('/bjbs-h2h', 'Bjbsh2hController');
    Route::get('/bjbs-h2h-rekap-tahun', 'Bjbsh2hController@rekaptahun');
    Route::get('/bjbs-h2h-landing-page', 'Bjbsh2hController@home');
    Route::get('/bjbs-h2h-januari', 'Bjbsh2hController@rekapjanuari');
    Route::get('/bjbs-h2h-februari', 'Bjbsh2hController@rekapfebruari');
    Route::get('/bjbs-h2h-maret', 'Bjbsh2hController@rekapmaret');
    Route::get('/bjbs-h2h-april', 'Bjbsh2hController@rekapapril');
    Route::get('/bjbs-h2h-mei', 'Bjbsh2hController@rekapmei');
    Route::get('/bjbs-h2h-juni', 'Bjbsh2hController@rekapjuni');
    Route::get('/bjbs-h2h-juli', 'Bjbsh2hController@rekapjuli');
    Route::get('/bjbs-h2h-agustus', 'Bjbsh2hController@rekapagustus');
    Route::get('/bjbs-h2h-september', 'Bjbsh2hController@rekapseptember');
    Route::get('/bjbs-h2h-oktober', 'Bjbsh2hController@rekapoktober');
    Route::get('/bjbs-h2h-nopember', 'Bjbsh2hController@rekapnopember');
    Route::get('/bjbs-h2h-desember', 'Bjbsh2hController@rekapdesember');

    Route::resource('/bsm', 'BsmController');
    Route::get('/bsm-rekap-tahun', 'BsmController@rekaptahun');
    Route::get('/bsm-landing-page', 'BsmController@home');
    Route::get('/bsm-januari', 'BsmController@rekapjanuari');
    Route::get('/bsm-februari', 'BsmController@rekapfebruari');
    Route::get('/bsm-maret', 'BsmController@rekapmaret');
    Route::get('/bsm-april', 'BsmController@rekapapril');
    Route::get('/bsm-mei', 'BsmController@rekapmei');
    Route::get('/bsm-juni', 'BsmController@rekapjuni');
    Route::get('/bsm-juli', 'BsmController@rekapjuli');
    Route::get('/bsm-agustus', 'BsmController@rekapagustus');
    Route::get('/bsm-september', 'BsmController@rekapseptember');
    Route::get('/bsm-oktober', 'BsmController@rekapoktober');
    Route::get('/bsm-nopember', 'BsmController@rekapnopember');
    Route::get('/bsm-desember', 'BsmController@rekapdesember');

    Route::resource('/kode-transaksi', 'KodetransaksiController');
});

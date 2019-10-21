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
    return view('auth.login');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/bri', 'BriController');
    Route::get('/bri-landing-page', 'BriController@home');

    Route::resource('/bri-syariah', 'BrisController');
    Route::get('/bri-syariah-landing-page', 'BrisController@home');

    Route::resource('/btn', 'BtnController');
    Route::get('/btn-landing-page', 'BtnController@home');

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
    Route::get('/bsm-landing-page', 'BsmController@home');

    Route::resource('/kode-transaksi', 'KodetransaksiController');
});

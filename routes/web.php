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
    return redirect('/admin/dashboard');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/dashboard', 'DashboardController@index');
    
    Route::resource('/kode-transaksi', 'KodetransaksiController');

    Route::resource('/bri', 'BriController');
    Route::get('/bri-rekap-tahun', 'BriController@rekaptahun');
    Route::get('/bri-landing-page', 'BriController@home');
    Route::get('/bri-januari', 'BriController@januari');
    Route::get('/bri-februari', 'BriController@februari');
    Route::get('/bri-maret', 'BriController@maret');
    Route::get('/bri-april', 'BriController@april');
    Route::get('/bri-mei', 'BriController@mei');
    Route::get('/bri-juni', 'BriController@juni');
    Route::get('/bri-juli', 'BriController@juli');
    Route::get('/bri-agustus', 'BriController@agustus');
    Route::get('/bri-september', 'BriController@september');
    Route::get('/bri-oktober', 'BriController@oktober');
    Route::get('/bri-nopember', 'BriController@nopember');
    Route::get('/bri-desember', 'BriController@desember');
    Route::get('/bri/export', 'CsvFileController@csv_exbri')->name('export.bri');
    // Route::post('/bri/import', 'CsvFileController@csv_imbri')->name('import');

    Route::resource('/bri-syariah', 'BrisController');
    Route::get('/bri-syariah-rekap-tahun', 'BrisController@rekaptahun');
    Route::get('/bri-syariah-landing-page', 'BrisController@home');
    Route::get('/bri-syariah-januari', 'BrisController@januari');
    Route::get('/bri-syariah-februari', 'BrisController@februari');
    Route::get('/bri-syariah-maret', 'BrisController@maret');
    Route::get('/bri-syariah-april', 'BrisController@april');
    Route::get('/bri-syariah-mei', 'BrisController@mei');
    Route::get('/bri-syariah-juni', 'BrisController@juni');
    Route::get('/bri-syariah-juli', 'BrisController@juli');
    Route::get('/bri-syariah-agustus', 'BrisController@agustus');
    Route::get('/bri-syariah-september', 'BrisController@september');
    Route::get('/bri-syariah-oktober', 'BrisController@oktober');
    Route::get('/bri-syariah-nopember', 'BrisController@nopember');
    Route::get('/bri-syariah-desember', 'BrisController@desember');
    Route::get('/bri-syariah/export', 'CsvFileController@csv_exbris')->name('export.bris');
    // Route::post('/bri-syariah/import', 'CsvFileController@csv_imbris')->name('import');

    Route::resource('/btn', 'BtnController');
    Route::get('/btn-rekap-tahun', 'BtnController@rekaptahun');
    Route::get('/btn-landing-page', 'BtnController@home');
    Route::get('/btn-januari', 'BtnController@januari');
    Route::get('/btn-februari', 'BtnController@februari');
    Route::get('/btn-maret', 'BtnController@maret');
    Route::get('/btn-april', 'BtnController@april');
    Route::get('/btn-mei', 'BtnController@mei');
    Route::get('/btn-juni', 'BtnController@juni');
    Route::get('/btn-juli', 'BtnController@juli');
    Route::get('/btn-agustus', 'BtnController@agustus');
    Route::get('/btn-september', 'BtnController@september');
    Route::get('/btn-oktober', 'BtnController@oktober');
    Route::get('/btn-nopember', 'BtnController@nopember');
    Route::get('/btn-desember', 'BtnController@desember');
    Route::get('/btn/export', 'CsvFileController@csv_exbtn')->name('export.btn');
    // Route::post('/btn/import', 'CsvFileController@csv_imbtn')->name('import');

    Route::resource('/bjbs', 'BjbsController');
    Route::get('/bjbs-rekap-tahun', 'BjbsController@rekaptahun');
    Route::get('/bjbs-landing-page', 'BjbsController@home');
    Route::get('/bjbs-januari', 'BjbsController@januari');
    Route::get('/bjbs-februari', 'BjbsController@februari');
    Route::get('/bjbs-maret', 'BjbsController@maret');
    Route::get('/bjbs-april', 'BjbsController@april');
    Route::get('/bjbs-mei', 'BjbsController@mei');
    Route::get('/bjbs-juni', 'BjbsController@juni');
    Route::get('/bjbs-juli', 'BjbsController@juli');
    Route::get('/bjbs-agustus', 'BjbsController@agustus');
    Route::get('/bjbs-september', 'BjbsController@september');
    Route::get('/bjbs-oktober', 'BjbsController@oktober');
    Route::get('/bjbs-nopember', 'BjbsController@nopember');
    Route::get('/bjbs-desember', 'BjbsController@desember');
    Route::get('/bjbs/export', 'BjbsController@csv_exbjbs');
    // Route::post('/bjbs/import', 'CsvFileController@csv_imbjbs')->name('import');

    Route::resource('/bjbs-h2h', 'Bjbsh2hController');
    Route::get('/bjbs-h2h-rekap-tahun', 'Bjbsh2hController@rekaptahun');
    Route::get('/bjbs-h2h-landing-page', 'Bjbsh2hController@home');
    Route::get('/bjbs-h2h-januari', 'Bjbsh2hController@januari');
    Route::get('/bjbs-h2h-februari', 'Bjbsh2hController@februari');
    Route::get('/bjbs-h2h-maret', 'Bjbsh2hController@maret');
    Route::get('/bjbs-h2h-april', 'Bjbsh2hController@april');
    Route::get('/bjbs-h2h-mei', 'Bjbsh2hController@mei');
    Route::get('/bjbs-h2h-juni', 'Bjbsh2hController@juni');
    Route::get('/bjbs-h2h-juli', 'Bjbsh2hController@juli');
    Route::get('/bjbs-h2h-agustus', 'Bjbsh2hController@agustus');
    Route::get('/bjbs-h2h-september', 'Bjbsh2hController@september');
    Route::get('/bjbs-h2h-oktober', 'Bjbsh2hController@oktober');
    Route::get('/bjbs-h2h-nopember', 'Bjbsh2hController@nopember');
    Route::get('/bjbs-h2h-desember', 'Bjbsh2hController@desember');
    Route::get('/bjbs-h2h/export', 'CsvFileController@csv_exbjbsh2h')->name('export.bjbsh2h');
    // Route::post('/bjbs-h2h/import', 'CsvFileController@csv_imbjbsh2h')->name('import');

    Route::resource('/bsm', 'BsmController');
    Route::get('/bsm-rekap-tahun', 'BsmController@rekaptahun');
    Route::get('/bsm-landing-page', 'BsmController@home');
    Route::get('/bsm-januari', 'BsmController@januari');
    Route::get('/bsm-februari', 'BsmController@februari');
    Route::get('/bsm-maret', 'BsmController@maret');
    Route::get('/bsm-april', 'BsmController@april');
    Route::get('/bsm-mei', 'BsmController@mei');
    Route::get('/bsm-juni', 'BsmController@juni');
    Route::get('/bsm-juli', 'BsmController@juli');
    Route::get('/bsm-agustus', 'BsmController@agustus');
    Route::get('/bsm-september', 'BsmController@september');
    Route::get('/bsm-oktober', 'BsmController@oktober');
    Route::get('/bsm-nopember', 'BsmController@nopember');
    Route::get('/bsm-desember', 'BsmController@desember');
    Route::get('/bsm/export', 'CsvFileController@csv_exbsm')->name('export.bsm');
    // Route::post('/bsm/import', 'CsvFileController@csv_imbsm')->name('import');

    Route::resource('/user', 'UsersController');
});

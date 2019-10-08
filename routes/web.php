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
    Route::get('/bjbs-landing-page', 'BjbsController@home');
    Route::get('/bjbs-rekap', 'BjbsController@rekaptahun');
    Route::resource('/bjbs-h2h', 'Bjbsh2hController');
    Route::get('/bjbs-h2h-landing-page', 'Bjbsh2hController@home');
    Route::resource('/bsm', 'BsmController');
    Route::get('/bsm-landing-page', 'BsmController@home');
    Route::resource('/kode-transaksi', 'KodetransaksiController');
});

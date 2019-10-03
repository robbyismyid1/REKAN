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
    Route::resource('/bri-syariah', 'BrisController');
    Route::resource('/btn', 'BtnController');
    Route::resource('/bjbs', 'BjbsController');
    Route::resource('/bjbs-h2h', 'Bjbsh2hController');
    Route::resource('/bsm', 'BsmController');
    Route::resource('/kode-rekening', 'KoderekeningController');
});

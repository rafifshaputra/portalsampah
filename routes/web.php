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
Route::get('/skenario1', function () {
    return view('Daftar/skenario1');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/daftarBSU', function () {
    return view('Daftar/daftarBSU');
});

Route::get('/form-minat', function () {
    return view('Daftar/daftarNasabah');
});

Route::post('/memproses-data', 'nasabahController@tambahNasabah');
Route::get('/dashboard-27419','nasabahController@tampilGrafik' );

Route::get('/dashboard-27419/daftarMinat','nasabahController@daftarNasabah' );

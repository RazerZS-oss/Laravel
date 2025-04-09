<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::view('/dashboard', 'pages.dashboard');
Route::view('/pasien', 'pages.pasien');
Route::view('/dokter', 'pages.dokter');
Route::view('/obat', 'pages.obat');
Route::view('/pemeriksaan', 'pages.pemeriksaan');
Route::view('/tentang', 'pages.tentang');
Route::view('/laporan', 'pages.laporan');
Route::view('/detail-periksa', 'pages.detail_periksa')->name('detail.periksa');



<?php

use Illuminate\Support\Facades\Route;

// Route Halaman Beranda (Utama)
Route::get('/', function () {
    return view('welcome');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/pendidikan', function () {
    return view('pendidikan');
});
Route::get('/kerja', function () {
    return view('kerja');
});
Route::get('/projek', function () {
    return view('projek');
});
Route::get('/sertifikasi', function () {
    return view('sertifikasi');
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/tentang', function () {
    return view('frontend.tentang');
});
Route::get('/kontak', function () {
    return view('frontend.kontak');
});
Route::get('/kelas', function () {
    return view('frontend.kelas');
});
Route::get('/tes', function () {
    return view('frontend.tes');
});

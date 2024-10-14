<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/beranda', 'pages/beranda')->name('beranda');
Route::view('/perawatan', 'pages/perawatan')->name('perawatan');
Route::view('/pemberdayaan', 'pages/pemberdayaan')->name('pemberdayaan');
Route::view('/komunitas', 'pages/komunitas')->name('komunitas');
Route::view('/griya-lansia', 'pages/griya-lansia')->name('griya-lansia');
Route::view('/profile', 'pages/profile')->name('profile');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PelayananController;

Route::get('/', [BerandaController::class, 'index'])
    ->name('beranda');

Route::get('/pelayanan', [PelayananController::class, 'index'])
    ->name('pelayanan');

Route::view('/about', 'about')
    ->name('about');

Route::view('/kontak', 'kontak')
    ->name('kontak');

Route::resource('slider', SliderController::class);
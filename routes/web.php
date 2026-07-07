<?php

use App\Http\Controllers\AuthManualController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\OurValueController;
use App\Http\Controllers\OurValueImageController;
use App\Http\Controllers\Produk1Controller;
use App\Http\Controllers\Produk2Controller;
use App\Http\Controllers\Produk3Controller;
use App\Http\Controllers\SecoundController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TheprodukController;
use App\Http\Controllers\Admin\BaruController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;
use App\Models\Location;
use App\Models\Tentang;
use App\Http\Controllers\Admin\TeleponController as AdminTeleponController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\Mapscontroller as AdminMapsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\TheprodukimageController;
use App\Http\Controllers\Admin\EmpatKontakController as AdminEmpatKontakControllerr;
use App\Http\Controllers\HubKamiController;

// Halaman kontak (form)
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// Simpan data form
Route::post('/hub_kami', [HubKamiController::class, 'store'])
    ->name('hub_kami.store');

// Halaman admin untuk melihat data
Route::get('/hub_kami', [HubKamiController::class, 'index'])
    ->name('hub.index');
    Route::resource('Hub_kami', HubKamiController::class);



Route::get('/', [BerandaController::class, 'index'])
    ->name('beranda');

Route::get('/pelayanan', [PelayananController::class, 'index'])
    ->name('pelayanan');

Route::get('/about', function () {
    $locations = Location::latest()->get();
    $tentang = Tentang::latest()->first();
    return view('about', compact('locations', 'tentang'));
})->name('about');

Route::get('/kontak', [KontakController::class, 'index'])
    ->name('kontak');

    

Route::resource('slider', SliderController::class);
Route::resource('location', LocationController::class);
Route::resource('tentang', TentangController::class);
Route::resource('ourvalues', OurValueController::class);
Route::resource('ourvalueimage', OurValueImageController::class);
Route::resource('produk1', Produk1Controller::class);
Route::resource('produk2', Produk2Controller::class);
Route::resource('produk3', Produk3Controller::class);
Route::resource('secound', SecoundController::class);
Route::resource('service', ServiceController::class);
Route::resource('theproduk', TheprodukController::class);
Route::resource('theprodukimage', TheprodukimageController::class);
Route::resource('empatkontak', AdminEmpatKontakControllerr::class);





Route::get('/admin/baru', [BaruController::class, 'index'])->name('admin.baru');
Route::post('/admin/baru', [BaruController::class, 'store'])->name('admin.baru.store');
Route::post('/admin/baru/update', [BaruController::class, 'update'])->name('admin.baru.update');

Route::get('/admin/kontak', [AdminKontakController::class, 'index'])->name('admin.kontak');
Route::put('/admin/kontak', [AdminKontakController::class, 'update'])->name('admin.kontak.update');

Route::prefix('admin')->group(function () {

    Route::get('/kontak', [AdminKontakController::class, 'index'])
        ->name('admin.kontak');

    Route::put('/kontak', [AdminKontakController::class, 'update'])
        ->name('admin.kontak.update');

});

Route::get('/telepon', [TeleponController::class, 'index'])
    ->name('telepon');

Route::prefix('admin')->group(function () {

    Route::get('/telepon', [AdminTeleponController::class, 'index'])
        ->name('admin.telepon');

    Route::put('/telepon', [AdminTeleponController::class, 'update'])
        ->name('admin.telepon.update');

});

//maps
Route::get('/maps', [MapsController::class, 'index'])
    ->name('maps');

Route::prefix('admin')->group(function () {

    Route::get('/maps', [AdminMapsController::class, 'index'])
        ->name('admin.maps');

    Route::put('/maps', [AdminMapsController::class, 'update'])
        ->name('admin.maps.update');

});

//lohin
Route::get('/login', [AuthManualController::class, 'index'])->name('login');
Route::post('/login', [AuthManualController::class, 'loginproses'])->name('loginproses');
Route::post('/logout', [AuthManualController::class, 'logout'])->name('logout');

Route::get('/kontak', [KontakController::class, 'index'])
    ->name('kontak');

    //serach
Route::get('/search', [SearchController::class, 'index'])->name('search');







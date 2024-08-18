<?php

use Illuminate\Support\Facades\Route;

// Load Controller
use App\Http\Controllers\Frontend\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('/');

    Route::get('/produk', 'produk')->name('produk');
    Route::get('/produk-detail/{id}', 'produkDetail')->name('produkDetail');

    Route::get('/katalog', 'katalog')->name('katalog');
    Route::get('/about', 'about')->name('about');
});

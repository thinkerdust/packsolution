<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\ProdukKategoriController;
use App\Http\Controllers\Panel\ProdukController;
use App\Http\Controllers\Panel\CarouselController;

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/change-password', 'change_password');
        Route::post('/process-change-password', 'process_change_password');
    });

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/data-produk-kategori', [ProdukKategoriController::class, 'list_data_produk_kategori'])->middleware('ajax.request');

    Route::group(['prefix' => 'produk-kategori'], function () {
        Route::controller(ProdukKategoriController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/datatable', 'datatable_produk_kategori');
            Route::get('/add', 'add_produk_kategori');
            Route::post('/store', 'store_produk_kategori');
            Route::get('/edit/{uid}', 'edit_produk_kategori');
            Route::get('/delete/{uid}', 'delete_produk_kategori');
        });
    });

    Route::group(['prefix' => 'produk'], function () {
        Route::controller(ProdukController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/datatable', 'datatable_produk');
            Route::get('/add', 'add_produk');
            Route::post('/store', 'store_produk');
            Route::get('/edit/{uid}', 'edit_produk');
            Route::get('/delete/{uid}', 'delete_produk');
        });
    });

    Route::group(['prefix' => 'carousel'], function () {
        Route::controller(CarouselController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/datatable', 'datatable_carousel');
            Route::get('/add', 'add_carousel');
            Route::post('/store', 'store_carousel');
            Route::get('/edit/{uid}', 'edit_carousel');
            Route::get('/delete/{uid}', 'delete_carousel');
            Route::post('/aktivasi', 'aktivasi_carousel');
        });
    });

});
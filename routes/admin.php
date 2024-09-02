<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\CarouselController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\ProdukKategoriController;
use App\Http\Controllers\Panel\ProdukController;
use App\Http\Controllers\Panel\PelangganController;
use App\Http\Controllers\Panel\TentangKamiController;
use App\Http\Controllers\Panel\KatalogController;
use App\Http\Controllers\Panel\FaqController;

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

    Route::group(['prefix' => 'pelanggan'], function () {
        Route::controller(PelangganController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/datatable', 'datatable_pelanggan');
            Route::get('/add', 'add_pelanggan');
            Route::post('/store', 'store_pelanggan');
            Route::get('/edit/{uid}', 'edit_pelanggan');
            Route::get('/delete/{uid}', 'delete_pelanggan');
        });
    });

    Route::group(['prefix' => 'tentang-kami'], function () {
        Route::controller(TentangKamiController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/datatable', 'datatable_tentang_kami');
            Route::get('/add', 'add_tentang_kami');
            Route::post('/store', 'store_tentang_kami');
            Route::get('/edit/{uid}', 'edit_tentang_kami');
            Route::get('/delete/{uid}', 'delete_tentang_kami');
            Route::post('/aktivasi', 'aktivasi_tentang_kami');
        });
    });

    Route::group(['prefix' => 'katalog'], function () {
        Route::controller(KatalogController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/datatable', 'datatable_katalog');
            Route::get('/add', 'add_katalog');
            Route::post('/store', 'store_katalog');
            Route::get('/edit/{uid}', 'edit_katalog');
            Route::get('/delete/{uid}', 'delete_katalog');
        });
    });

    Route::group(['prefix' => 'faq'], function () {
        Route::controller(FaqController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/datatable', 'datatable_faq');
            Route::get('/add', 'add_faq');
            Route::post('/store', 'store_faq');
            Route::get('/edit/{uid}', 'edit_faq');
            Route::get('/delete/{uid}', 'delete_faq');
        });
    });

});
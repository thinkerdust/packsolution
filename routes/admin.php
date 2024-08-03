<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\ProdukKategoriController;

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

    Route::group(['prefix' => 'produk-kategori'], function () {
        Route::controller(ProdukKategoriController::class)->group(function () {
            Route::get('/', 'index')->name('produk-kategori');
            Route::get('/datatable', 'datatable_produk_kategori');
            Route::get('/add', 'add_produk_kategori');
            Route::post('/store', 'store_produk_kategori');
            Route::get('/edit/{uid}', 'edit_produk_kategori');
            Route::get('/delete/{uid}', 'delete_produk_kategori');
        });
    });
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\DashboardController;

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
});
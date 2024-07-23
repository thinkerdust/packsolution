<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\DashboardController;

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/authenticate', 'authenticate');
    Route::get('/logout', 'logout');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
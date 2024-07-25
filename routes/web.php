<?php

use Illuminate\Support\Facades\Route;

// Load Controller
use App\Http\Controllers\Frontend\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

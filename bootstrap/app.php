<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AjaxRequest;
use App\Http\Middleware\IncrementViewCounter;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function() {
            Route::middleware('web')->prefix('admin')->group(base_path('routes/admin.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'ajax.request'      => AjaxRequest::class,
            'view-counter'  => IncrementViewCounter::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // إضافة استثناءات لمنع خطأ 419 أثناء الاختبار والتصوير
        $middleware->validateCsrfTokens(except: [
            'login',
            'register',
            'books/*',
            'books/update/*',
            'books/delete/*',
            'logout'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
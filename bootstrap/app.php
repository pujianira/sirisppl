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
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'pembimbingakademik' => \App\Http\Middleware\pembimbingakademik::class,
            'dekan' => \App\Http\Middleware\dekan::class,
            'bagianakademik' => \App\Http\Middleware\bagianakademik::class,
            'kaprodi' => \App\Http\Middleware\kaprodi::class,
            'mahasiswa' => \App\Http\Middleware\mahasiswa::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

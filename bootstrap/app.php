<?php

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->renderable(function (QueryException $exception, Request $request) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'The application database is currently unavailable. Please try again later.',
                ], 503);
            }

            return response()->view('home', [
                'databaseUnavailable' => true,
                'databaseErrorMessage' => app()->hasDebugModeEnabled() ? $exception->getMessage() : null,
            ], 503);
        });
    })->create();

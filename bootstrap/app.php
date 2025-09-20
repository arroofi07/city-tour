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
            'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
            'check.post.size' => \App\Http\Middleware\CheckPostSize::class,
        ]);

        $middleware->redirectGuestsTo(fn () => route('login'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (\Illuminate\Http\Exceptions\PostTooLargeException $e, $request) {
            return back()->withErrors([
                'file' => 'File yang diupload terlalu besar! Maksimal total ukuran file adalah 10MB. Silakan kompres gambar atau upload file yang lebih kecil. Tips: Gunakan tool online seperti TinyPNG untuk kompres gambar.',
            ])->withInput()->with('error', 'Upload gagal karena ukuran file terlalu besar!');
        });
    })->create();

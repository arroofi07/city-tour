<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\PostTooLargeException;

class CheckPostSize
{
  /**
   * Handle an incoming request.
   */
  public function handle(Request $request, Closure $next)
  {
    try {
      return $next($request);
    } catch (PostTooLargeException $e) {
      return back()->withErrors([
        'file' => 'File yang diupload terlalu besar. Maksimal total ukuran file adalah 8MB. Silakan kompres gambar atau upload file yang lebih kecil.'
      ])->withInput();
    }
  }
}

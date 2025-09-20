<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPostSize
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Let the global exception handler in bootstrap/app.php handle PostTooLargeException
        return $next($request);
    }
}

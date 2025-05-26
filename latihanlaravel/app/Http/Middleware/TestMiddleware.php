<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek middleware jalan
        \log::info('TestMiddleware is running');
        return $next($request);
    }
}

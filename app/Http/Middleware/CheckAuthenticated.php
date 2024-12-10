<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah user sudah login
        if (!session('user')) {
            // Jika tidak, redirect ke halaman login dengan pesan
            return redirect('/login')->with('error', 'You need to log in first.');
        }

        return $next($request);
    }
}

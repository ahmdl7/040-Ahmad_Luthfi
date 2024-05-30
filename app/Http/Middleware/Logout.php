<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Logout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // periksa apakah admin sudah login
        if (Auth::check()) {
            // logout admin
            Auth::logout();

            // Redirect ke halaman login
            return redirect('/login')->with('error', 'Anda Telah Logout ');
        }

        return $next($request);
    }
}

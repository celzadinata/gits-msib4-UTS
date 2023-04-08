<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'penjual') {
                return $next($request);
            } else {
                return redirect('/')->with('message', 'Akun anda tidak mempunyai akses, silahkan membuat akun penjual!');
            }
        } else {
            return redirect('/login')->with('message', 'Silahkan login terlebih dahulu');
        }
        return $next($request);
    }
}

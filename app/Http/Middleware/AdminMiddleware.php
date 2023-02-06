<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\AdminMiddleware as Middleware;
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
        // Admin 1
        // Pelanggan 0
        if(Auth::check()){
            if(Auth::user()->role == '1'){
                return $next($request);
            } else {
                return redirect('/user')->with('message', 'Bukan Admin Coy');
            };
        } else {
            return redirect('/login')->with('message', 'Login dulu kawan');
        }
        return $next($request);
    }
}

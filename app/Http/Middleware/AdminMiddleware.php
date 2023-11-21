<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role == 'Administrador') {
            return $next($request);
        } else if (auth()->check() && auth()->user()->role == 'Secretaria') {
            return redirect('/s');
        } else if (auth()->check()) {
            auth()->logout();
            return redirect('/login');
        }
        return redirect('/login');
    }
}

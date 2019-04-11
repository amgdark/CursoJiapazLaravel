<?php

namespace App\Http\Middleware;

use Closure;

class RolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rol)
    {
        if (auth()->user()->validaRol($rol)){
            return $next($request);
        }
        return redirect()->route('home')->with('warning','No tienes permisos para esa acción');
    }
}

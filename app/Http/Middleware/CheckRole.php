<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $rol
     * @return mixed
     */
    public function handle($request, Closure $next, $rol)
    {
        // Verifica si el usuario está autenticado
        if (!Auth::check()) {
            return redirect('/login');  // Redirige al login si no está autenticado
        }

        // Obtiene el usuario autenticado
        $user = Auth::user();


        return $next($request);
    }
}

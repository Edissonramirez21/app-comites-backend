<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckCodigoVerificacion
{
   public function handle($request, Closure $next)
{
    $user = Auth::user();

    if ($user) {
        // Si codigo_expiracion no es null y la fecha actual es mayor que codigo_expiracion
        if ($user->codigo_expiracion !== null && now()->greaterThan($user->codigo_expiracion)) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('sesion.expirada')->withErrors(['sesion.expirada' => 'Tu sesión ha expirado. Por favor, inicia sesión nuevamente.']);
        }
    }

    return $next($request);
}

}




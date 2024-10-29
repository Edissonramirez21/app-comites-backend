<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioLogin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;

class LoginController extends Controller
{
        public function showLoginForm()
        {
            return view('login');
        }
        
        public function login(Request $request)
        {
            $credentials = $request->only('identificacion', 'codigo_validacion');
            
            // Buscar al usuario con los datos proporcionados
            $user = UsuarioLogin::where('identificacion', $request->input('identificacion'))
                ->where('codigo_validacion', $request->input('codigo_validacion'))
                ->first();


                if ($user) {
                    // Verificar si el código ha expirado
                    if (now()->lessThanOrEqualTo($user->codigo_expiracion)) {
                        // Limpiar el código de validación para que no pueda ser reutilizado
                        $user->codigo_validacion = null;
                      /*   $user->codigo_expiracion = null;  */// Opcional: limpiar también la expiración
                        $user->save();
                    
                        // Autenticar al usuario
                        Auth::login($user);
            
                        return redirect('home')->with(['success' => 'Inicio de sesión exitoso']);
                    } else {
                        return redirect('login')->with(['error' => 'El código de validación ha expirado']);
                    }
                } else {
                    // Mostrar error si no coincide
                    return redirect('login')->with(['error' => 'Identificación o código incorrectos']);
                }     
        }

        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        
             // Redirigir a la página de inicio o a otra vista
            return redirect('login')->with('success', 'Has cerrado sesión exitosamente.');
        }
    
    
}

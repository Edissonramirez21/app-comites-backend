<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioLogin;

class RegistroController extends Controller
{
    public function showForm()
    {
        return view('registro');
    }

    public function submitForm(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|email|unique:usuario_login,email',
            'telefono' => 'required|string|max:15',
            'identificacion' => 'required|string|max:20|unique:usuario_login,identificacion',

        ], [
            'email.unique' => 'El correo electrónico ya está registrado.',
            'identificacion.unique' => 'La identificación ya está registrada.',
            // Agrega más mensajes personalizados si lo deseas
        ]);

        // Crear el usuario en la base de datos
        UsuarioLogin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'telefono' => $validatedData['telefono'],
            'identificacion' => $validatedData['identificacion'],
        ]);

        // Redirigir a la nueva vista de éxito con mensaje
         return redirect()->route('lista.espera')->with('success', 'Usted se encuentra registrado y en la lista de espera.');
    }
}

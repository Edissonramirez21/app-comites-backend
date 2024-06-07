<?php

namespace App\Http\Controllers;

use App\Models\UsuarioLogin;
use Illuminate\Http\Request;

class UsuarioLoginController extends Controller
{
      // Obtener todos los usuarios login
      public function index()
      {
          return UsuarioLogin::all();
      }
  
      // Obtener un usuario login específico
      public function show($id)
      {
          return UsuarioLogin::findOrFail($id);
      }
  
      // Crear un nuevo usuario login
      public function store(Request $request)
      {
          $request->validate([
              'Nombre' => 'required',
              'Correo' => 'required|email',
              'Telefono' => 'required|numeric',
              'Rol' => 'required'
          ]);
  
          $usuarioLogin = UsuarioLogin::create($request->all());
          return response()->json($usuarioLogin, 201);
      }
  
      // Actualizar un usuario login existente
      public function update(Request $request, $id)
      {
          $request->validate([
              'Nombre' => 'required',
              'Correo' => 'required|email',
              'Telefono' => 'required|numeric',
              'Rol' => 'required'
          ]);
  
          $usuarioLogin = UsuarioLogin::findOrFail($id);
          $usuarioLogin->update($request->all());
          return response()->json($usuarioLogin, 200);
      }
  
      // Eliminar un usuario login
      public function destroy($id)
      {
          $usuarioLogin = UsuarioLogin::findOrFail($id);
          $usuarioLogin->delete();
          return response()->json(null, 204);
      }
}

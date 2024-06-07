<?php

namespace App\Http\Controllers;

use App\Models\IntegranteComite;
use Illuminate\Http\Request;

class IntegranteComiteController extends Controller
{
    // Obtener todos los integrantes del comité
    public function index()
    {
        return IntegranteComite::all();
    }

    // Obtener un integrante del comité específico
    public function show($id)
    {
        return IntegranteComite::findOrFail($id);
    }

    // Crear un nuevo integrante del comité
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required|email',
            'Rol' => 'required',
        ]);

        $integrante = IntegranteComite::create($request->all());
        return response()->json($integrante, 201);
    }

    // Actualizar un integrante del comité existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required|email',
            'Rol' => 'required',
        ]);

        $integrante = IntegranteComite::findOrFail($id);
        $integrante->update($request->all());
        return response()->json($integrante, 200);
    }

    // Eliminar un integrante del comité
    public function destroy($id)
    {
        $integrante = IntegranteComite::findOrFail($id);
        $integrante->delete();
        return response()->json(null, 204);
    }
}

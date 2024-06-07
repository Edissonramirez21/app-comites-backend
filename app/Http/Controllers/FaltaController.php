<?php

namespace App\Http\Controllers;

use App\Models\Falta;
use Illuminate\Http\Request;

class FaltaController extends Controller
{
    // Obtener todas las faltas
    public function index()
    {
        return Falta::all();
    }

    // Obtener una falta específica
    public function show($id)
    {
        return Falta::findOrFail($id);
    }

    // Crear una nueva falta
    public function store(Request $request)
    {
        $request->validate([
            'Tipo_falta' => 'required|in:Academina,Diciplinaria',
            'Falta' => 'required',
            'Gravedad' => 'required|in:leve,grave,gravisima',
        ]);

        $falta = Falta::create($request->all());
        return response()->json($falta, 201);
    }

    // Actualizar una falta existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'Tipo_falta' => 'required|in:Academina,Diciplinaria',
            'Falta' => 'required',
            'Gravedad' => 'required|in:leve,grave,gravisima',
        ]);

        $falta = Falta::findOrFail($id);
        $falta->update($request->all());
        return response()->json($falta, 200);
    }

    // Eliminar una falta
    public function destroy($id)
    {
        $falta = Falta::findOrFail($id);
        $falta->delete();
        return response()->json(null, 204);
    }
}

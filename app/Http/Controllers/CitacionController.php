<?php

namespace App\Http\Controllers;

use App\Models\Citacion;
use Illuminate\Http\Request;

class CitacionController extends Controller
{
    // Obtiene todas las citaciones
    public function index()
    {
        return Citacion::all();
    }

    // Obtiene una citación específica
    public function show($id)
    {
        return Citacion::findOrFail($id);
    }

    // Crear una nueva citación
    public function store(Request $request)
    {
        $request->validate([
            'Lugar' => 'required',
            'fk_idSolicitudComite' => 'required',
            'fk_idHorario_Bienestar' => 'required',
        ]);

        $citacion = Citacion::create($request->all());
        return response()->json($citacion, 201);
    }

    // Actualizar una citación existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'Lugar' => 'required',
            'fk_idSolicitudComite' => 'required',
            'fk_idHorario_Bienestar' => 'required',
        ]);

        $citacion = Citacion::findOrFail($id);
        $citacion->update($request->all());
        return response()->json($citacion, 200);
    }

    // Eliminar una citación
    public function destroy($id)
    {
        $citacion = Citacion::findOrFail($id);
        $citacion->delete();
        return response()->json(null, 204);
    }
}

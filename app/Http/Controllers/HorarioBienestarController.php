<?php

namespace App\Http\Controllers;

use App\Models\HorarioBienestar;
use Illuminate\Http\Request;

class HorarioBienestarController extends Controller
{
    // Obtener todos los horarios de bienestar
    public function index()
    {
        return HorarioBienestar::all();
    }

    // Obtener un horario de bienestar específico
    public function show($id)
    {
        return HorarioBienestar::findOrFail($id);
    }

    // Crear un nuevo horario de bienestar
    public function store(Request $request)
    {
        $request->validate([
            'Fecha' => 'required|date',
            'Hora' => 'required|date_format:H:i:s',
        ]);

        $horario = HorarioBienestar::create($request->all());
        return response()->json($horario, 201);
    }

    // Actualizar un horario de bienestar existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'Fecha' => 'required|date',
            'Hora' => 'required|date_format:H:i:s',
        ]);

        $horario = HorarioBienestar::findOrFail($id);
        $horario->update($request->all());
        return response()->json($horario, 200);
    }

    // Eliminar un horario de bienestar
    public function destroy($id)
    {
        $horario = HorarioBienestar::findOrFail($id);
        $horario->delete();
        return response()->json(null, 204);
    }
}

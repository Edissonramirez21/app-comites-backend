<?php

namespace App\Http\Controllers;

use App\Models\SolicitudComiteAAprendiz;
use Illuminate\Http\Request;

class SolicitudComiteAAprendizController extends Controller
{
    // Obtener todas las relaciones entre solicitudes de comité y aprendices
    public function index()
    {
        return SolicitudComiteAAprendiz::all();
    }

    // Obtener una relación específica entre solicitud de comité y aprendiz
    public function show($solicitud_id, $aprendiz_id)
    {
        return SolicitudComiteAAprendiz::where('Solicitud_Comite_idSolicitudComite', $solicitud_id)
            ->where('Aprendiz_idAprendiz', $aprendiz_id)
            ->firstOrFail();
    }

    // Crear una nueva relación entre solicitud de comité y aprendiz
    public function store(Request $request)
    {
        $request->validate([
            'Solicitud_Comite_idSolicitudComite' => 'required|exists:Solicitud_Comite,idSolicitudComite',
            'Aprendiz_idAprendiz' => 'required|exists:Aprendiz,idAprendiz',
        ]);

        $relacion = SolicitudComiteAAprendiz::create($request->all());
        return response()->json($relacion, 201);
    }

    // Eliminar una relación entre solicitud de comité y aprendiz
    public function destroy($solicitud_id, $aprendiz_id)
    {
        $relacion = SolicitudComiteAAprendiz::where('Solicitud_Comite_idSolicitudComite', $solicitud_id)
            ->where('Aprendiz_idAprendiz', $aprendiz_id)
            ->firstOrFail();
        $relacion->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SolicitudComite;
use Illuminate\Http\Request;

class SolicitudComiteController extends Controller
{
     // Obtiene todas las solicitudes de comité
     public function index()
     {
         return SolicitudComite::all();
     }
 
     // Obtiene una solicitud de comité específica
     public function show($id)
     {
         return SolicitudComite::findOrFail($id);
     }
 
     // Crea una nueva solicitud de comité
     public function store(Request $request)
     {
         $request->validate([
             'Fecha' => 'required|date',
             'Motivo' => 'required',
             'Acta' => 'required',
             'Requerimiento_Aprendiz' => 'required',
             'Evidencias' => 'required',
             'fk_idInstructor' => 'required|exists:Instructor,idInstructor',
             'fk_idCoordinador' => 'required|exists:Coordinador_Academico,idCoordinador',
         ]);
 
         $solicitud = SolicitudComite::create($request->all());
         return response()->json($solicitud, 201);
     }
 
     // Actualiza una solicitud de comité existente
     public function update(Request $request, $id)
     {
         $request->validate([
             'Fecha' => 'required|date',
             'Motivo' => 'required',
             'Acta' => 'required',
             'Requerimiento_Aprendiz' => 'required',
             'Evidencias' => 'required',
             'fk_idInstructor' => 'required|exists:Instructor,idInstructor',
             'fk_idCoordinador' => 'required|exists:Coordinador_Academico,idCoordinador',
         ]);
 
         $solicitud = SolicitudComite::findOrFail($id);
         $solicitud->update($request->all());
         return response()->json($solicitud, 200);
     }
 
     // Elimina una solicitud de comité
     public function destroy($id)
     {
         $solicitud = SolicitudComite::findOrFail($id);
         $solicitud->delete();
         return response()->json(null, 204);
     }
}

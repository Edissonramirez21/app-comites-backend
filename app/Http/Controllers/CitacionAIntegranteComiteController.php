<?php

namespace App\Http\Controllers;

use App\Models\CitacionAIntegranteComite;
use Illuminate\Http\Request;

class CitacionAIntegranteComiteController extends Controller
{
     // Obtiene todas las citaciones de integrantes de comité
     public function index()
     {
         return Citacion_a_IntegranteComite::all();
     }
 
     // Obtiene una citación específica de un integrante de comité
     public function show($id)
     {
         return Citacion_a_IntegranteComite::findOrFail($id);
     }
 
     // Crear una nueva citación para un integrante de comité
     public function store(Request $request)
     {
         $request->validate([
             'Citacion_idCitacion' => 'required',
             'IntegranteComite_idUsuario' => 'required',
         ]);
 
         $citacionIntegranteComite = Citacion_a_IntegranteComite::create($request->all());
         return response()->json($citacionIntegranteComite, 201);
     }
 
     // Actualizar una citación de integrante de comité existente
     public function update(Request $request, $id)
     {
         $request->validate([
             'Citacion_idCitacion' => 'required',
             'IntegranteComite_idUsuario' => 'required',
         ]);
 
         $citacionIntegranteComite = Citacion_a_IntegranteComite::findOrFail($id);
         $citacionIntegranteComite->update($request->all());
         return response()->json($citacionIntegranteComite, 200);
     }
 
     // Eliminar una citación de integrante de comité
     public function destroy($id)
     {
         $citacionIntegranteComite = Citacion_a_IntegranteComite::findOrFail($id);
         $citacionIntegranteComite->delete();
         return response()->json(null, 204);
     }
}

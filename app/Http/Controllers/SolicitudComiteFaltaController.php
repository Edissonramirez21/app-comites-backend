<?php

namespace App\Http\Controllers;

use App\Models\SolicitudComiteFalta;
use Illuminate\Http\Request;

class SolicitudComiteFaltaController extends Controller
{
   // Obtiene todas las relaciones entre solicitudes de comité y faltas
   public function index()
   {
       return SolicitudComiteFalta::all();
   }

   // Obtiene una relación específica entre solicitud de comité y falta
   public function show($idSolicitudComite, $idFalta)
   {
       return SolicitudComiteFalta::where('Solicitud_Comite_idSolicitudComite', $idSolicitudComite)
           ->where('Falta_idReglamento', $idFalta)
           ->firstOrFail();
   }

   // Agrega una nueva relación entre solicitud de comité y falta
   public function store(Request $request)
   {
       $request->validate([
           'Solicitud_Comite_idSolicitudComite' => 'required|exists:Solicitud_Comite,idSolicitudComite',
           'Falta_idReglamento' => 'required|exists:Falta,idReglamento',
       ]);

       $relacion = SolicitudComiteFalta::create($request->all());
       return response()->json($relacion, 201);
   }

   // Elimina una relación entre solicitud de comité y falta
   public function destroy($idSolicitudComite, $idFalta)
   {
       $relacion = SolicitudComiteFalta::where('Solicitud_Comite_idSolicitudComite', $idSolicitudComite)
           ->where('Falta_idReglamento', $idFalta)
           ->firstOrFail();

       $relacion->delete();
       return response()->json(null, 204);
   }
}

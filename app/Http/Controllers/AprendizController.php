<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiz;

class AprendizController extends Controller
{
   // Obtiene todos los aprendices
   public function index()
   {
       return Aprendiz::all();
   }

   // Obtiene un aprendiz específico
   public function show($id)
   {
       return Aprendiz::findOrFail($id);
   }

   // Crea un nuevo aprendiz
   public function store(Request $request)
   {
       $request->validate([
           'Nombre' => 'required',
           'Tipo_Documento' => 'required',
           'Numero_Documento' => 'required',
           'Telefono' => 'required',
           'Correo' => 'required',
           'Ficha' => 'required',
           'Programa' => 'required',
           'Etapa_Formacion' => 'required',
           'Nivel' => 'required',
           'Jornada' => 'required',
       ]);

       $aprendiz = Aprendiz::create($request->all());
       return response()->json($aprendiz, 201);
   }

   // Actualiza un aprendiz existente
   public function update(Request $request, $id)
   {
       $request->validate([
           'Nombre' => 'required',
           'Tipo_Documento' => 'required',
           'Numero_Documento' => 'required',
           'Telefono' => 'required',
           'Correo' => 'required',
           'Ficha' => 'required',
           'Programa' => 'required',
           'Etapa_Formacion' => 'required',
           'Nivel' => 'required',
           'Jornada' => 'required',
       ]);

       $aprendiz = Aprendiz::findOrFail($id);
       $aprendiz->update($request->all());
       return response()->json($aprendiz, 200);
   }

   // Eliminar un aprendiz
   public function destroy($id)
   {
       $aprendiz = Aprendiz::findOrFail($id);
       $aprendiz->delete();
       return response()->json(null, 204);
   }
}

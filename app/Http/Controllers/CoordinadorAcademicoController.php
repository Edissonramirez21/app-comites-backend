<?php

namespace App\Http\Controllers;

use App\Models\CoordinadorAcademico;
use Illuminate\Http\Request;

class CoordinadorAcademicoController extends Controller
{
    public function dashboard()
    {
        return view('coordinador.dashboard');
    }

    public function opcion1()
    {
        // Lógica para la opción 1
        return view('coordinador.opcion1');
    }
    
     // Obtiene todos los coordinadores académicos
     public function index()
     {
         return CoordinadorAcademico::all();
     }
 
     // Obtiene un coordinador académico específico
     public function show($id)
     {
         return CoordinadorAcademico::findOrFail($id);
     }
 
     // Crear un nuevo coordinador académico
     public function store(Request $request)
     {
         $request->validate([
             'Nombre' => 'required',
             'Telefono' => 'required',
             'Correo' => 'required|email',
         ]);
 
         $coordinador = CoordinadorAcademico::create($request->all());
         return response()->json($coordinador, 201);
     }
 
     // Actualizar un coordinador académico existente
     public function update(Request $request, $id)
     {
         $request->validate([
             'Nombre' => 'required',
             'Telefono' => 'required',
             'Correo' => 'required|email',
         ]);
 
         $coordinador = CoordinadorAcademico::findOrFail($id);
         $coordinador->update($request->all());
         return response()->json($coordinador, 200);
     }
 
     // Elimina un coordinador académico
     public function destroy($id)
     {
         $coordinador = CoordinadorAcademico::findOrFail($id);
         $coordinador->delete();
         return response()->json(null, 204);
     }
}

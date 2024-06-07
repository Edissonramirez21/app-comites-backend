<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
   // Obtener todos los instructores
    public function index()
    {
        return Instructor::all();
    }

    // Obtener un instructor específico
    public function show($id)
    {
        return Instructor::findOrFail($id);
    }

    // Crear un nuevo instructor
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Correo' => 'required',
            'Telefono' => 'required',
        ]);

        $instructor = Instructor::create($request->all());
        return response()->json($instructor, 201);
    }

    // Actualizar un instructor existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required',
            'Correo' => 'required',
            'Telefono' => 'required',
        ]);

        $instructor = Instructor::findOrFail($id);
        $instructor->update($request->all());
        return response()->json($instructor, 200);
    }

    // Eliminar un instructor
    public function destroy($id)
    {
        $instructor = Instructor::findOrFail($id);
        $instructor->delete();
        return response()->json(null, 204);
    }
}

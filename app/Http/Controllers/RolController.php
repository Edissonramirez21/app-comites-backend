<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioLogin;
use Illuminate\Support\Facades\Auth;

class RolController extends Controller
{

    /**
     * Mostrar el dashboard según el rol del user.
     */
    public function dashboard()
    {
        $rol = strtolower(auth()->user()->rol);
        
        // Definir las vistas para cada rol
        switch ($rol) {
            case 'coordinador':
                return view('roles.coordinador.dashboard');
            case 'instructor':
                return view('roles.instructor.dashboard');
            case 'abogada':
                return view('roles.abogada.dashboard');
            case 'administrador':
                return view('roles.administrador.dashboard');
            default:
                return redirect('/home')->with('error', 'Rol no válido');
        }
    }

    /**
     * Mostrar la opción 1 según el rol del user.
     */
    public function opcion1()
    {
        $rol = strtolower(auth()->user()->rol);

        // Definir las vistas para cada rol
        switch ($rol) {
            case 'coordinador':
                return view('roles.coordinador.opcion1');
            case 'instructor':
                return view('roles.instructor.opcion1');
            case 'abogada':
                return view('roles.abogada.opcion1');
            case 'administrador':
                return view('roles.administrador.opcion1');
            default:
                return redirect('/home')->with('error', 'Rol no válido');
        }
    }
    /**
     * Mostrar el listado de todos los roles.
     */
    public function index()
    {
        $user = UsuarioLogin::all();
        return view('roles.index', compact('usuarios'));
    }

    /**
     * Crear un nuevo rol.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Almacenar un nuevo rol.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'rol' => 'required|string',
            'password' => 'required|min:8'
        ]);

        $user = new UsuarioLogin([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'rol' => $request->get('rol'),
            'password' => bcrypt($request->get('password')),
        ]);

        $user->save();

        return redirect()->route('roles.index')->with('success', 'Usuario creado correctamente.');
    }

    /**
     * Editar un rol existente.
     */
    public function edit($id)
    {
        $user = UsuarioLogin::findOrFail($id);
        return view('roles.edit', compact('user'));
    }

    /**
     * Actualizar un rol existente.
     */
    public function update(Request $request, $id)
    {
        $user = UsuarioLogin::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'rol' => 'required|string',
        ]);

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'rol' => $request->get('rol'),
        ]);

        return redirect()->route('roles.index')->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * Eliminar un rol.
     */
    public function destroy($id)
    {
        $user = UsuarioLogin::findOrFail($id);
        $user->delete();

        return redirect()->route('roles.index')->with('success', 'Usuario eliminado correctamente.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:usuarios',
            'password' => 'required|string|min:6',
            // Eliminamos la validación de 'tipo' aquí
        ]);

        // Creamos el usuario, estableciendo 'tipo' como 'cliente'
        $usuario = Usuario::create(array_merge($request->all(), ['tipo' => 'cliente']));

        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    public function update(Request $request, $id)
{
    // Buscar el usuario existente
    $usuario = Usuario::findOrFail($id);

    // Actualizar los campos del usuario con los datos proporcionados, 
    // y asegurarte de que 'tipo' sea 'cliente' (si no es proporcionado en la solicitud)
    $usuario->update(array_merge($request->all(), ['tipo' => 'cliente']));

    // Retornar la respuesta con el usuario actualizado
    return response()->json($usuario, 200);
}


    public function destroy($id)
    {
        Usuario::destroy($id);

        return response()->json(null, 204);
    }
}

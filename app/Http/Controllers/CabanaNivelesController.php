<?php

namespace App\Http\Controllers;

use App\Models\CabanaNiveles;
use App\Http\Requests\CabanaNivelesRequest;

class CabanaNivelesController extends Controller
{
    public function index()
    {
        return CabanaNiveles::all();
    }

    public function store(CabanaNivelesRequest $request)
    {
        return CabanaNiveles::create($request->validated());
    }

    public function show($id)
{
    // Buscar el registro por su ID
    $nivel = CabanaNiveles::findOrFail($id);
    
    // Devolver el registro encontrado
    return response()->json($nivel);
}

    public function update(CabanaNivelesRequest $request, $id)
{
    // Buscar el registro por su ID
    $nivel = CabanaNiveles::findOrFail($id);

    // Actualizar el registro con los datos validados
    $nivel->update($request->validated());

    // Devolver la respuesta con el registro actualizado
    return response()->json($nivel);
}


    public function destroy($id)
    {
        CabanaNiveles::destroy($id);
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        return Servicio::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
        ]);

        $servicio = Servicio::create($request->all());
        return response()->json($servicio, 201);
    }

    public function show($id)
    {
        return Servicio::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->update($request->all());
        return response()->json($servicio, 200);
    }

    public function destroy($id)
    {
        Servicio::destroy($id);
        return response()->json(null, 204);
    }
}

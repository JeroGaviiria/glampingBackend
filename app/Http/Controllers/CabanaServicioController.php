<?php

namespace App\Http\Controllers;

use App\Models\CabanaServicio;
use Illuminate\Http\Request;

class CabanaServicioController extends Controller
{
    public function index()
    {
        return CabanaServicio::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'cabana_id' => 'required|exists:cabanas,id',
            'servicio_id' => 'required|exists:servicios,id',
        ]);

        $cabanaServicio = CabanaServicio::create($request->all());
        return response()->json($cabanaServicio, 201);
    }

    public function destroy($cabana_id, $servicio_id)
    {
        CabanaServicio::where('cabana_id', $cabana_id)->where('servicio_id', $servicio_id)->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cabana;
use Illuminate\Http\Request;

class CabanaController extends Controller
{
    public function index()
    {
        return "Hola mundo"; 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'nivel' => 'required|in:VIP,Estándar,Económico',
            'aforo' => 'required|integer',
        ]);

        $cabana = Cabana::create($request->all());
        return response()->json($cabana, 201);
    }

    public function show($id)
    {
        return Cabana::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cabana = Cabana::findOrFail($id);
        $cabana->update($request->all());
        return response()->json($cabana, 200);
    }

    public function destroy($id)
    {
        Cabana::destroy($id);
        return response()->json(null, 204);
    }
}

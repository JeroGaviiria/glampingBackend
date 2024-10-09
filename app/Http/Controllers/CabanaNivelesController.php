<?php

namespace App\Http\Controllers;

use App\Models\CabanaNiveles;
use Illuminate\Http\Request;

class CabanaNivelesController extends Controller
{
    public function index()
    {
        return CabanaNiveles::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string|max:255',
        ]);

        $cabanaNivel = CabanaNiveles::create($request->all());
        return response()->json($cabanaNivel, 201);
    }

    public function show($id)
    {
        return CabanaNiveles::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cabanaNivel = CabanaNiveles::findOrFail($id);
        $cabanaNivel->update($request->all());
        return response()->json($cabanaNivel, 200);
    }

    public function destroy($id)
    {
        CabanaNiveles::destroy($id);
        return response()->json(null, 204);
    }
}

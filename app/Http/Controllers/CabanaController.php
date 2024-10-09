<?php

namespace App\Http\Controllers;

use App\Models\Cabanas;
use Illuminate\Http\Request;

class CabanaController extends Controller
{   
    public function index()
    {
        return Cabanas::with('nivel')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'nivel_id' => 'required|exists:cabana_niveles,id',
            'aforo' => 'required|integer',
        ]);

        return Cabanas::create($request->all());
    }

    public function show(Cabanas $cabana)
    {
        return $cabana->load('nivel');
    }

    public function update(Request $request, Cabanas $cabana)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'nivel_id' => 'required|exists:cabana_niveles,id',
            'aforo' => 'required|integer',
        ]);

        $cabana->update($request->all());
        return $cabana;
    }

    public function destroy(Cabanas $cabana)
    {
        $cabana->delete();
        return response()->noContent();
    }
}

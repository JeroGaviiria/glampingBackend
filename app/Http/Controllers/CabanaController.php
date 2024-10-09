<?php

namespace App\Http\Controllers;

use App\Models\Cabanas;
use App\Http\Requests\CabanaRequest;

class CabanaController extends Controller
{
    public function index()
    {
        return Cabanas::with('nivel')->get();
    }

    public function store(CabanaRequest $request)
    {
        return Cabanas::create($request->validated());
    }

    public function show(Cabanas $cabana)
    {
        return $cabana->load('nivel');
    }

    public function update(CabanaRequest $request, Cabanas $cabana)
    {
        $cabana->update($request->validated());
        return $cabana;
    }

    public function destroy(Cabanas $cabana)
    {
        $cabana->delete();
        return response()->json(null, 204);
    }
}

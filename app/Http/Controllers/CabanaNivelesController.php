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

    public function show(CabanaNiveles $nivel)
    {
        return $nivel;
    }

    public function update(CabanaNivelesRequest $request, CabanaNiveles $nivel)
    {
        $nivel->update($request->validated());
        return $nivel;
    }

    public function destroy(CabanaNiveles $nivel)
    {
        $nivel->delete();
        return response()->json(null, 204);
    }
}

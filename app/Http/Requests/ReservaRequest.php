<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Http\Requests\ReservaRequest;

class ReservaController extends Controller
{
    public function index()
    {
        return Reserva::all();
    }

    public function store(ReservaRequest $request)
    {
        $reserva = Reserva::create($request->validated());
        return response()->json($reserva, 201);
    }

    public function show(Reserva $reserva)
    {
        return $reserva;
    }

    public function update(ReservaRequest $request, Reserva $reserva)
    {
        $reserva->update($request->validated());
        return $reserva;
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return response()->json(null, 204);
    }
}

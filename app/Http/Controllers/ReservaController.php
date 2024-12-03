<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ReservaController extends Controller
{
    public function index()
    {
        return Reserva::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'cabana_id' => 'required|exists:cabanas,id',
            'fecha' => 'required|date|after:today|date_format:Y-m-d',
        ]);

        $reservaExistente = Reserva::where('cabana_id', $request->cabana_id)
            ->where('fecha', $request->fecha)
            ->exists();

        if ($reservaExistente) {
            throw ValidationException::withMessages([
                'cabana_id' => 'La cabaña ya está reservada para esta fecha.',
            ]);
        }

        $reserva = Reserva::create([
            'usuario_id' => $request->usuario_id,
            'cabana_id' => $request->cabana_id,
            'fecha' => $request->fecha,
        ]);

        return response()->json($reserva, 201);
    }

    public function show($id)
    {
        return Reserva::findOrFail($id);
    }

    public function update(Request $request, $id)
    {

        $reservaExistente = Reserva::where('cabana_id', $request->cabana_id)
            ->where('fecha', $request->fecha)
            ->exists();

        if ($reservaExistente) {
            throw ValidationException::withMessages([
                'cabana_id' => 'La cabaña ya está reservada para esta fecha.',
            ]);
            
        $reserva = Reserva::findOrFail($id);
        $reserva->update([
            'usuario_id' => $request->usuario_id,
            'cabana_id' => $request->cabana_id,
            'fecha' => $request->fecha,
        ]);

        return response()->json($reserva, 200);
    }}

    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();

        return response()->json(null, 204);
    }
}

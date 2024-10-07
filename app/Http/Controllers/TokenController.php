<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index()
    {
        return Token::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'token' => 'required|string',
        ]);

        $token = Token::create($request->all());
        return response()->json($token, 201);
    }

    public function destroy($id)
    {
        Token::destroy($id);
        return response()->json(null, 204);
    }
}

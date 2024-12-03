<?php

namespace App\Http\Controllers;

use App\Http\Requests\CabanaRequest;
use App\Http\Resources\CabanaCollection;
use App\Http\Resources\CabanaResource;
use App\Models\Cabanas;

class CabanaController extends Controller
{
    public function index()
    {

        $sort = request()->input('sort', 'nombre');
        $type = request()->input('type', 'asc');

        $validsort = ['nombre', 'aforo', 'nivel_id'];
        if (! in_array($sort, $validsort)) {
            $message = "Invalid sort field: $sort";

            return response()->json(['message' => $message], 400);
        }

        $validtype = ['asc', 'desc'];
        if (! in_array($type, $validtype)) {
            $message = "Invalid type field: $type";

            return response()->json(['message' => $message], 400);
        }

        $cabanas = Cabanas::orderBy($sort, $type)->with('nivel')->get();

        return response()
            ->json([new CabanaCollection($cabanas)], 200);

        // return response()->json(['data' => CabanaResource::collection($cabanas)], 200);
    }

    public function store(CabanaRequest $request)
    {
        $cabana = Cabanas::create($request->validated());

        return new CabanaResource($cabana);
    }

    public function show(Cabanas $cabana)
    {
        return new CabanaResource($cabana);
    }

    public function update(CabanaRequest $request, Cabanas $cabana)
    {
        $cabana->update($request->validated());

        return new CabanaResource($cabana);
    }

    public function destroy(Cabanas $cabana)
    {
        $cabana->delete();

        return response()->json(null, 204);
    }
}

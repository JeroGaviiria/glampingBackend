<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CabanaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CabanaServicioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\CabanaNivelesController;
// Ruta existente para obtener el usuario autenticado
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rutas para los controladores
Route::get('/hola/locos', [CabanaController::class, 'index'])->name('hola.locos');



Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('cabana_niveles', CabanaNivelesController::class);
Route::apiResource('cabanas', CabanaController::class);
Route::apiResource('servicios', ServicioController::class);
Route::apiResource('cabana_servicios', CabanaServicioController::class)->only(['index', 'store', 'destroy']);
Route::apiResource('reservas', ReservaController::class);
Route::apiResource('tokens', TokenController::class)->only(['index', 'store', 'destroy']);

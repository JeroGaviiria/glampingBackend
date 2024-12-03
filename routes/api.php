<?php

use App\Http\Controllers\CabanaController;
use App\Http\Controllers\CabanaNivelesController;
use App\Http\Controllers\CabanaServicioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Autenticación
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rutas para los controladores
Route::get('/hola/locos', [CabanaController::class, 'index'])->name('hola.locos');


//
Route::apiResource('cabana-niveles', CabanaNivelesController::class);
Route::apiResource('cabana_servicios', CabanaServicioController::class)->only(['index', 'store', 'destroy']);



Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('cabanas', CabanaController::class);
Route::apiResource('servicios', ServicioController::class);
Route::apiResource('reservas', ReservaController::class);
Route::apiResource('tokens', TokenController::class)->only(['index', 'store', 'destroy']);
Route::apiResource('users', UserController::class);

// Ruta para login
Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

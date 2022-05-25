<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\EncuestasController as APIEncuestasController;
use App\Http\Controllers\Api\CiudadesController as APICiudadesController;
use App\Http\Controllers\Api\SucursalesController as APISucursalesController;
use App\Http\Controllers\Api\PeliculasController as APIPeliculasController;
use App\Http\Controllers\Api\CalificacionesController as APICalificacionesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/ciudades', [APICiudadesController::class,'index'])->name('api.ciudades.index');
Route::get('/sucursales', [APISucursalesController::class, 'index'])->name('api.sucursales.index');
Route::get('/peliculas', [APIPeliculasController::class,'index'])->name('api.peliculas.index');
Route::get('/calificaciones', [APICalificacionesController::class,'index'])->name('api.calificaciones.index');

Route::post('/encuestas', [APIEncuestasController::class, 'store'])->name('api.encuestas.store');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

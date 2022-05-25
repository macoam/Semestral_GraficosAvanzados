<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EncuestasController as EncuestasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/encuestas', [EncuestasController::class,'index'])->name('encuestas.index');
Route::delete('/encuestas/{id}/destroy', [EncuestasController::class,'destroy'])->name('encuestas.destroy');

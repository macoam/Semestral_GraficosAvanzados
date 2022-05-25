<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Calificacion;

class CalificacionesController extends Controller
{
    public function index() {
        $calificaciones = Pelicula::select('id', 'cantidad_estrellas')->get();
        return $calificaciones;
    }
}

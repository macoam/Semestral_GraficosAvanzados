<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ciudad;

class CiudadesController extends Controller
{
    public function index() {
        $ciudades = Ciudad::select('id', 'nombre')->get();
        return $ciudades;
    }
}

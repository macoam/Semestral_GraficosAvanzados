<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sucursal;

class SucursalesController extends Controller
{
    public function index() {
        $sucursales = Sucursal::select('id', 'nombre')->get();
        return $sucursales;
    }
}

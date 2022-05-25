<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Encuesta;

class EncuestasController extends Controller
{
    public function store(Request $request) {
        $respuesta = array();
        $respuesta['exito'] = false;

        $nuevaEncuesta = new Encuesta();

        if ($request->input('nombre')){
            $nuevaEncuesta->nombre = $request->input('nombre');
        } else {
            $respuesta['mensaje'] = "El valor nombre es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_ciudad')){
            $nuevaEncuesta->id_ciudad = $request->input('id_ciudad');
        } else {
            $respuesta['mensaje'] = "El valor id_ciudad es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_sucursal')){
            $nuevaEncuesta->id_sucursal = $request->input('id_sucursal');
        } else {
            $respuesta['mensaje'] = "El valor id_sucursal es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_pelicula')){
            $nuevaEncuesta->id_pelicula = $request->input('id_pelicula');
        } else {
            $respuesta['mensaje'] = "El valor id_pelicula es obligatorio";
            return response()->json($respuesta,400);
        }
       
        if ($request->input('id_calificacion') != NULL) {
            $nuevaEncuesta->id_calificacion = $request->input('id_calificacion');
        } else {
            $respuesta['mensaje'] = "El valor id_calificacion es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('opinion') != NULL) {
            $nuevaEncuesta->opinion = $request->input('opinion');
        } else {
            $respuesta['mensaje'] = "El valor opinion es obligatorio";
            return response()->json($respuesta,400);
        }
        
        try {
            if ($nuevaEncuesta->save()) {
                $respuesta['exito'] = true;
            }
        }
        catch (\Exception $e) {
            $respuesta["mensaje"] = $e->getMessage();
            return response()->json($respuesta, 500);
        }

        return $respuesta;
    }
}

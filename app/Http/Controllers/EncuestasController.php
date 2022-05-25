<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Encuesta;

class EncuestasController extends Controller
{
    public function index() {
        $encuestas = Encuesta::all();
        $argumentos = array();
        $argumentos['encuestas'] = $encuestas;
        return view("encuestas.index", $argumentos);
    }

    public function destroy($id) {
        $encuesta = Encuesta::find($id);
        if ($encuesta) {
            if($encuesta->delete()) {
                return redirect()->route('encuestas.index')->with('exito', 'encuesta eliminada');
            }
            return redirect()->route('encuestas.index')->with('error', 'No se encontro la encuesta a borrar');
        }
        return redirect()->route('encuestas.index')->with('error', 'No se encontro la encuesta a borrar');
    }
}

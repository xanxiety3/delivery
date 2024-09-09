<?php

namespace App\Http\Controllers;

use App\Models\Opcion_respuesta;
use App\Models\Pregunta;
use App\Models\Sondeo;
use App\Models\Tipo_respuesta_pregunta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'contenido' => 'required|string|max:255',
            'tipo_respuesta_pregunta_id' => 'required',
            'sondeo_id' => 'required|exists:sondeos,id',
        ]);

        // Encontrar el sondeo
        $sondeo = Sondeo::findOrFail($request->input('sondeo_id'));

        // Crear la nueva pregunta
        $pregunta = new Pregunta();
        $pregunta->contenido = $request->input('contenido');
        $pregunta->tipo_respuesta_pregunta_id = $request->input('tipo_respuesta_pregunta_id');
        $pregunta->sondeo_id = $sondeo->id;
        $pregunta->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('sondeos.show', $sondeo->id)
                         ->with('success', 'Pregunta agregada exitosamente.');
    }
}



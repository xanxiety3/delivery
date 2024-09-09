<?php

namespace App\Http\Controllers;

use App\Models\Opcion_respuesta;
use App\Models\Pregunta;
use Illuminate\Http\Request;


    class OpcionRespuestaController extends Controller
    {
      
        
            public function store(Request $request)
            {
                // Validar los datos del formulario
                $request->validate([
                    'pregunta_id' => 'required|exists:preguntas,id',
                    'opciones.*' => 'nullable|string' // Opciones pueden estar vacías
                ]);
        
                // Encontrar la pregunta
                $pregunta = Pregunta::findOrFail($request->input('pregunta_id'));
        
                // Verificar que la pregunta sea del tipo 'respuesta_unica'
                if ($pregunta->tipo_respuesta_pregunta !== 'respuesta_unica') {
                    return redirect()->back()->with('error', 'La pregunta no es de tipo respuesta única.');
                }
        
                // Guardar las opciones
                $opciones = $request->input('opciones', []);
                foreach ($opciones as $opcion) {
                    $opcion = trim($opcion);
                    if (!empty($opcion)) {
                        Opcion_respuesta::create([
                            'contenido' => $opcion,
                            'pregunta_id' => $pregunta->id
                        ]);
                    }
                }
        
                // Redirigir con un mensaje de éxito
                return redirect()->route('sondeos.show', $pregunta->sondeo_id)
                                 ->with('success', 'Opciones agregadas exitosamente.');
            }
        }
        

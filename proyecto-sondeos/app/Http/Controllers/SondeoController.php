<?php

namespace App\Http\Controllers;

use App\Models\Sondeo;
use App\Models\Tipo_respuesta_pregunta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
// use Intervention\Image\ImageManagerStatic as Image;

use function Laravel\Prompts\alert;

class SondeoController extends Controller
{
    public function index(){
        $sondeos = Sondeo::all();
        return view('sondeos.index',['sondeos' => $sondeos]);
    }

    public function create(){
    
        return view('sondeos.create');
    }
    
    public function store( Request $request){
       // Validar los datos del formulario
       $data = $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'fecha_apertura' => 'required|date|after_or_equal:today',
        'fecha_cierre' => 'required|date|after:fecha_apertura',
        'icono_sondeo' => 'mimes:jpeg,png,jpg,gif|max:2048',
        'filtro_perfil' => 'nullable|string|max:255',
    ]);
  
    if ($request->icono_sondeo){

        $image=$request->file('icono_sondeo');

        $imgName = time() . '.' . $image->getClientOriginalExtension();
        
        $manager = new ImageManager(new Driver());
        
        $imagen_leida = $manager->read($image);
        $imagen_leida->resize(400,500);
        $imagen_leida->save(public_path("img/".$imgName));
        $data['icono_sondeo'] = 'img/'.$imgName;
        // dd($data['icono_sondeo']);

    }

    // dd($data);
    // Crear el nuevo sondeo
    $sondeo = Sondeo::create($data);


    // Redirigir o retornar respuesta
    return redirect()->route('sondeos.show', $sondeo->id)->with('success', 'Sondeo creado exitosamente.');
}
        public function show($id)
        {
            $sondeo = Sondeo::with('preguntas.opciones', 'preguntas.tipoRespuesta')->findOrFail($id);
            $tiposDeRespuesta = Tipo_respuesta_pregunta::all(); // Obtener los tipos de respuesta
        // Aquí obtén el ID correspondiente para "respuesta_unica"
    $respuestaUnicaId = Tipo_respuesta_pregunta::where('tipos_respuestas', 'Unica respuesta')->first()->id;

    return view('sondeos.show', compact('sondeo', 'tiposDeRespuesta', 'respuestaUnicaId'));
}
        
}

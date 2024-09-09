<?php

namespace App\Http\Controllers;

use App\Models\AccesoInternet;
use App\Models\AccesoTecnologia;
use App\Models\Estrato_socioeconomico;
use App\Models\Etnia;
use App\Models\Medio_tecnologico;
use App\Models\Nivel_educativo;
use App\Models\Persona;
use App\Models\Regimen_Salud;
use App\Models\Sexo;
use App\Models\Tipo_discapacidad;
use App\Models\Tipo_documento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
    // Obtener todos los tipos de documentos
    $tiposDocumentos = Tipo_documento::all();
    $sexos = Sexo::all();
    $etnias = Etnia::all();
    $discapacidades = Tipo_discapacidad::all();
    $estratos = Estrato_socioeconomico::all();
    $nivelesEducativos = Nivel_educativo::all();
    $mediosTec = Medio_tecnologico::all();
    $regimens = Regimen_Salud::all();
    $accesosInternet = AccesoInternet::all();
    $accesosTecnologicos = AccesoTecnologia::all();
    
        // dd($tiposDocumentos);

    // Pasar los datos a la vista del formulario de registro
    return view('user.register', compact('tiposDocumentos', 
    'sexos', 
    'etnias', 
    'discapacidades', 
    'estratos', 
    'nivelesEducativos',
    'mediosTec',
    'regimens',
    'accesosInternet',
    'accesosTecnologicos'
    ));
    }


    public function register(Request $request)
    {
        // Validar los datos del formulario
        $data = $request->validate([
            "num_documento" => "required", 
            "nom_completo" => "required", 
            "apellidos" => "required", 
            "telefono_celular" => "required", 
            "telefono_fijo" => "nullable", 
            "correo_electronico" => "required|email",
            "direccion" => "required", 
            "barrio" => "nullable", 
            "fecha_nacimiento" => "required|date", 
            "tipo_documento_id" => "required", 
            "nivel_educativo_id" => "required", 
            "sexo_id" => "required", 
            "acceso_internet_id" => "required",
            "acceso_tecnologia_id" => "required",
            "municipio" => "required", 
            "etnia_id" => "required",
            "regimen__salud_id" => "required", 
            "tipo_discapacidad_id" => "nullable", 
            "estrato_socioeconomico_id" => "required",
        ]);

        // Crear la persona
        $persona = Persona::create($data);

        // Crear el usuario dependiendo de el numero de documento de ste
        $user = User::create([
            
            'usuario' => $data['num_documento'], //usamo el numero de documento como usuario 
            'password' => Hash::make($data['num_documento']), // Usar el número de documento como contraseña
            'rol_id'=> 2
        ]);

        // Redirigir o devolver respuesta
        return view('sondeos.index');
    }
 
}

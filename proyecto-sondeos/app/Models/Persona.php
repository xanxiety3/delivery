<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        "num_documento", 
        "nom_completo", 
        "apellidos", 
        "telefono_celular", 
        "telefono_fijo", 
        "correo_electronico", 
        "direccion", 
        "barrio", 
        "fecha_nacimiento", 
        "tipo_documento_id", 
        "nivel_educativo_id", 
        "sexo_id", 
        "municipio", 
        "acceso_internet_id",
        "acceso_tecnologia_id",
        "etnia_id", 
        "regimen__salud_id", 
        "tipo_discapacidad_id", 
        "estrato_socioeconomico_id",];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $fillable = [
        "contenido",
        "tipo_respuesta_pregunta_id",
        
        "sondeo_id"]; 

        public function opciones()
{
    return $this->hasMany(Opcion_respuesta::class);
}

public function tipoRespuesta()
{
    return $this->belongsTo(Tipo_respuesta_pregunta::class, 'tipo_respuesta_pregunta');
}
    }

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondeo extends Model
{
    use HasFactory;

    protected $fillable =[
        "titulo",
        "descripcion",
        "fecha_apertura",
        "fecha_cierre",
        "icono_sondeo",
        "filtro_perfil"

    ];
    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }

}

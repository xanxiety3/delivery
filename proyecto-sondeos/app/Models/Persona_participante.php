<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona_participante extends Model
{
    use HasFactory;
    protected $fillable = [
        "fecha_participacion",
        "respuesta",
        "persona_id",
        "sondeo_id",];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion_respuesta extends Model
{
    use HasFactory;
    protected $fillable = [
        "opciones",
        "pregunta_id",];

        public function pregunta()
        {
            return $this->belongsTo(Pregunta::class);
        }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medio_tecnologico extends Model
{
    use HasFactory;
    protected $fillable = [ 
        "nom_medioTecnologico",];
}

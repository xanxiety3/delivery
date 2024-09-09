<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccesoInternet extends Model
{
    use HasFactory;
    protected $fillable = [
        "acceso_internet",
        "persona_id"];
}

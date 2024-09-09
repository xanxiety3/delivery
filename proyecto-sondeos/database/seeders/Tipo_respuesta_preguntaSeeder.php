<?php

namespace Database\Seeders;

use App\Models\Tipo_respuesta_pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_respuesta_preguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo_respuesta_pregunta::updateOrCreate(['tipos_respuestas'=>'Unica respuesta']);
        Tipo_respuesta_pregunta::updateOrCreate(['tipos_respuestas'=> 'Respuesta libre']);


    }
}

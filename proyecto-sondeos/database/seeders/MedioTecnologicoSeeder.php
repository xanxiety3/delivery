<?php

namespace Database\Seeders;

use App\Models\Medio_tecnologico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedioTecnologicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medio_tecnologico::updateOrCreate(['nom_medioTecnologico'=>'Celular']);
        Medio_tecnologico::updateOrCreate(['nom_medioTecnologico'=>'Computador']);
        Medio_tecnologico::updateOrCreate(['nom_medioTecnologico'=>'Air Fryer']);


    }
}

<?php

namespace Database\Seeders;

use App\Models\Nivel_educativo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelEducativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nivel_educativo::updateOrCreate(['nivel_educativo'=>'primaria']);

        
        Nivel_educativo::updateOrCreate(['nivel_educativo'=>'bachiller']);
        
        Nivel_educativo::updateOrCreate(['nivel_educativo'=>'tecnico']);
        Nivel_educativo::updateOrCreate(['nivel_educativo'=>'tecnologo']);

        Nivel_educativo::updateOrCreate(['nivel_educativo'=>'profesional']);

    }
}

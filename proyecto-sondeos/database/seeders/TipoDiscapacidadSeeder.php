<?php

namespace Database\Seeders;

use App\Models\Tipo_discapacidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDiscapacidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo_discapacidad::updateOrCreate(['nom_tipo_discapacidad'=>'Discapacidad Física']);
        Tipo_discapacidad::updateOrCreate(['nom_tipo_discapacidad'=>'Discapacidad Sensorial']);
        Tipo_discapacidad::updateOrCreate(['nom_tipo_discapacidad'=>' Discapacidad Múltiple']);

        Tipo_discapacidad::updateOrCreate(['nom_tipo_discapacidad'=>'Discapacidad Psicosocial']);
        Tipo_discapacidad::updateOrCreate(['nom_tipo_discapacidad'=>'Ninguna']);


        
    }
}

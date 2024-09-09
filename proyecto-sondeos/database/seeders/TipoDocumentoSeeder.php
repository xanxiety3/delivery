<?php

namespace Database\Seeders;

use App\Models\Tipo_documento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo_documento::updateOrCreate(['nom_tipo'=>'Cedula de ciudadania']);
        Tipo_documento::updateOrCreate(['nom_tipo'=>'Tarjeta de identidad']);
        Tipo_documento::updateOrCreate(['nom_tipo'=>'Pasaporte']);

    }
}

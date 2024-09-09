<?php

namespace Database\Seeders;

use App\Models\AccesoTecnologia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccesoTecnologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccesoTecnologia::updateOrCreate(['acceso_tecnologia'=>'1']);
        AccesoTecnologia::updateOrCreate(['acceso_tecnologia'=>'0']);    }
}

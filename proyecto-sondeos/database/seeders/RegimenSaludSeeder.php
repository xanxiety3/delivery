<?php

namespace Database\Seeders;

use App\Models\Regimen_Salud;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegimenSaludSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Regimen_Salud::updateOrCreate(['tipo_regimen'=>'contributivo']);
        Regimen_Salud::updateOrCreate(['tipo_regimen'=>'subsidiado']);

    }
}

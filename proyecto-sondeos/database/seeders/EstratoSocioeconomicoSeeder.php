<?php

namespace Database\Seeders;

use App\Models\Estrato_socioeconomico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstratoSocioeconomicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        Estrato_socioeconomico::updateOrCreate(['nom_estrato'=>'1']);

        Estrato_socioeconomico::updateOrCreate(['nom_estrato'=>'2']);
        Estrato_socioeconomico::updateOrCreate(['nom_estrato'=>'3']);
      
    }
}

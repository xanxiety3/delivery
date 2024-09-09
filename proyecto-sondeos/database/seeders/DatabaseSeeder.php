<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
    $this->call([
        TipoDocumentoSeeder::class,
        NivelEducativoSeeder::class,
        SexoSeeder::class,
        EtniaSeeder::class,
        RegimenSaludSeeder::class,
        TipoDiscapacidadSeeder::class,
        EstratoSocioeconomicoSeeder::class,
        MedioTecnologicoSeeder::class,
        
    ]);
    }
}

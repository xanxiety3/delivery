<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::updateOrCreate(['nom_rol'=> 'admin']);
        Rol::updateOrCreate(['nom_rol'=> 'ciudadano']);
    }
}

<?php

namespace Database\Seeders;

use App\Models\AccesoInternet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccesoInternertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccesoInternet::updateOrCreate(['acceso_internet'=>'1']);
        AccesoInternet::updateOrCreate(['acceso_internet'=>'0']);

    }
}

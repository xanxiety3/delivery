<?php

namespace Database\Seeders;

use App\Models\Etnia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etnia::updateOrCreate(['nombre'=>'indigena']);
        
        Etnia::updateOrCreate(['nombre'=>'afrocolombiano']);
        
        Etnia::updateOrCreate(['nombre'=>'mestizo']);
        
        Etnia::updateOrCreate(['nombre'=>'blanco']);
        
        Etnia::updateOrCreate(['nombre'=>'ninguno']);
    }
}

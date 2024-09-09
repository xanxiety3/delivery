<?php

use App\Models\Persona;
use App\Models\Sondeo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persona_participante', function (Blueprint $table) {
                $table->id();
                $table->dateTime('fecha_participacion')->nullable();
                $table->text('respuesta')->nullable();
                $table->foreignIdFor(Persona::class)->constrained('personas')->cascadeOnDelete();
                $table->foreignIdFor(Sondeo::class)->constrained('sondeos')->cascadeOnDelete();
                $table->timestamps();
            });
        
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona_participante');
    }
};

<?php

use App\Models\Sondeo;
use App\Models\Tipo_respuesta_pregunta;
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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->text('contenido');
            $table->foreignIdFor(Tipo_respuesta_pregunta::class)->constrained('tipo_respuesta_preguntas')->cascadeOnDelete();
            $table->foreignIdFor(Sondeo::class)->constrained('sondeos')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};

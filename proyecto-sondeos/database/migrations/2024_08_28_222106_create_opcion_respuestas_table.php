<?php

use App\Models\Pregunta;
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
        Schema::create('opcion_respuestas', function (Blueprint $table) {
            $table->id();
            $table->string('opciones');
            $table->foreignIdFor(Pregunta::class)->constrained('preguntas')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcion_respuestas');
    }
};

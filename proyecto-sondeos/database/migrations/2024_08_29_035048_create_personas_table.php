<?php

use App\Models\AccesoInternet;
use App\Models\AccesoTecnologia;
use App\Models\Estrato_socioeconomico;
use App\Models\Etnia;
use App\Models\Nivel_educativo;
use App\Models\Regimen_Salud;
use App\Models\Sexo;
use App\Models\Tipo_discapacidad;
use App\Models\Tipo_documento;
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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('num_documento');
            $table->string('nom_completo');
            $table->string('apellidos');
            $table->string('telefono_celular');
            $table->string('telefono_fijo');
            $table->string('correo_electronico');
            $table->string('direccion');
            $table->string('barrio');
            $table->date('fecha_nacimiento');
            $table->string('municipio');
            $table->foreignIdFor(Tipo_documento::class)->constrained('tipo_documentos')->cascadeOnDelete();
            $table->foreignIdFor(Nivel_educativo::class)->constrained('nivel_educativos')->cascadeOnDelete();
            $table->foreignIdFor(Sexo::class)->constrained('sexos')->cascadeOnDelete();
            $table->foreignIdFor(AccesoInternet::class)->constrained('acceso_Internets')->cascadeOnDelete();
            $table->foreignIdFor(AccesoTecnologia::class)->constrained('acceso_Tecnologias')->cascadeOnDelete();
            $table->foreignIdFor(Etnia::class)->constrained('etnias')->cascadeOnDelete();
            $table->foreignIdFor(Regimen_Salud::class)->constrained('regimen__saluds')->cascadeOnDelete();
            $table->foreignIdFor(Tipo_discapacidad::class)->constrained('tipo_discapacidads')->cascadeOnDelete();
            $table->foreignIdFor(Estrato_socioeconomico::class)->constrained('estrato_socioeconomicos')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};

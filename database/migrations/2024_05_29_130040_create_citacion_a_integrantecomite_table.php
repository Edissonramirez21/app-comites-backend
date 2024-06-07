<?php

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
        Schema::create('citacion_a_integrantecomite', function (Blueprint $table) {
            $table->integer('Citacion_idCitacion')->index('fk_citacion_has_integrantecomite_citacion1_idx');
            $table->integer('IntegranteComite_idUsuario')->index('fk_citacion_has_integrantecomite_integrantecomite1_idx');

            $table->primary(['Citacion_idCitacion', 'IntegranteComite_idUsuario']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citacion_a_integrantecomite');
    }
};

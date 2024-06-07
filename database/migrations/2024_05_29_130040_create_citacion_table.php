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
        Schema::create('citacion', function (Blueprint $table) {
            $table->integer('idCitacion')->primary();
            $table->string('Lugar', 45);
            $table->integer('fk_idSolicitudComite')->index('fk_citacion_solicitudcomite1_idx');
            $table->integer('fk_idHorario_Bienestar')->index('fk_citacion_horarioabogada1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citacion');
    }
};

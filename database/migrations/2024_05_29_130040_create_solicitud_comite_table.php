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
        Schema::create('solicitud_comite', function (Blueprint $table) {
            $table->integer('idSolicitudComite')->primary();
            $table->date('Fecha');
            $table->string('Motivo', 100);
            $table->string('Acta', 45);
            $table->string('Requerimiento_Aprendiz', 45);
            $table->string('Evidencias', 70);
            $table->integer('fk_idInstructor')->index('fk_solicitudcomite_instructor_idx');
            $table->integer('fk_idCoordinador')->index('fk_solicitud_comite_coordinador_academico1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_comite');
    }
};

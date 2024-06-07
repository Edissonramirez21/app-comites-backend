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
        Schema::table('citacion', function (Blueprint $table) {
            $table->foreign(['fk_idHorario_Bienestar'], 'fk_Citacion_HorarioAbogada1')->references(['idHorario_Bienestar'])->on('horario_bienestar')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['fk_idSolicitudComite'], 'fk_Citacion_SolicitudComite1')->references(['idSolicitudComite'])->on('solicitud_comite')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('citacion', function (Blueprint $table) {
            $table->dropForeign('fk_Citacion_HorarioAbogada1');
            $table->dropForeign('fk_Citacion_SolicitudComite1');
        });
    }
};

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
        Schema::table('solicitud_comite', function (Blueprint $table) {
            $table->foreign(['fk_idInstructor'], 'fk_SolicitudComite_Instructor')->references(['idInstructor'])->on('instructor')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['fk_idCoordinador'], 'fk_Solicitud_Comite_Coordinador_Academico1')->references(['idCoordinador'])->on('coordinador_academico')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('solicitud_comite', function (Blueprint $table) {
            $table->dropForeign('fk_SolicitudComite_Instructor');
            $table->dropForeign('fk_Solicitud_Comite_Coordinador_Academico1');
        });
    }
};

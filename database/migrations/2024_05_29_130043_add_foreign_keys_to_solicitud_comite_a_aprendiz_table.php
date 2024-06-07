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
        Schema::table('solicitud_comite_a_aprendiz', function (Blueprint $table) {
            $table->foreign(['Aprendiz_idAprendiz'], 'fk_Solicitud_Comite_has_Aprendiz_Aprendiz1')->references(['idAprendiz'])->on('aprendiz')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['Solicitud_Comite_idSolicitudComite'], 'fk_Solicitud_Comite_has_Aprendiz_Solicitud_Comite1')->references(['idSolicitudComite'])->on('solicitud_comite')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('solicitud_comite_a_aprendiz', function (Blueprint $table) {
            $table->dropForeign('fk_Solicitud_Comite_has_Aprendiz_Aprendiz1');
            $table->dropForeign('fk_Solicitud_Comite_has_Aprendiz_Solicitud_Comite1');
        });
    }
};

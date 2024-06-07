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
        Schema::table('solicitud_comite_falta', function (Blueprint $table) {
            $table->foreign(['Falta_idReglamento'], 'fk_Solicitud_Comite_has_Falta_Falta1')->references(['idReglamento'])->on('falta')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['Solicitud_Comite_idSolicitudComite'], 'fk_Solicitud_Comite_has_Falta_Solicitud_Comite1')->references(['idSolicitudComite'])->on('solicitud_comite')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('solicitud_comite_falta', function (Blueprint $table) {
            $table->dropForeign('fk_Solicitud_Comite_has_Falta_Falta1');
            $table->dropForeign('fk_Solicitud_Comite_has_Falta_Solicitud_Comite1');
        });
    }
};

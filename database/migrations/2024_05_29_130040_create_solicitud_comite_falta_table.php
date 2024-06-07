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
        Schema::create('solicitud_comite_falta', function (Blueprint $table) {
            $table->integer('Solicitud_Comite_idSolicitudComite')->index('fk_solicitud_comite_has_falta_solicitud_comite1_idx');
            $table->integer('Falta_idReglamento')->index('fk_solicitud_comite_has_falta_falta1_idx');

            $table->primary(['Solicitud_Comite_idSolicitudComite', 'Falta_idReglamento']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_comite_falta');
    }
};

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
        Schema::create('solicitud_comite_a_aprendiz', function (Blueprint $table) {
            $table->integer('Solicitud_Comite_idSolicitudComite')->index('fk_solicitud_comite_has_aprendiz_solicitud_comite1_idx');
            $table->integer('Aprendiz_idAprendiz')->index('fk_solicitud_comite_has_aprendiz_aprendiz1_idx');

            $table->primary(['Solicitud_Comite_idSolicitudComite', 'Aprendiz_idAprendiz']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_comite_a_aprendiz');
    }
};

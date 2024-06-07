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
        Schema::table('citacion_a_integrantecomite', function (Blueprint $table) {
            $table->foreign(['Citacion_idCitacion'], 'fk_Citacion_has_IntegranteComite_Citacion1')->references(['idCitacion'])->on('citacion')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['IntegranteComite_idUsuario'], 'fk_Citacion_has_IntegranteComite_IntegranteComite1')->references(['idUsuario'])->on('integrante_comite')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('citacion_a_integrantecomite', function (Blueprint $table) {
            $table->dropForeign('fk_Citacion_has_IntegranteComite_Citacion1');
            $table->dropForeign('fk_Citacion_has_IntegranteComite_IntegranteComite1');
        });
    }
};

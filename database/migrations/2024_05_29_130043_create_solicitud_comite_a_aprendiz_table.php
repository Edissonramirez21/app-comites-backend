<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudComiteAAprendizTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('solicitud_comite_a_aprendiz', function (Blueprint $table) {
            $table->unsignedInteger('solicitud_comite_id_solicitud_comite');
            $table->unsignedInteger('aprendiz_id_aprendiz');

            $table->primary(['solicitud_comite_id_solicitud_comite', 'aprendiz_id_aprendiz']);

            
            $table->foreign('solicitud_comite_id_solicitud_comite', 'fk_solicitud_comite_aprendiz_comite')
                ->references('id_solicitud_comite')
                ->on('solicitud_comite')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('aprendiz_id_aprendiz', 'fk_solicitud_comite_aprendiz_aprendiz')
                ->references('id_aprendiz')
                ->on('aprendiz')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_comite_a_aprendiz');
    }
}

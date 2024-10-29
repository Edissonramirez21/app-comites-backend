<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudComiteTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('solicitud_comite', function (Blueprint $table) {
            $table->increments('id_solicitud_comite');
            $table->date('fecha');
            $table->string('motivo', 1000);
            $table->string('acta', 100);
            $table->string('requerimiento_aprendiz', 80);
            $table->string('evidencias', 5000);


            $table->unsignedInteger('fk_id_instructor');
            $table->unsignedInteger('fk_id_coordinador');

            
            $table->foreign('fk_id_instructor')
                ->references('id_instructor')
                ->on('instructor')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('fk_id_coordinador')
                ->references('id_coordinador')
                ->on('coordinador_academico')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_comite');
    }
}

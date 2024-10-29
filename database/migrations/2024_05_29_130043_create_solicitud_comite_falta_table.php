<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudComiteFaltaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('solicitud_comite_falta', function (Blueprint $table) {
            $table->unsignedInteger('solicitud_comite_id_solicitud_comite');
            $table->unsignedInteger('falta_id_reglamento');

            $table->primary(['solicitud_comite_id_solicitud_comite', 'falta_id_reglamento']);

            
            $table->foreign('solicitud_comite_id_solicitud_comite', 'fk_solicitud_comite_falta_comite')
                ->references('id_solicitud_comite')
                ->on('solicitud_comite')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('falta_id_reglamento', 'fk_solicitud_comite_falta_reglamento')
                ->references('id_reglamento')
                ->on('falta')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_comite_falta');
    }
}

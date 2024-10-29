<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordinadorAcademicoTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('coordinador_academico', function (Blueprint $table) {
            $table->increments('id_coordinador');
            $table->string('name', 60);
            $table->integer('telefono');
            $table->string('email', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('coordinador_academico');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('aprendiz', function (Blueprint $table) {
            $table->increments('id_aprendiz');
            $table->string('name', 60);
            $table->enum('tipo_documento', ['ti', 'cc', 'ce']);
            $table->integer('identificacion');
            $table->integer('telefono');
            $table->string('email', 200);
            $table->integer('ficha');
            $table->string('programa', 80);
            $table->enum('etapa_formacion', ['lectiva', 'practica']);
            $table->enum('nivel', ['tecnico', 'tecnologo', 'curso']);
            $table->enum('jornada', ['diurna', 'tarde', 'nocturna']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('aprendiz');
    }
}

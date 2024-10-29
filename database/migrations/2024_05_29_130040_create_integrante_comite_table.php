<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegranteComiteTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('integrante_comite', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('name', 60);
            $table->bigInteger('telefono');
            $table->string('email', 200);
            $table->string('rol', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('integrante_comite');
    }
}

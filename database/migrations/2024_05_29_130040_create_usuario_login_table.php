<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioLoginTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuario_login', function (Blueprint $table) {
            $table->increments('id_usuario_login');
            $table->string('name', 60);
            $table->string('email', 200)->unique();
            $table->bigInteger('telefono')->unique();
            $table->string('rol', 60)->nullable();
            $table->bigInteger('identificacion')->unique();
            $table->integer('codigo_validacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('usuario_login');
    }
}

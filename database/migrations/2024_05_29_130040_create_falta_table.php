<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaltaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('falta', function (Blueprint $table) {
            $table->increments('id_reglamento');
            $table->enum('tipo_falta', ['academica', 'disciplinaria']);
            $table->string('falta', 100);
            $table->enum('gravedad', ['leve', 'grave', 'gravisima']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('falta');
    }
}

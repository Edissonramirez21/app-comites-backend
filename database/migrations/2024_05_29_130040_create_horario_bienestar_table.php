<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioBienestarTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('horario_bienestar', function (Blueprint $table) {
            $table->increments('id_horario_bienestar');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('horario_bienestar');
    }
}

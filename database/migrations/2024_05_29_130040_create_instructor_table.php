<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('instructor', function (Blueprint $table) {
            $table->increments('id_instructor');
            $table->string('name', 60);
            $table->string('email', 200);
            $table->bigInteger('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('instructor');
    }
}

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitacionTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('citacion', function (Blueprint $table) {
            $table->increments('id_citacion');
            $table->string('lugar', 80);
            $table->unsignedInteger('fk_id_solicitud_comite');  
            $table->unsignedInteger('fk_id_horario_bienestar');

            
            $table->foreign('fk_id_solicitud_comite')
                ->references('id_solicitud_comite')
                ->on('solicitud_comite')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('fk_id_horario_bienestar')
                ->references('id_horario_bienestar')
                ->on('horario_bienestar')
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
        Schema::dropIfExists('citacion');
    }
}

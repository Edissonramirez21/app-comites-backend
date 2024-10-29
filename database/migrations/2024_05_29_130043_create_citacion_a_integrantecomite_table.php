<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitacionAIntegrantecomiteTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('citacion_a_integrantecomite', function (Blueprint $table) {
            $table->unsignedInteger('citacion_id_citacion');      
            $table->unsignedInteger('integrante_comite_id_usuario'); 

            $table->primary(['citacion_id_citacion', 'integrante_comite_id_usuario']);

            
            $table->foreign('citacion_id_citacion')
                ->references('id_citacion')
                ->on('citacion')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('integrante_comite_id_usuario')
                ->references('id_usuario')
                ->on('integrante_comite')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('citacion_a_integrantecomite');
    }
}

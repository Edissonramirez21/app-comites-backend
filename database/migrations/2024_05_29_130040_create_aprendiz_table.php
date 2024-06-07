<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aprendiz', function (Blueprint $table) {
            $table->integer('idAprendiz')->primary();
            $table->string('Nombre', 45);
            $table->enum('Tipo_Documento', ['TI', 'CC', 'CE']);
            $table->integer('Numero_Documento');
            $table->integer('Telefono');
            $table->string('Correo', 45);
            $table->integer('Ficha');
            $table->string('Programa', 45);
            $table->enum('Etapa_Formacion', ['Lectiva', 'Practica']);
            $table->enum('Nivel', ['Tecnico', 'Tecnologo', 'curso']);
            $table->enum('Jornada', ['Diurna', 'Tarde', 'Nocturna']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendiz');
    }
};

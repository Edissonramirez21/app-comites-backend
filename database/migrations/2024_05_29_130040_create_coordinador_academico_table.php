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
        Schema::create('coordinador_academico', function (Blueprint $table) {
            $table->integer('idCoordinador')->primary();
            $table->string('Nombre', 45);
            $table->integer('Telefono');
            $table->string('Correo', 45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinador_academico');
    }
};

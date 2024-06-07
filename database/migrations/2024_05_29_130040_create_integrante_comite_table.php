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
        Schema::create('integrante_comite', function (Blueprint $table) {
            $table->integer('idUsuario')->primary();
            $table->string('Nombre', 45);
            $table->bigInteger('Telefono');
            $table->string('Correo', 45);
            $table->string('Rol', 45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('integrante_comite');
    }
};

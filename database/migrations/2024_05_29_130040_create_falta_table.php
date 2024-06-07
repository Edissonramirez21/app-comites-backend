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
        Schema::create('falta', function (Blueprint $table) {
            $table->integer('idReglamento')->primary();
            $table->enum('Tipo_falta', ['Academina', 'Diciplinaria']);
            $table->string('Falta', 45);
            $table->enum('Gravedad', ['leve', 'grave', 'gravisima']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('falta');
    }
};

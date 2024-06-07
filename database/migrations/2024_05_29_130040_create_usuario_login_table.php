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
        Schema::create('usuario_login', function (Blueprint $table) {
            $table->integer('idUsuario_Login')->primary();
            $table->string('Nombre', 45);
            $table->string('Correo', 100)->unique();
            $table->integer('Telefono');
            $table->string('Rol', 45);
            $table->string('Identificacion', 20)->unique();
            $table->string('Codigo_Verificacion', 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_login');
    }
};

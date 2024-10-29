<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('usuario_login', function (Blueprint $table) {
            $table->timestamp('codigo_expiracion')->nullable()->after('codigo_validacion');
        });
    }
    
    public function down()
    {
        Schema::table('usuario_login', function (Blueprint $table) {
            $table->dropColumn('codigo_expiracion');
        });
    }
    
};

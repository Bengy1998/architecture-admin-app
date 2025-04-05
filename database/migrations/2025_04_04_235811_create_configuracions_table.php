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
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->id();
            $table->string('ciudad');
            $table->string('pais');
            $table->string('direccion');
            $table->string('key_map')->nullable();
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('red_social_detalle')->nullable();
            $table->foreignId('red_social_id')
                ->nullable() // Permitir valores nulos
                ->constrained('redes_sociales')
                ->onDelete('set null'); // Establecer en NULL al eliminar la relación
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuraciones');
    }
};

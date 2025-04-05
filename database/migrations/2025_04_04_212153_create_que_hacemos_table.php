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
        Schema::create('que_hacemos', function (Blueprint $table) {
            $table->id();
            $table->text('arquitectura_detalle')->nullable();
            $table->text('diseno_interiores_detalle')->nullable();
            $table->text('planos_detalle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('que_hacemos');
    }
};

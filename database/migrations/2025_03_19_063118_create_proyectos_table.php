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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('imagen_presentacion')->nullable();
            $table->text('imagen_slider')->nullable();
            $table->string('titulo_slider')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('cliente')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->unsignedBigInteger('tipo_proyecto_id');
            $table->string('nombre_arquitecto')->nullable();
            $table->decimal('presupuesto', 15, 2)->nullable();
            $table->text('imagen_detalle')->nullable();
            $table->timestamps();

            // Relación con la tabla tipo_proyectos
            $table->foreign('tipo_proyecto_id')->references('id')->on('tipo_proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('redes_sociales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('link');
            $table->string('icono');
            $table->integer('orden')->default(0);
            $table->timestamps();
        });

        $redesSociales = [
            [
                'nombre' => 'Facebook',
                'link' => 'https://www.facebook.com/0110001001101abcdf',
                'icono' => 'ion-social-facebook',
                'orden'=> 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Linkedin',
                'link' => 'https://www.linkedin.com/0110001001101abcdf',
                'icono' => 'ion-social-linkedin',
                'orden' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Outline',
                'link' => 'https://www.dribbble.com/0110001001101abcdf',
                'icono' => 'ion-social-dribbble-outline',
                'orden' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('redes_sociales')->insert($redesSociales);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redes_sociales');
    }
};

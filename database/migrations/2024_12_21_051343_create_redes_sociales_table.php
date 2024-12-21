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
            $table->string('link');
            $table->string('icono');
            $table->timestamps();
        });

        $redesSociales = [
            [
                'link' => 'https://www.facebook.com/0110001001101abcdf',
                'icono' => 'ion-social-facebook',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'https://www.twitter.com/0110001001101abcdf',
                'icono' => 'ion-social-twitter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'https://www.googleplus.com/0110001001101abcdf',
                'icono' => 'ion-social-googleplus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'https://www.linkedin.com/0110001001101abcdf',
                'icono' => 'ion-social-linkedin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'https://www.dribbble.com/0110001001101abcdf',
                'icono' => 'ion-social-dribbble-outline',
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

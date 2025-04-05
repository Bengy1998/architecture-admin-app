<?php

use App\Http\Controllers\web\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\web\InicioController::class, 'index'])->name('inicio');
Route::post('/contacto', [ContactoController::class, 'guardar'])->name('contacto.guardar');
//php artisan make:filament-resource Configuracion --generate

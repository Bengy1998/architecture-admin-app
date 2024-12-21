<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\web\InicioController::class, 'index'])->name('inicio');

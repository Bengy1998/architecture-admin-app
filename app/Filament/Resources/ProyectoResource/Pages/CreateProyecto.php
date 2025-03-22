<?php

namespace App\Filament\Resources\ProyectoResource\Pages;

use App\Filament\Resources\ProyectoResource;
use App\Models\Proyecto;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Cache;

class CreateProyecto extends CreateRecord
{
    protected static string $resource = ProyectoResource::class;

    protected function beforeSave(): void
    {
        Cache::forget('proyectos_list');
        Cache::forever('proyectos_list', Proyecto::with('tipoProyecto')->get());
    }
}

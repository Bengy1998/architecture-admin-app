<?php

namespace App\Filament\Resources\ProyectoResource\Pages;

use App\Filament\Resources\ProyectoResource;
use App\Models\Proyecto;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Cache;

class EditProyecto extends EditRecord
{
    protected static string $resource = ProyectoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function () {
                Cache::forget('proyectos_list');
                Cache::forever('proyectos_list', Proyecto::with('tipoProyecto')->get());
            }),
        ];
    }

    protected function beforeSave(): void
    {
        Cache::forget('proyectos_list');
        Cache::forever('proyectos_list', Proyecto::with('tipoProyecto')->get());
    }
}

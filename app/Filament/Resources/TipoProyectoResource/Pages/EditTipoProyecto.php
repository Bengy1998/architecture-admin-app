<?php

namespace App\Filament\Resources\TipoProyectoResource\Pages;

use App\Filament\Resources\TipoProyectoResource;
use App\Models\TipoProyecto;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Cache;

class EditTipoProyecto extends EditRecord
{
    protected static string $resource = TipoProyectoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function () {
                Cache::forget('tipo_proyecto_list');
                Cache::forever('tipo_proyecto_list', TipoProyecto::all());
            }),
        ];
    }

    protected function beforeSave(): void
    {
        Cache::forget('tipo_proyecto_list');
        Cache::forever('tipo_proyecto_list', TipoProyecto::all());
    }
}

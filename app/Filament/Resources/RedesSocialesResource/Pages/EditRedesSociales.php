<?php

namespace App\Filament\Resources\RedesSocialesResource\Pages;

use App\Filament\Resources\RedesSocialesResource;
use App\Models\RedesSociales;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Cache;

class EditRedesSociales extends EditRecord
{
    protected static string $resource = RedesSocialesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function () {
                Cache::forget('redes_sociales_list');
                Cache::forever('redes_sociales_list', RedesSociales::all());
            }),
        ];
    }

    protected function beforeSave(): void
    {
        Cache::forget('redes_sociales_list');
        Cache::forever('redes_sociales_list', RedesSociales::all());
    }
}

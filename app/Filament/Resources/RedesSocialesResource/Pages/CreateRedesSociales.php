<?php

namespace App\Filament\Resources\RedesSocialesResource\Pages;

use App\Filament\Resources\RedesSocialesResource;
use Filament\Resources\Pages\CreateRecord;
use App\Exceptions\MaxRedesSocialesException;
use App\Models\RedesSociales;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Cache;

class CreateRedesSociales extends CreateRecord
{
    protected static string $resource = RedesSocialesResource::class;

    protected function beforeCreate(): void
    {
        try {
            // Verificar el número de registros y limitar a 5
            if (\App\Models\RedesSociales::count() >= 5) {
                throw new MaxRedesSocialesException();
            }
        } catch (MaxRedesSocialesException $exception) {
            Notification::make()
                ->title('Error')
                ->body($exception->getMessage())
                ->danger()
                ->send();
            $this->halt();
        }
    }

    protected function beforeSave(): void
    {
        Cache::forget('redes_sociales_list');
        Cache::forever('redes_sociales_list', RedesSociales::all());
    }
}

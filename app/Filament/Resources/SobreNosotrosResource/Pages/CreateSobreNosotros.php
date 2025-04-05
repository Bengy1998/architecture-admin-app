<?php

namespace App\Filament\Resources\SobreNosotrosResource\Pages;

use App\Filament\Resources\SobreNosotrosResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateSobreNosotros extends CreateRecord
{
    protected static string $resource = SobreNosotrosResource::class;

    protected function beforeCreate(): void
    {
        // Verificar el número de registros y limitar a 1
        if (\App\Models\SobreNosotros::count() >= 1) {
            Notification::make()
                ->title('Error')
                ->body('Solo puedes tener un registro en Sobre Nosotros.')
                ->danger()
                ->send();

            $this->halt(); // Detener el flujo de ejecución
            return;
        }
    }
}

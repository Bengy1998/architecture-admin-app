<?php

namespace App\Filament\Resources\SobreNosotrosResource\Pages;

use App\Filament\Resources\SobreNosotrosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSobreNosotros extends EditRecord
{
    protected static string $resource = SobreNosotrosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

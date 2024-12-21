<?php

namespace App\Filament\Resources\RedesSocialesResource\Pages;

use App\Filament\Resources\RedesSocialesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRedesSociales extends EditRecord
{
    protected static string $resource = RedesSocialesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

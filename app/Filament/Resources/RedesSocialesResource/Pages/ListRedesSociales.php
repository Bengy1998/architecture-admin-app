<?php

namespace App\Filament\Resources\RedesSocialesResource\Pages;

use App\Filament\Resources\RedesSocialesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRedesSociales extends ListRecords
{
    protected static string $resource = RedesSocialesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\QueHacemosResource\Pages;

use App\Filament\Resources\QueHacemosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQueHacemos extends ListRecords
{
    protected static string $resource = QueHacemosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

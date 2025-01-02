<?php

namespace App\Filament\Exports;

use App\Models\RedesSociales;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class RedesSocialesExporter extends Exporter
{
    protected static ?string $model = RedesSociales::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('nombre')->label('Nombre'),
            ExportColumn::make('link')->label('Link')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your redes sociales export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RedesSocialesResource\Pages;
use App\Models\RedesSociales;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Cache;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;
use App\Exceptions\MaxRedesSocialesException;

class RedesSocialesResource extends Resource
{
    protected static ?string $model = RedesSociales::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getLabel(): string
    {
        return __('Red Social');
    }

    public static function getPluralLabel(): string
    {
        return __('Redes Sociales');
    }

    public static function getNavigationLabel(): string
    {
        return __('Redes Sociales');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('icono')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('icono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRedesSociales::route('/'),
            'create' => Pages\CreateRedesSociales::route('/create'),
            'edit' => Pages\EditRedesSociales::route('/{record}/edit'),
        ];
    }

    protected static function saved($record)
    {
        // Eliminar el caché de la lista de redes sociales
        Cache::forget('redes_sociales_list');

        // Guardar toda la lista de redes sociales en caché nuevamente, de manera indefinida
        $redesSociales = RedesSociales::all(); // Obtener la lista completa de redes sociales
        Cache::forever('redes_sociales_list', $redesSociales); // Guardar en caché de forma indefinida
    }

    protected static function deleted($record)
    {
        // Eliminar el caché de la lista de redes sociales
        Cache::forget('redes_sociales_list');

        // Guardar toda la lista de redes sociales en caché nuevamente, de manera indefinida
        $redesSociales = RedesSociales::all(); // Obtener la lista completa de redes sociales
        Cache::forever('redes_sociales_list', $redesSociales); // Guardar en caché de forma indefinida
    }
}

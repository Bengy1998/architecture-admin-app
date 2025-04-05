<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QueHacemosResource\Pages;
use App\Filament\Resources\QueHacemosResource\RelationManagers;
use App\Models\QueHacemos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QueHacemosResource extends Resource
{
    protected static ?string $model = QueHacemos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('arquitectura_detalle')
                    ->label('Arquitectura')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('diseno_interiores_detalle')
                    ->label('Diseño de Interiores')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('planos_detalle')
                    ->label('Planos')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('arquitectura_detalle')
                    ->label('Arquitectura')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diseno_interiores_detalle')
                    ->label('Diseño de Interiores')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('planos_detalle')
                    ->label('Planos')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Puedes agregar filtros aquí si es necesario
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListQueHacemos::route('/'),
            'create' => Pages\CreateQueHacemos::route('/create'),
            'edit' => Pages\EditQueHacemos::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        // Bloquear el botón "Crear" si ya existe al menos un registro
        return \App\Models\QueHacemos::count() === 0;
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConfiguracionResource\Pages;
use App\Filament\Resources\ConfiguracionResource\RelationManagers;
use App\Models\Configuracion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConfiguracionResource extends Resource
{
    protected static ?string $model = Configuracion::class;
    protected static ?string $label = 'Configuración';
    protected static ?string $pluralLabel = 'Configuración';
    protected static ?string $navigationLabel = 'Configuración';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ciudad')
                    ->label('Ciudad')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pais')
                    ->label('País')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('direccion')
                    ->label('Dirección')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Correo Electrónico')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono')
                    ->label('Teléfono')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('red_social_id')
                    ->label('Red Social')
                    ->relationship('redSocial', 'nombre') // Relación con el campo 'nombre'
                    ->required(),
                Forms\Components\TextInput::make('red_social_detalle')
                    ->label('Detalle Red Social')
                    ->maxLength(255),
                Forms\Components\TextInput::make('key_map')
                    ->label('Clave de Google Map')
                    //->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ciudad')
                    ->label('Ciudad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pais')
                    ->label('País')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direccion')
                    ->label('Dirección')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Correo Electrónico')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->label('Teléfono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('redSocial.nombre')
                    ->label('Red Social') // Mostrar el nombre de la relación
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('red_social_detalle')
                    ->label('Detalle Red Social') // Mostrar el nombre de la relación
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('key_map')
                    ->label('Clave de Google Map')
                    ->searchable(),
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
                //
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
            'index' => Pages\ListConfiguracions::route('/'),
            'create' => Pages\CreateConfiguracion::route('/create'),
            'edit' => Pages\EditConfiguracion::route('/{record}/edit'),
        ];
    }


    public static function canCreate(): bool
    {
        return \App\Models\Configuracion::count() === 0;
    }
}

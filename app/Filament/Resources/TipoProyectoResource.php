<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipoProyectoResource\Pages;
use App\Filament\Resources\TipoProyectoResource\RelationManagers;
use App\Models\TipoProyecto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TipoProyectoResource extends Resource
{
    protected static ?string $model = TipoProyecto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getLabel(): string
    {
        return __('Tipo de Proyecto');
    }

    public static function getPluralLabel(): string
    {
        return __('Tipo de Proyectos');
    }

    public static function getNavigationLabel(): string
    {
        return __('Tipo de Proyectos');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
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
            'index' => Pages\ListTipoProyectos::route('/'),
            'create' => Pages\CreateTipoProyecto::route('/create'),
            'edit' => Pages\EditTipoProyecto::route('/{record}/edit'),
        ];
    }
}

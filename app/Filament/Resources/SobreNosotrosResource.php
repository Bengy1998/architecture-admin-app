<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SobreNosotrosResource\Pages;
use App\Filament\Resources\SobreNosotrosResource\RelationManagers;
use App\Models\SobreNosotros;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SobreNosotrosResource extends Resource
{
    protected static ?string $model = SobreNosotros::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('detalle')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->numeric(),
                Forms\Components\Section::make('Imagen')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('sobre-nosotros')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListSobreNosotros::route('/'),
            'create' => Pages\CreateSobreNosotros::route('/create'),
            'edit' => Pages\EditSobreNosotros::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        // Bloquear el botón "Crear" si ya existe al menos un registro
        return \App\Models\SobreNosotros::count() === 0;
    }
}

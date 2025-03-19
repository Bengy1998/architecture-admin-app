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
use App\Filament\Exports\RedesSocialesExporter;
use Filament\Tables\Actions\ExportAction;
use Filament\Pages\Actions;
use Filament\Actions\Exports\Enums\ExportFormat;

class RedesSocialesResource extends Resource
{
    protected static ?string $model = RedesSociales::class;
    protected static ?string $navigationLabel = 'Redes Sociales';
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
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
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
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('icono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')

                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function () {
                    Cache::forget('redes_sociales_list');
                    Cache::forever('redes_sociales_list', RedesSociales::all());
                })

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->headerActions([
                ExportAction::make()
                    ->exporter(RedesSocialesExporter::class)
                    ->formats([
                        ExportFormat::Xlsx,
                        ExportFormat::Csv,
                    ])
            ]) ->reorderable('orden');
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
}

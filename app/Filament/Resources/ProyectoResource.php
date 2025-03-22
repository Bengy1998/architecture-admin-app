<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProyectoResource\Pages;
use App\Models\Proyecto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Cache;

class ProyectoResource extends Resource
{
    protected static ?string $model = Proyecto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('titulo_slider')
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('cliente')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_termino'),
                Forms\Components\Select::make('tipo_proyecto_id')
                    ->label('Tipo de Proyecto')
                    ->relationship('tipoProyecto', 'nombre')
                    ->required(),
                Forms\Components\TextInput::make('nombre_arquitecto')
                    ->maxLength(255),
                Forms\Components\TextInput::make('presupuesto')
                    ->numeric(),
                Forms\Components\Toggle::make('es_slider') // Nuevo campo
                    ->label('¿Es Slider?')
                    ->default(false)->inline(false),
                // Salto de línea antes de las imágenes
                Forms\Components\Section::make('Imágenes')
                    ->schema([
                        Forms\Components\FileUpload::make('imagen_slider')
                            ->label('Imagen del Slider')
                            ->image()
                            ->directory('proyectos/imagenes_slider'),
                        Forms\Components\FileUpload::make('imagen_presentacion')
                            ->label('Imagen de Presentación')
                            ->image()
                            ->directory('proyectos/imagenes_presentacion'),

                        Forms\Components\FileUpload::make('imagen_detalle')
                            ->label('Imagen de Detalle')
                            ->image()
                            ->directory('proyectos/imagenes_detalle'),
                    ])
                    ->collapsible(),
            ]);
    }
//
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titulo_slider')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cliente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_termino')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipoProyecto.nombre')
                    ->label('Tipo de Proyecto')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre_arquitecto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('presupuesto')
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
                Tables\Actions\DeleteAction::make()->after(function () {
                    Cache::forget('proyectos_list');
                    Cache::forever('proyectos_list', Proyecto::with('tipoProyecto')->get());
                })
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
            // RelationManagers\TipoProyectoRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProyectos::route('/'),
            'create' => Pages\CreateProyecto::route('/create'),
            'edit' => Pages\EditProyecto::route('/{record}/edit'),
        ];
    }
}

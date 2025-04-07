<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactoResource\Pages;
use App\Filament\Resources\ContactoResource\RelationManagers;
use App\Models\Contacto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactoResource extends Resource
{
    protected static ?string $model = Contacto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('correo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asunto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('mensaje')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('estado') // Cambiar a Select
                    ->required()
                    ->options([
                        1 => 'Sin atender',
                        2 => 'Visto',
                        3 => 'Correo enviado',
                    ])
                    ->default(1)
                    ->label('Estado'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('correo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asunto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estado_nombre')
                    ->label('Estado')
                    ->color(fn (string $state): string => match ($state) {
                        'Sin atender' => 'primary',
                        'Visto' => 'warning',
                        'Correo enviado' => 'success',
                        default => 'danger',
                    }),
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
                Tables\Filters\Filter::make('nombre')
                    ->query(fn (Builder $query, string $value) => $query->where('nombre', 'like', "%{$value}%"))
                    ->label('Nombre'),
                Tables\Filters\Filter::make('correo')
                    ->query(fn (Builder $query, string $value) => $query->where('correo', 'like', "%{$value}%"))
                    ->label('Correo'),
                Tables\Filters\Filter::make('asunto')
                    ->query(fn (Builder $query, string $value) => $query->where('asunto', 'like', "%{$value}%"))
                    ->label('Asunto'),
                Tables\Filters\SelectFilter::make('estado')
                    ->options([
                        1 => 'Sin atender',
                        2 => 'Visto',
                        3 => 'Correo enviado',
                    ])
                    ->attribute('estado')
                    ->label('Estado'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Action::make('enviarCorreo')
                    ->label('Enviar Correo')
                    ->action(function ($record, $data) {
                        $record->update(['estado' => 3]); // Cambia el estado a 3
                    })
                    ->requiresConfirmation()
                    ->modalHeading('¿Se envió el correo?')
                    ->modalSubheading('Confirma si deseas cambiar el estado a "Correo enviado".')
                    ->modalButton('Sí, actualizar estado')
                    ->successNotificationTitle('El estado se actualizó correctamente.')
                    ->visible(fn ($record) => $record->estado !== 3), // Oculta la acción si el estado es 3
                    Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListContactos::route('/'),
            //'create' => Pages\CreateContacto::route('/create'),
           // 'view' => Pages\ViewContacto::route('/{record}'),
           // 'edit' => Pages\EditContacto::route('/{record}/edit'),
        ];
    }

    
    public static function canCreate(): bool
    {
        return false;
    }
}

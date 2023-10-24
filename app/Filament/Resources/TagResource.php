<?php

namespace App\Filament\Resources;

use App\Models\Tag;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use App\Filament\Resources\TagResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TagResource\RelationManagers;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static ?string $navigationGroup = 'Configurações';

    protected static ?string $modelLabel = 'Marcador';

    protected static ?string $pluralModelLabel = 'Marcadores';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                ColorPicker::make('color'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('Nome')
                    ->searchable(),
                Tables\Columns\ColorColumn::make('color')
                ->label('Cor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                ->label('Criado em')
                    ->dateTime('d-m-Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                ->label('Atualizado em')
                    ->dateTime('d-m-Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                ->action(function ($data, $record) {
                    if ($record->contacts()->count() > 0) {
                        Notification::make()
                            ->danger()
                            ->title('Marcador em uso')
                            ->body('Marcador já foi atribuído a um ou mais contatos.')
                            ->send();

                        return;
                    }

                    Notification::make()
                        ->success()
                        ->title('Marcador removido')
                        ->body('O marcador foi removido com sucesso.')
                        ->send();

                    $record->delete();
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTag::route('/create'),
            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Role;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RoleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RoleResource\RelationManagers;
use App\Filament\Resources\RoleResource\RelationManagers\UsersRelationManager;
use App\Filament\Resources\RoleResource\RelationManagers\PermissionsRelationManager;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationGroup = 'Configurações';

    protected static ?string $modelLabel = 'Perfil';

    protected static ?string $pluralModelLabel = 'Perfis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('name')
                                ->label('Nome')
                                ->required(),
                            Select::make('guard_name')
                                ->label('Guard')
                                ->options([
                                    'web' => 'web',
                                    'api' => 'api',
                                ])
                                ->default('web')
                                ->required(),
                            Select::make('permissions')
                                ->multiple()
                                ->label('Permissões')
                                ->relationship('permissions', 'name')
                                ->preload(),

                        ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Nome')
                    ->searchable(),
                TextColumn::make('permissions_count')
                    ->counts('permissions')
                    ->label('Nº Permissões')
                    ->searchable(),
                TextColumn::make('guard_name')
                    ->label('Guard')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->recordUrl(function () {
                return null;
            })
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            PermissionsRelationManager::class,
            UsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
        ];
    }
}

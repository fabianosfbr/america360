<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Deal;
use App\Models\Lead;
use Filament\Tables;
use App\Models\Account;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DealResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DealResource\RelationManagers;

class DealResource extends Resource
{
    protected static ?string $model = Deal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Sales';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make()
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->disabled(fn(?Deal $record) => in_array($record?->status, [2, 3])),
                    Select::make('customer_id')
                        ->label('Customer')
                        ->options(Account::all()->pluck('name', 'id'))
                        ->searchable()
                        ->disabled(fn(?Deal $record) => in_array($record?->status, [2, 3]))
                        ->required(),
                    Select::make('lead_id')
                        ->label('Originating lead')
                        ->options(Lead::all()->pluck('title', 'id'))
                        ->searchable()
                        ->disabled(fn(?Deal $record) => in_array($record?->status, [2, 3])),
                    RichEditor::make('description')
                        ->disableToolbarButtons([
                            'attachFiles',
                            'codeBlock'
                        ])
                ])
                ->columnSpan(2),

                Section::make()
                    ->schema([
                        Select::make('status')
                            ->options([
                                1 => 'Open',
                                2 => 'Won',
                                3 => 'Lost'
                            ])
                            ->visible(fn(?Deal $record) => $record != null)
                            ->disabled(),
                        TextInput::make('estimated_revenue')
                            ->label('Estimated revenue')
                            ->disabled(fn(?Deal $record) => in_array($record?->status, [2, 3])),
                        TextInput::make('actual_revenue')
                            ->label('Actual revenue')
                            ->disabled(fn(?Deal $record) => in_array($record?->status, [2, 3]))
                    ])
                    ->columnSpan(1)
        ])
        ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('customer.name')
                    ->searchable(),
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
            'index' => Pages\ListDeals::route('/'),
            'create' => Pages\CreateDeal::route('/create'),
            'edit' => Pages\EditDeal::route('/{record}/edit'),
        ];
    }
}

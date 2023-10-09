<?php

namespace App\Filament\Resources;

use Filament\Forms;
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
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LeadResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LeadResource\RelationManagers;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static ?string $navigationGroup = 'Sales';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->maxLength(255)
                            ->required()
                            ->disabled(fn (?Lead $record) => in_array($record?->status, [3, 4])),
                        Select::make('customer_id')
                            ->label('Customer')
                            ->relationship('customer', 'name')
                            ->options(Account::all()->pluck('name', 'id'))
                            ->searchable()
                            ->required()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('email')
                                    ->email()
                                    ->unique()
                            ])
                            ->createOptionAction(function (Forms\Components\Actions\Action $action) {
                                return $action
                                    ->modalHeading('Create customer')
                                    ->modalSubmitActionLabel('Create customer')
                                    ->modalWidth('lg');
                            })
                            ->disabled(fn (?Lead $record) => in_array($record?->status, [3, 4])),
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
                                1 => 'Prospect',
                                2 => 'Open',
                                3 => 'Qualified',
                                4 => 'Disqualified'
                            ])
                            ->required()
                            ->visible(fn (?Lead $record) => $record != null)
                            ->disabled(fn (?Lead $record) => in_array($record?->status, [3, 4])),
                        Select::make('source')
                            ->options([
                                1 => 'Email',
                                2 => 'Event',
                                3 => 'Phone',
                                4 => 'Referral',
                                5 => 'Web'
                            ]),
                        DatePicker::make('created_at')
                            ->format('d/m/Y')
                            ->visible(fn (?Lead $record) => $record != null)
                            ->disabled(),
                        DatePicker::make('date_qualified')
                            ->format('d/m/Y')
                            ->disabled()
                            ->visible(fn (?Lead $record) => $record?->status == 3),
                        DatePicker::make('date_disqualified')
                            ->format('d/m/Y')
                            ->disabled()
                            ->visible(fn (?Lead $record) => $record?->status == 4),
                        Select::make('disqualification_reason')
                            ->label('Reason for disqualification')
                            ->options([
                                1 => 'Budget',
                                2 => 'Bad/fake data',
                                3 => 'Not responsive',
                                4 => 'Lost to Competitor',
                                5 => 'Timeline'
                            ])
                            ->disabled()
                            ->visible(fn (?Lead $record) => $record?->status == 4),
                        TextInput::make('estimated_revenue')
                            ->label('Estimated revenue')
                            ->disabled(fn (?Lead $record) => in_array($record?->status, [3, 4]))
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
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status'),

            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        1 => 'Prospect',
                        2 => 'Open',
                        3 => 'Qualified',
                        4 => 'Disqualified'
                    ])
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
            'index' => Pages\ListLeads::route('/'),
            'create' => Pages\CreateLead::route('/create'),
            'edit' => Pages\EditLead::route('/{record}/edit'),
        ];
    }

    private function qualified(Lead $record): bool
    {
        return $record->status == 3;
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Account;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ContactResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Filament\Resources\ContactResource\RelationManagers\NotesRelationManager;
use App\Models\Note;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationGroup = 'Sales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome')
                            ->columnSpan(3),
                        TextInput::make('email')
                            ->required()
                            ->email()
                            ->columnSpan(3),
                        TextInput::make('phone')
                            ->tel()
                            ->columnSpan(3),
                        RichEditor::make('description')
                            ->columnSpanFull(),
                        Select::make('lead_source_id')
                            ->relationship('leadSource', 'name')
                            ->columnSpan(1),
                        Select::make('pipeline_stage_id')
                            ->relationship('pipelineStage', 'name')
                            ->columnSpan(1),
                        Select::make('tags')
                            ->relationship('tags', 'name')
                            ->preload()
                            ->multiple()
                            ->columnSpan(4),

                    ])
                    ->columns(6)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('name')
                    ->label('Full name')
                    ->formatStateUsing(function ($record) {
                        $tagsList = view('contact.tagsList', ['tags' => $record->tags])->render();

                        return $record->name . ' ' . $tagsList;
                    })
                    ->html()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email'),
                TextColumn::make('phone')
                    ->label('Mobile'),
                TextColumn::make('leadSource.name'),
                TextColumn::make('pipelineStage.name'),
                TextColumn::make('created_at')
                    ->dateTime('d-m-Y H:i')
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make()
                //     ->iconButton()
                //     ->modalHeading('Contact')
                //     ->modalDescription('Contact information'),
                Action::make('notes')
                    ->icon('heroicon-m-clipboard-document-check')
                    ->iconButton()
                    ->color('gray')
                    ->form([
                        RichEditor::make('body')
                            ->label('Note')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->action(function (Contact $record, array $data): void {
                        $noteToAdd = new Note(['body' => $data['body']]);
                        $record->notes()->save($noteToAdd);
                    }),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make()
                //     ->requiresConfirmation(false)
                //     ->action(function () {
                //         Notification::make()
                //             ->title('Now, now, don\'t be cheeky, leave some records for testing!')
                //             ->warning()
                //             ->send();
                //     }),
                // ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            NotesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}

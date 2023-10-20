<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Note;
use App\Models\Task;
use Filament\Tables;
use App\Models\Account;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\TaskTypeEnum;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\ContactResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Filament\Resources\ContactResource\RelationManagers\NotesRelationManager;
use App\Filament\Resources\ContactResource\RelationManagers\TasksRelationManager;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?string $modelLabel = 'Contato';

    protected static ?string $pluralModelLabel = 'Contatos';

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
                            ->label('Email')
                            ->required()
                            ->email()
                            ->columnSpan(3),
                        TextInput::make('phone')
                            ->label('Telefone')
                            ->tel()
                            ->columnSpan(3),
                        Select::make('owner_id')
                            ->label('Responsável')
                            ->relationship('owner', 'name')
                            ->columnSpan(3),
                        RichEditor::make('description')
                            ->label('Descrição')
                            ->columnSpanFull(),
                        Select::make('lead_source_id')
                            ->label('Origem')
                            ->relationship('leadSource', 'name')
                            ->columnSpan(1),
                        Select::make('pipeline_stage_id')
                            ->label('Estágio do funil')
                            ->relationship('pipelineStage', 'name')
                            ->columnSpan(1),
                        Select::make('tags')
                            ->label('Tags')
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
                    ->label('Nome')
                    ->formatStateUsing(function ($record) {
                        $tagsList = view('contact.tagsList', ['tags' => $record->tags])->render();

                        return $record->name . ' ' . $tagsList;
                    })
                    ->html()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email'),
                TextColumn::make('phone')
                    ->label('Telefone'),
                TextColumn::make('leadSource.name')
                    ->label('Origem'),
                TextColumn::make('pipelineStage.name')
                    ->label('Funil'),
                TextColumn::make('owner.name')
                    ->label('Responsável'),
                TextColumn::make('created_at')
                    ->label('Data Registro')
                    ->dateTime('d-m-Y H:i')
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Action::make('notes')
                        ->label('Anotação')
                        ->icon('heroicon-m-clipboard-document-check')
                        ->color('info')
                        ->form([
                            RichEditor::make('body')
                                ->label('Note')
                                ->required()
                                ->columnSpanFull(),
                        ])
                        ->action(function (Contact $record, array $data): void {
                            $noteToAdd = new Note(['body' => $data['body']]);
                            $record->notes()->save($noteToAdd);

                            Notification::make()
                                ->success()
                                ->title('Anotação criada com sucesso')
                                ->send();
                        }),
                    Action::make('tasks')
                        ->label('Tarefa')
                        ->icon('fas-tasks')
                        ->color('info')
                        ->form([
                            Select::make('type')
                                ->label('Tipo de tarefa')
                                ->options(TaskTypeEnum::class)
                                ->required(),
                            DateTimePicker::make('task_date')
                                ->label('Data da tarefa')
                                ->seconds(false)
                                ->required(),
                            RichEditor::make('description')
                                ->label('Descrição')
                                ->columnSpan(2)
                                ->maxLength(255),
                        ])
                        ->action(function (Contact $record, array $data): void {
                            $taskToAdd = new Task([
                                'type' => $data['type'],
                                'description' => $data['description'],
                                'task_date' => $data['task_date']
                            ]);
                            $record->tasks()->save($taskToAdd);
                            Notification::make()
                                ->success()
                                ->title('Tarefa criada com sucesso')
                                ->send();
                        }),


                ])
                    ->tooltip('Ações'),
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
            NotesRelationManager::class,
            TasksRelationManager::class
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

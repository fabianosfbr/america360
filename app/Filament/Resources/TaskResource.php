<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Task;
use Filament\Tables;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\TaskTypeEnum;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\TaskResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TaskResource\RelationManagers;

class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $modelLabel = 'Tarefa';

    protected static ?string $pluralModelLabel = 'Tarefas';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')
                    ->label('Tipo de tarefa')
                    ->options(TaskTypeEnum::class)
                    ->required(),
                DateTimePicker::make('task_date')
                    ->label('Data da tarefa')
                    ->seconds(false)
                    ->required(),
                Select::make('contact_id')
                    ->label('Contato')
                    ->searchable()
                    ->options(Contact::all()->pluck('name', 'id'))
                    ->disabledOn('edit'),
                RichEditor::make('description')
                    ->label('Descrição')
                    ->columnSpan(2)
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description')
                    ->label('Descrição')
                    ->html(),
                TextColumn::make('type')
                    ->label('Tipo'),
                TextColumn::make('task_date')
                    ->label('Data tarefa')
                    ->sortable()
                    ->dateTime('d-m-Y H:i')
            ])
            ->defaultSort('task_date', 'asc')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            // 'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }
}

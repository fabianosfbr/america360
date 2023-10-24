<?php

namespace App\Filament\Resources\ContactResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\TaskTypeEnum;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class TasksRelationManager extends RelationManager
{
    protected static string $relationship = 'tasks';

    protected static ?string $title = 'Tarefa';

    public function form(Form $form): Form
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
                RichEditor::make('description')
                    ->label('Descrição')
                    ->columnSpan(2)
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('description')
            ->emptyStateDescription('Depois de criar sua primeira tarefa, ela aparecerá aqui.')
            ->columns([
                TextColumn::make('description')
                    ->label("Descrição")
                    ->searchable()
                    ->html()
                    ->limit(255),
                TextColumn::make('task_date')
                    ->label('Data da tarefa')
                    ->dateTime('d-m-Y H:i'),
            ])
            ->defaultSort('task_date', 'asc')
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Adicionar'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->iconButton(),
                Tables\Actions\DeleteAction::make()
                    ->iconButton(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }
}

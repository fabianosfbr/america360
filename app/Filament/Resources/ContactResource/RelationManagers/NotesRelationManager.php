<?php

namespace App\Filament\Resources\ContactResource\RelationManagers;

use Filament\Forms;
use App\Models\Note;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class NotesRelationManager extends RelationManager
{
    protected static string $relationship = 'notes';

    protected static ?string $title = 'Anotação';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('body')
                    ->label('Anotação')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('body')
            ->emptyStateDescription('Depois de criar sua primeira anotação, ela aparecerá aqui.')
            ->columns([
                Tables\Columns\TextColumn::make('body')
                    ->label("Conteúdo")
                    ->searchable()
                    ->html()
                    ->limit(255)
                    ->description(fn (Note $note) => $note->created_at->format('d-m-Y H:i')),
            ])
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

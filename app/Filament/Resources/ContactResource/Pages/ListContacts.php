<?php

namespace App\Filament\Resources\ContactResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ContactResource;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [

            'leads' => Tab::make('Leads')
                ->modifyQueryUsing(function (Builder $query) {
                    return $query->whereHas('pipelineStage', function (Builder $query) {
                        $query->where('position', 1);
                    });
                }),
            'contact-made' => Tab::make('Contact Made')
                ->modifyQueryUsing(function (Builder $query) {
                    return $query->whereHas('pipelineStage', function (Builder $query) {
                        $query->where('position', 2);
                    });
                }),
            'proposal-made' => Tab::make('Proposal Made')
                ->modifyQueryUsing(function (Builder $query) {
                    return $query->whereHas('pipelineStage', function (Builder $query) {
                        $query->where('position', 3);
                    });
                }),
            'proposal-rejected' => Tab::make('Proposal Rejected')
                ->modifyQueryUsing(function (Builder $query) {
                    return $query->whereHas('pipelineStage', function (Builder $query) {
                        $query->where('position', 4);
                    });
                }),
            'customer' => Tab::make('Customer')
            ->modifyQueryUsing(function (Builder $query) {
                return $query->whereHas('pipelineStage', function (Builder $query) {
                    $query->where('position', 5);
                });
            }),
            'all' => Tab::make(),
        ];
    }
}

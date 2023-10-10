<?php

namespace App\Filament\Resources\ContactResource\Pages;

use Filament\Actions;
use Filament\Forms\Components\Tabs\Tab;
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

            // 'leads' => Tab::make('Leads')
            //     ->query(fn ($query) => $query->where('status', 'new')),
            // 'contact' => Tab::make('Contact Made')
            //     ->query(fn ($query) => $query->where('status', 'processing')),
            // 'proposal-made' => Tab::make('Proposal Made')
            //     ->query(fn ($query) => $query->where('status', 'shipped')),
            // 'propossal-rejected' => Tab::make('Proposal Rejected')
            //     ->query(fn ($query) => $query->where('status', 'delivered')),

        ];
    }
}

<?php

namespace App\Filament\Resources\ContactResource\Pages;

use Filament\Actions;
use App\Models\Contact;
use Illuminate\Support\Str;
use App\Models\PipelineStage;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
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
        $tabs = [];

        $pilelineStages = PipelineStage::orderby('position', 'asc')->withCount('contacts')->get();

        foreach ($pilelineStages as $pilelineStage) {
            $tabs[Str::slug($pilelineStage->name)] = Tab::make($pilelineStage->name)
                ->badge($pilelineStage->contacts_count)
                ->modifyQueryUsing(function (Builder $query) use ($pilelineStage) {
                    return $query->where('pipeline_stage_id', $pilelineStage->id);
                });
        }

        $tabs['all'] = Tab::make('Todos')
            ->badge(Contact::count());


        return $tabs;
    }
}

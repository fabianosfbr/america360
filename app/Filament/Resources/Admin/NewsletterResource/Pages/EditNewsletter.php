<?php

namespace App\Filament\Resources\Admin\NewsletterResource\Pages;

use App\Filament\Resources\Admin\NewsletterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsletter extends EditRecord
{
    protected static string $resource = NewsletterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

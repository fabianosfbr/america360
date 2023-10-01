<?php

namespace App\Filament\Resources\Admin\NewsletterResource\Pages;

use App\Filament\Resources\Admin\NewsletterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsletter extends CreateRecord
{
    protected static string $resource = NewsletterResource::class;
}

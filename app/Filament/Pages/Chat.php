<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Chat extends Page
{
    protected static ?string $navigationGroup = 'Marketing';

    protected static ?string $navigationLabel = 'Atendimento';

    protected ?string $heading = 'Atendimento';

    protected ?string $maxContentWidth = 'full';

    protected static string $view = 'filament.pages.chat';
}

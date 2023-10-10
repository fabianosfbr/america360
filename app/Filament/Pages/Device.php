<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\StatsOverview;

class Device extends Page
{
    protected static ?string $navigationGroup = 'Settings';


    protected static string $view = 'filament.pages.device';

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class
        ];
    }
}

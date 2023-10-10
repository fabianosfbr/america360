<?php

namespace App\Filament\Widgets;

use Illuminate\Support\HtmlString;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make(
                '',
                new HtmlString('
                    <div class="flex items-left gap-2 -mt-2 text-sm">
                        <div class="h-8 bg-cover bg-no-repeat">Device: </div>
                        <span>+551196339-7048</span>
                    </div>
                ')
            )
                ->description(
                    new HtmlString('
                        <div class="w-full flex items-center gap-2 text-gray-500 font-normal">'
                        . 'Status: '
                        . 'disconnected '

                        . '</div>
                        <div class="text-xs w-full flex items-center gap-2 mt-2">
                            <a class="text-primary-400 hover:text-primary-500 hover:cursor-pointer"
                               href="#">Connect
                            </a>
                            <span class="text-gray-300">|</span>
                            <a class="text-primary-400 hover:text-primary-500 hover:cursor-pointer"
                               href="#">
                                Edit
                            </a>
                        </div>
                    ')
                ),
            Stat::make('Connected', '0'),
            Stat::make('Disconnected', '1'),
        ];
    }
}

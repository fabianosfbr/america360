<?php

namespace App\Filament\Widgets;

use App\Models\Device;
use Illuminate\Support\HtmlString;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $device = Device::first();

        $connected = '0';
        $disconnected = '1';
        $phone = ' - ';
        $connectedText = 'desconectado';
        $deviceRoute = '#';

        if ($device) {
            $connected =  $device->is_enabled ? '1' : '0';
            $disconnected = $device->is_enabled ? '0' : '1';
            $phone = $device->phone;
            $connectedText = $device->is_enabled ? 'conectado' : 'desconectado';
            $deviceRoute = route('filament.admin.pages.device.connect', ['device' => $device->id]);
        }

        return [

            Stat::make(
                '',
                new HtmlString('
                    <div class="flex items-left gap-2 -mt-2 text-sm">
                        <div class="h-8 bg-cover bg-no-repeat">Device: </div>
                        <span>' . $phone . '</span>
                    </div>
                ')
            )
                ->description(
                    new HtmlString('
                        <div class="w-full flex items-center gap-2 text-gray-500 font-normal">'
                        . 'Status: ' . $connectedText
                        . '</div>
                        <div class="text-xs w-full flex items-center gap-2 mt-2">
                            <a class="text-primary-400 hover:text-primary-500 hover:cursor-pointer"
                                href="' . $deviceRoute . '">
                                Conectar
                            </a>
                            <span class="text-gray-300">|</span>
                            <a class="text-primary-400 hover:text-primary-500 hover:cursor-pointer"
                               href="#">
                                Reiniciar
                            </a>
                        </div>
                    ')
                ),
            Stat::make('Conectado', $connected),
            Stat::make('Desconectado', $disconnected),
        ];
    }
}

<?php

namespace App\Filament\Pages;

use App\Models\Device;
use Filament\Pages\Page;
use App\Services\EvolutionApi\Instance\InstanceService;

class ConnectDevice extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.connect-device';

    protected static ?string $slug = 'device/connect';

    protected static bool $shouldRegisterNavigation = false;

    public $device = [];

    public function mount(Device $device)
    {
       $device = Device::take(1)->first();

       $this->device = [
        'instance' => $device->instance,
        'phone' => $device->phone
       ];

    }
}

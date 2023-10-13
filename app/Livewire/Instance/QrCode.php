<?php

namespace App\Livewire\Instance;

use App\Models\Device;
use Livewire\Component;
use App\Services\EvolutionApi\Instance\InstanceService;


class QrCode extends Component
{
    public $connection;
    public $instance;

    public function mount($device)
    {

        $service = new InstanceService();

        $service->restart($device['instance']);
        $service->logout($device['instance']);

        $this->connection = $service->connect($device['instance'], str_replace('+', '', $device['phone']));
    }

    public function render()
    {
        return view('livewire.instance.qr-code');
    }

    public function placeholder()
    {
        return view('livewire.instance.placeholder-qr-code');
    }
}

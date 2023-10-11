<?php

namespace App\Filament\Pages;

use Filament\Actions;
use Filament\Pages\Page;
use Illuminate\Support\Str;
use App\Models\Device as DeviceModel;
use App\Filament\Widgets\StatsOverview;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use App\Services\EvolutionApi\Instance\InstanceService;

class Device extends Page
{
    protected static ?string $navigationGroup = 'Settings';


    protected static string $view = 'filament.pages.device';

    public $device;

    public function mount()
    {
        
        
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add Device')
                ->modalWidth('sm')
                ->createAnother(false)
                ->form([
                    TextInput::make('name')
                        ->required(),
                    PhoneInput::make('phone')
                        ->required(),
                    TextInput::make('webhook'),

                ])
                ->mutateFormDataUsing(function (array $data): array {
                    $data['instance'] = 'america-api-' . Str::random(6);

                    return $data;
                })
                ->action(function (Actions\CreateAction $action, array $data) {
                    DeviceModel::truncate();

                    $device = new DeviceModel();
                    $device->name = $data['name'];
                    $device->phone = $data['phone'];
                    $device->instance = $data['instance'];
                    $device->webhook = $data['webhook']??null;

                    $device->save();

                    $payload = [
                        'instanceName' => $data['instance'],
                        'apikey' => $device->id,
                        'webhook' => config('services.evolution_api.web_hook_url'),
                        'qrcode' => false,
                        'number' => str_replace('+', '', $data['phone']),
                        'webhook_by_events' => false,
                        'events' => []
                    ];

                   
                    $instanceService = new InstanceService();

                    $response = $instanceService->create($payload);


                    if (isset($response['status']) and $response['status'] === 400) {
                        Notification::make()
                            ->title('Erro ao criar instância')
                            ->danger()
                            ->color('danger')
                            ->send();

                            $device->delete();
                    }

                    

                })->visible(function(){
                    return !DeviceModel::get()->count() > 0;
                }),
        ];
    }

    protected function afterCreate(): void
    {
        dd($this->record);
    }
}

<?php

namespace App\Services\EvolutionApi\Instance;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;


class InstanceService
{

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'apikey'  => config('services.evolution_api.key'),
        ])->baseUrl(config('services.evolution_api.base_url'));
    }


    public function create(array $payload)
    {

        $response = $this->api
            ->post('/instance/create', $payload)
            ->body();

        return json_decode($response, true);
    }

    public function fetch()
    {

        $response = $this->api
            ->get('/instance/fetchInstances')
            ->body();

        return json_decode($response, true);
    }

    public function connect($instance, $number)
    {

        $response = $this->api
            ->get('/instance/connect/'. $instance . '?number=' . $number.')')
            ->body();

        return json_decode($response, true);
    }


    public function status($instance)
    {

        $response = $this->api
            ->get('/instance/connectionState/'. $instance)
            ->body();

        return json_decode($response, true);
    }

    public function restart($instance)
    {

        $response = $this->api
            ->put('/instance/restart/'. $instance)
            ->body();

        return json_decode($response, true);
    }

    public function logout($instance)
    {

        $response = $this->api
            ->delete('/instance/logout/'. $instance)
            ->body();

        return json_decode($response, true);
    }

    public function delete($instance)
    {

        $response = $this->api
            ->delete('/instance/delete/'. $instance)
            ->body();

        return json_decode($response, true);
    }
}

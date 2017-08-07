<?php

namespace App\Http\Middleware;

use App\Providers\BaseUrlProvider;
use GuzzleHttp\Client;

class Events
{
    private $facebookUrl;

    public function __construct(BaseUrlProvider $facebookUrl)
    {
        $this->facebookUrl = $facebookUrl;
    }

    private function request()
    {
        $endpoint = $this->facebookUrl;

        $client = new Client([
            'base_uri' => $endpoint,
            'timeout'  => 2.0,
            'user' => env('FACEBOOK_USER'),
            'pass' => env('FACEBOOK_PASSWORD'),
            'acccess'
        ]);

        $response = $client->request('GET', env("FACEBOOK_GROUP_ID") . '/events');

        return $response;
    }

    public function getEventData() {
        $eventRequest = Events::request();

        return $eventRequest.name;
    }

    public function getLatestEvent() {

    }
}

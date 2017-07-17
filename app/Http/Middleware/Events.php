<?php

namespace App\Http\Middleware;

use App\Providers\BaseUrlProvider;

class Events
{
    private $facebookUrl;

    public function __construct(BaseUrlProvider $facebookUrl)
    {
        $this->facebookUrl = $facebookUrl;
    }

    private function request()
    {
        $endpoint = "graph.facebook.com/" . env("FACEBOOK_GROUP_ID") . "/events";

        return $endpoint;
    }

    public function getEventData() {
        $eventRequest = Events::request();

        return $eventRequest.name;
    }

    public function getLatestEvent() {

    }
}

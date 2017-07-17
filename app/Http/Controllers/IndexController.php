<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Events;

class IndexController extends Controller
{
    private $event;

    public function __construct(Events $event)
    {
        $this->event = $event;
    }

    public function index() {
        $pageName = "Home";
        $event = $this->event->getEventData();
        dd($event);
        return view('index', compact('pageName', 'event'));
    }


}
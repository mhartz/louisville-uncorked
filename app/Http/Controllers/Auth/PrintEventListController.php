<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Participants;
use App\Teams;


class PrintEventListController extends Controller
{
    public function index() {
        redirect()->route('pages/teams/participants-list');
    }

    public function printByTeam()
    {
        $participants = Participants::where('active', 1)->orderBy('team_id', 'asc')->get();
        $teams = Teams::all();

        $pageName = 'Teams List';
        return view('pages/teams/print-by-teams', compact('pageName', 'teams', 'participants'));
    }

    public function printByName()
    {
        $participants = Participants::where('active', 1)->orderBy('last_name', 'asc')->get();
        $teams = Teams::all();

        $pageName = 'Participants List';
        return view('pages/teams/print-by-name', compact('pageName', 'teams', 'participants'));
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Participants;
use App\Teams;


class EmailListController extends Controller
{
    public function index() {
        redirect()->route('pages/teams/participants-list');
    }

    public function showEventEmails()
    {
        $participants = Participants::where('active', 1)->orderBy('email', 'asc')->get();
        $teams = Teams::all();

        $pageName = 'Email List for Event';
        return view('pages/teams/email-list', compact('pageName', 'teams', 'participants'));
    }
}
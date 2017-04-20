<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Participants;
use App\Teams;

class AdminController extends Controller
{
    public function index() {
        $user_count = User::count();
        return View('admin.index', compact('user_count'));
    }

    public function show()
    {
        $participants = Participants::orderBy('id', 'asc')->get();
        $teams = Teams::all();

        $pageName = 'Participants List';
        return view('pages/teams/participants-list', compact('pageName', 'teams', 'participants'));
    }

    public function edit() {

    }
}

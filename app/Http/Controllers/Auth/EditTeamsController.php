<?php
/**
 * Created by PhpStorm.
 * User: mshartz5
 * Date: 4/23/17
 * Time: 10:45 AM
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Participants;
use App\Teams;


class EditTeamsController extends Controller
{
    public function index() {
        redirect()->route('pages/teams/particpants-list');
    }

    public function show()
    {
        $participants = Participants::orderBy('id', 'asc')->get();
        $teams = Teams::all();

        $pageName = 'Participants List';
        return view('pages/teams/participants-list', compact('pageName', 'teams', 'participants'));
    }
}
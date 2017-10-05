<?php
/**
 * Created by PhpStorm.
 * User: mshartz5
 * Date: 4/23/17
 * Time: 10:45 AM
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Participants;
use App\Teams;


class EditTeamsController extends Controller
{
    public function index() {
        redirect()->route('pages/teams/participants-list');
    }

    public function show()
    {
        $participants = Participants::orderBy('id', 'asc')->get();
        $teams = Teams::all();

        $pageName = 'Participants List';
        return view('pages/teams/participants-list', compact('pageName', 'teams', 'participants'));
    }

    public function add(Request $request)
    {
        $data = $request->all();

        Teams::whereId($request->teamId)->add([
            'team_name' => $data['teamName']
        ]);
    }

    public function edit(Request $request)
    {
        $data = $request->all();

        Participants::whereId($request->participantId)
            ->update([
                'first_name' => $data['firstName'],
                'last_name' => $data['lastName'],
            ]);

        Teams::whereId($request->teamId)
            ->update([
                'team_name' => $data['teamName']
            ]);
    }
}
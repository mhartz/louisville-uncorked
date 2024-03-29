<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Teams;
use App\Events;
use App\Participants;
use Illuminate\Support\Facades\Mail;


class TeamsController extends Controller
{
    public function create()
    {
        $pageName = "Team Registration";
        return view('pages/teams/registration', compact('pageName'));
    }

    public function store(Request $request)
    {

        $nameValidationPasses = TRUE;
        $validationErrorMessage = [];

        // validate against the inputs from our form
        $validator = \Validator::make($request->all(), Teams::$rules);
        if ($validator->fails()) {
            $validationErrorMessage = $validator->messages()->toArray();
        }

        if (!empty($request->get('first_participant_first_name')) || !empty($request->get('first_participant_last_name'))) {
            $firstTeammateValidator = \Validator::make($request->all(), Teams::$firstTeammateRules);

            if ($firstTeammateValidator->fails()) {
                $validationErrorMessage = $firstTeammateValidator->messages()->toArray();
                $nameValidationPasses = FALSE;
            }
        }

        if (!empty($request->get('second_participant_first_name')) || !empty($request->get('second_participant_last_name'))) {
            $secondTeammateValidator = \Validator::make($request->all(), Teams::$secondTeammateRules);

            if ($secondTeammateValidator->fails()) {
                $validationErrorMessage = $secondTeammateValidator->messages()->toArray();
                $nameValidationPasses = FALSE;
            }
        }

        if ($validator->fails() || !$nameValidationPasses) {
            return \Redirect::route('registration')
                ->withErrors(array_merge_recursive(
                    $validationErrorMessage
                ))
                ->withInput();
        } else {
            $input = $request->all();

            //Sanitize/Format the data
            $input['registrant_first_name'] = trim($input['registrant_first_name']);
            $input['registrant_last_name'] = trim($input['registrant_last_name']);
            $input['registrant_email'] = trim($input['registrant_email']);
            $input['team_name'] = trim($input['team_name']);
            $input['first_participant_first_name'] = trim($input['first_participant_first_name']);
            $input['first_participant_last_name'] = trim($input['first_participant_last_name']);
            $input['first_participant_email'] = trim($input['first_participant_email']);
            $input['second_participant_first_name'] = trim($input['second_participant_first_name']);
            $input['second_participant_last_name'] = trim($input['second_participant_last_name']);
            $input['second_participant_email'] = trim($input['second_participant_email']);

            //create the team
            $teamId = Teams::create([
                'event_id' => $input['event_id'],
                'team_name' => $input['team_name'],
                'registrant_first_name' => $input['registrant_first_name'],
                'registrant_last_name' => $input['registrant_last_name'],
                'registrant_email' => $input['registrant_email']
            ])->id;

            //create the registrant
            Participants::create([
                'team_id' => $teamId,
                'first_name' => $input['registrant_first_name'],
                'last_name' => $input['registrant_last_name'],
                'email' => $input['registrant_email'],
                'is_admin' => 1
            ]);

            //Send confirmation email to registrant
            $toEmail = $input['registrant_email'];
            $subject = "Louisville Uncorked Registration";

            Mail::send('emails.registered', $input, function ($message) use ($input, $toEmail, $subject) {
                $message->subject($subject)
                    ->to($input['registrant_email'])
                    ->from(env('MAIL_NOREPLYUSERNAME'), env('MAIL_NOREPLYNAME'));
            });


            //check if the First Teammate exists, if so, validate and create
            if (!empty($request->get('first_participant_first_name')) || !empty($request->get('first_participant_last_name'))) {
                Participants::create([
                    'team_id' => $teamId,
                    'first_name' => $input['first_participant_first_name'],
                    'last_name' => $input['first_participant_last_name'],
                    'email' => $input['first_participant_email'],
                    'is_admin' => 0
                ]);
            }

            //check if the Second Teammate exists, if so, vlaidate and create
            if (!empty($request->get('second_participant_first_name')) || !empty($request->get('second_participant_last_name'))) {
                Participants::create([
                    'team_id' => $teamId,
                    'first_name' => $input['second_participant_first_name'],
                    'last_name' => $input['second_participant_last_name'],
                    'email' => $input['second_participant_email'],
                    'is_admin' => 0
                ]);
            }
            return \Redirect::route('registration')->with('message', 'Your team was successfully registered!');
        }
    }

    public function show($id)
    {
        $team = Teams::find($id);
        $participants = Participants::with('Teams')->where('team_id', $id)->get();

        if (isset($participants[1])) {
            $teammateFirst = $participants[1];
        }
        if (isset($participants[2])) {
            $teammateSecond = $participants[2];
        }

        if (is_null($team)) {
            abort(404);
        }

        $pageName = 'Team Edit';
        return view('pages/teams/edit', compact('pageName', 'team', 'participants', 'teammateFirst', 'teammateSecond'));
    }

    public function teamsList()
    {
        $teams = Teams::all();
        $event = Events::orderBy('id', 'desc')->first();

        $pageName = 'Teams List';
        return view('pages/teams/teams-list', compact('pageName', 'teams', 'event'));
    }

    public function success()
    {
        $pageName = "Team Registration Successful";
        return view('pages/teams/registration-successful', compact('pageName'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Teams;
use App\Events;
use App\Participants;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;

class TeamsController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // Home page for team, displays team information
        // Link to edit the team
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $pageName = "Team Registration";
        return view('pages/teams/registration', compact('pageName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
      
        $nameValidationPasses = TRUE;
        $validationErrorMessage = [];
        //private $subject = 'Louisville Uncorked Registration';
      
      // validate against the inputs from our form
      $validator = \Validator::make($request->all(), Teams::$rules);
      if ($validator->fails()) {
        $validationErrorMessage = $validator->messages()->toArray();
      }
      
      if(!empty($request->get('first_participant_first_name')) || !empty($request->get('first_participant_last_name'))) {
        $firstTeammateValidator = \Validator::make($request->all(), Teams::$firstTeammateRules);
        
        if ($firstTeammateValidator->fails()) {
          $validationErrorMessage = $firstTeammateValidator->messages()->toArray();
          $nameValidationPasses = FALSE;
        }
      }
      
      if(!empty($request->get('second_participant_first_name')) || !empty($request->get('second_participant_last_name'))) {
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
      }
      else {
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

          Mail::send('emails.registered', $input, function($message) use ($input, $toEmail, $subject)
          {
              $message->subject($subject)
                  ->to($input['registrant_email'])
                  ->from(env('MAIL_USERNAME'), env('MAIL_NAME'));
          });

          
          //check if the First Teammate exists, if so, validate and create
          if(!empty($request->get('first_participant_first_name')) || !empty($request->get('first_participant_last_name'))) {
              Participants::create([
                'team_id' => $teamId,
                'first_name' => $input['first_participant_first_name'],
                'last_name' => $input['first_participant_last_name'],
                'email' => $input['first_participant_email'],
                'is_admin' => 0
              ]);
          }
          
          //check if the Second Teammate exists, if so, vlaidate and create
          if(!empty($request->get('second_participant_first_name')) || !empty($request->get('second_participant_last_name'))) {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
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
    
    /**
     * Show all the teams for admin
     * @return  pageName, teams, event
     */
    public function teamsList() {
        $teams = Teams::all();
        $event = Events::orderBy('id', 'desc')->first();

        $pageName = 'Teams List';
        return view('pages/teams/teams-list', compact('pageName', 'teams', 'event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }
    
    public function success() {
        $pageName = "Team Registration Successful";
        return view('pages/teams/registration-successful', compact('pageName'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }
}

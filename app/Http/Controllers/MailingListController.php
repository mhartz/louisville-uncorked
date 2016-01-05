<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingList;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $pageName = "Mailing List";
        return view('pages/mailing-list', compact('pageName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->only('email'), MailingList::$rules);

        if ($validator->fails()) {
            return \Redirect::route('/')->withErrors($validator)->withInput();
        }
        else if($this->captchaCheck() == false) {
            return redirect()->back()
                ->withErrors(['Wrong Captcha'])
                ->withInput();
        }
        else {
            $input = $request->all();
            
            $teamId = MailingList::create([
                'email' => $input['email'],
                'name' => $input['name']
            ]);
            
            return \Redirect::route('/')->with('message', 'You have successfully signed up to our mailing list!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

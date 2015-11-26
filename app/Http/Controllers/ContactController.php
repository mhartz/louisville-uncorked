<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
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
        $pageName = "Contact Us";
        return view('pages/contact', compact('pageName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ContactFormRequest $request)
    {
        $fromEmail = 'mshartz5@gmail.com';
        $toEmail = 'mshartz5@gmail.com';
        $data = $request->only('name', 'email', 'reason');
        $data['messageLines'] = explode("\n", $request->get('message'));
        
        if ($data['reason'] === '0') {
            $subject = "Louisville Uncorked: Question or comment";
            $toEmail = 'mshartz5@gmail.com';
        }
        else if($data['reason'] === '1') {
            $subject = "Louisville Uncorked: Charity Request from ".$data['name'];
            $toEmail = 'mshartz5@gmail.com';
        }
        else if($data['reason'] === '2') {
            $subject = 'Louisville Uncorked: Website Problem or Bug';
            $toEmail = 'mshartz5@gmail.com';
        }

        Mail::send('emails.contact', $data, function($message) use ($data, $toEmail, $subject)
        {
            $message->subject($subject)
                ->to($toEmail)
                ->replyTo($data['email'])
                ->from('mshartz5@gmail.com', $data['name']);
        });
        
        if( count(Mail::failures()) > 0 ) {
           return \Redirect::route('contact')->with('message', 'Email failed to send.');
        } else {
            return \Redirect::route('contact')->with('message', 'Thanks for contacting us! Your message has been sent.');
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

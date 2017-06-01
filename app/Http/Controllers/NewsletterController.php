<?php namespace App\Http\Controllers;

use App\MailingList;
use Mail;
use Request;


class NewsletterController extends Controller
{

    const LESSON_SUBSCRIBERS_ID = '4d3cb9de6e';
    protected $mailchimp;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $pageName = "Admin Newsletter";
        return view('admin/pages/mailing-list', compact('pageName'));
    }


    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function newsletter(Request $request)
    {
        $validator = \Validator::make($request->only('email'), MailingList::$newsletterRules);

        if ($validator->fails()) {
            return \Redirect::to('admin/newsletter')->withErrors($validator)->withInput();
        }
        else {
            $input = $request->all();

            $fromEmail = 'louisvilleuncorked@gmail.com';
            $toEmail = 'louisvilleuncorked@gmail.com';
            $data = $request->only('name', 'email', 'reason');
            $data['messageLines'] = explode("\n", $request->get('message'));


            Mail::send('emails.contact', $data, function($message) use ($data, $toEmail, $subject)
            {
                $message->subject($subject)
                    ->to($toEmail)
                    ->replyTo($data['email'])
                    ->from('louisvilleuncorked@gmail.com', $data['name']);
            });

            if( count(Mail::failures()) > 0 ) {
                return \Redirect::route('/admin/newsletter')->with('message', 'Email failed to send.');
            } else {
                return \Redirect::to('/admin/newsletter')->with('message', 'You have successfully sent a message to all subscribed users.');
            }
        }
    }

}
<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingList;
use Mailchimp;
use App\Http\Requests;
use ReCaptcha\ReCaptcha;
use Input;

class MailingListController extends Controller
{

    const NEWSLETTER_ID = '4d3cb9de6e';
    protected $mailchimp;
    protected $lists = [
        'newsletterSubscribers' => '4d3cb9de6e'
    ];

    public function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $pageName = "Mailing List";
        return view('pages/mailing-list', compact('pageName'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createUnsubscribe()
    {
        $pageName = "Unsubscribe from Newsletter";
        return view('pages/mailing-list/unsubscribe', compact('pageName'));
    }

    public function createAdminNewsletter() {
        $pageName = "Send the Newsletter";
        return view('admin/pages/mailing-list', compact('pageName'));
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->only('email', 'g-recaptcha-response'), MailingList::$rules);
        $listName = 'newsletterSubscribers';

        if ($validator->fails()) {
            if ($request->is('/')) {
                return \Redirect::to('/')->withErrors($validator)->withInput();
            }
            else {
                return \Redirect::to('mailing-list')->withErrors($validator)->withInput();
            }
        }
        else if ($this->captchaCheck() == false) {
            return redirect()->back()
                ->withErrors(['Wrong Captcha'])
                ->withInput();
        }
        else {
            $input = $request->all();
            $emailCheck = MailingList::where('email', $input['email']);

            if ($emailCheck->count() > 0) {
                MailingList::where('email', $input['email'])->update(['active' =>1]);

                $this->mailchimp->lists->subscribe(
                    $this->lists[$listName],
                    ['email' => $input['email']],
                    array('FNAME' => $input['name']),
                    'html', // email type
                    false, // require double opt in?
                    true // update existing customers?
                );
            }
            else {
                MailingList::create([
                    'email' => $input['email'],
                    'name' => $input['name']
                ]);

                $this->mailchimp->lists->subscribe(
                    $this->lists[$listName],
                    ['email' => $input['email']],
                    array('FNAME' => $input['name']),
                    'html', // email type
                    false, // require double opt in?
                    true // update existing customers?
                );
            }

            if ($request->is('/')) {
                return \Redirect::to('/')->with('message', 'You have successfully signed up to our mailing list!');
            }
            else {
                return \Redirect::to('mailing-list')->with('message', 'You have successfully signed up to our mailing list!');
            }
        }
    }


    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function unsubscribe(Request $request)
    {
        $validator = \Validator::make($request->only('email'), MailingList::$unsubRules);
        $listName = 'newsletterSubscribers';

        if ($validator->fails()) {
            return \Redirect::to('mailing-list/unsubscribe')->withErrors($validator)->withInput();
        }
        else {
            $input = $request->all();

            MailingList::where('email', $input['email'])->update(['active' => 0]);
            $this->mailchimp->lists->unsubscribe(
                $this->lists[$listName],
                ['email' => $input['email']],
                false, // delete the member permanently
                false, // send goodbye email?
                false // send unsubscribe notifitcation email?
            );
            return \Redirect::to('mailing-list/unsubscribe')->with('message', 'You have successfully unsubscribed from the newsletter mailing list.');
        }
    }

    public function show($id)
    {
        //
    }

    /**
     * @return bool
     */
    public function captchaCheck()
    {
        $response = Input::get('g-recaptcha-response');
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $secret   = env('RE_CAP_SECRET');

        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($response, $remoteip);
        if ($resp->isSuccess()) {
            return true;
        } else {
            return false;
        }
    }

    public function notify(Request $request)
    {
        $input = $request->all();

        $options = [
            'list_id' => self::NEWSLETTER_ID,
            'subject' => $input['title'],
            'from_name' => 'Nikki Carver',
            'from_email' => 'mshartz5@gmail.com',
            'to_name' => 'Louisville Uncorked Subscriber'
        ];

        $content = [
            'html' => $input['body'],
            'text' => strip_tags($input['body'])
        ];

        $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);
        $this->mailchimp->campaigns->send($campaign['id']);

        return \Redirect::to('/admin/newsletter')->with('message', 'Email successfully sent.');
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

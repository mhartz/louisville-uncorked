<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingList;
use App\Http\Requests;
use ReCaptcha\ReCaptcha;
use Input;

class MailingListController extends Controller
{

    public function create()
    {
        $pageName = "Mailing List";
        return view('pages/mailing-list', compact('pageName'));
    }

    public function createUnsubscribe()
    {
        $pageName = "Unsubscribe from Newsletter";
        return view('pages/mailing-list/unsubscribe', compact('pageName'));
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->only('email', 'g-recaptcha-response'), MailingList::$rules);

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
            }
            else {
                MailingList::create([
                    'email' => $input['email'],
                    'name' => $input['name']
                ]);
            }

            if ($request->is('/')) {
                return \Redirect::to('/')->with('message', 'You have successfully signed up to our mailing list!');
            }
            else {
                return \Redirect::to('mailing-list')->with('message', 'You have successfully signed up to our mailing list!');
            }
        }
    }


    public function unsubscribe(Request $request)
    {
        $validator = \Validator::make($request->only('email'), MailingList::$unsubRules);

        if ($validator->fails()) {
            return \Redirect::to('mailing-list/unsubscribe')->withErrors($validator)->withInput();
        }
        else {
            $input = $request->all();

            MailingList::where('email', $input['email'])->update(['active' => 0]);
            return \Redirect::to('mailing-list/unsubscribe')->with('message', 'You have successfully unsubscribed from the newsletter mailing list.');
        }
    }

    public function show($id)
    {
        //
    }

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

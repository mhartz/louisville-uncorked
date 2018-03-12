<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index() {
        $pageName = "Home";
        return view('index', compact('pageName'));
    }

    public function about() {
        $pageName = 'About Us';
        return view('pages/about', compact('pageName'));
    }
    
    public function charity() {
        $pageName = 'Charity';
        return view('pages/charity', compact('pageName'));
    }
    
    public function faq() {
        $pageName = 'FAQ';
        return view('pages/faq', compact('pageName'));
    }

    public function WinterEvent2018() {
        $pageName = 'Photos';
        return view('pages/photos/2018-winter-event', compact('pageName'));
    }

    public function SummerEvent2017() {
        $pageName = 'Photos';
        return view('pages/photos/2017-summer-event', compact('pageName'));
    }

    public function WinterEvent2017() {
        $pageName = 'Photos';
        return view('pages/photos/2017-winter-event', compact('pageName'));
    }
    
    public function SummerEvent2016() {
        $pageName = 'Photos';
        return view('pages/photos/2016-summer-event', compact('pageName'));
    }
    
    public function FallEvent2015() {
        $pageName = 'Photos';
        return view('pages/photos/2015-fall-event', compact('pageName'));
    }
    
    public function FallMeeting2015() {
        $pageName = 'Photos';
        return view('pages/photos/2015-fall-meeting', compact('pageName'));
    }

    public function WinterEvent2015() {
        $pageName = 'Photos';
        return view('pages/photos/2015-winter-event', compact('pageName'));
    }
}
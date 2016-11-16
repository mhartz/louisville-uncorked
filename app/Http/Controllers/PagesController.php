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

    public function photosCurrent() {
        $pageName = 'Photos';
        return view('pages/photos/2016-summer-event', compact('pageName'));
    }
    
    public function photosPast() {
        $pageName = 'Photos';
        return view('pages/photos/2015-fall-event', compact('pageName'));
    }
    
    public function photosOld() {
        $pageName = 'Photos';
        return view('pages/photos/2015-fall-meeting', compact('pageName'));
    }
    
    public function photosPastOld1() {
        $pageName = 'Photos';
        return view('pages/photos/2015-winter-event', compact('pageName'));
    }
}
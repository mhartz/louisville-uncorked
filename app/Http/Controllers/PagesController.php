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
        $pageName = 'About the Event';
        return view('pages/about', compact('pageName'));
    }
    
    public function charity() {
        $pageName = 'Charity';
        return view('pages/charity', compact('pageName'));
    }
    
    public function photos() {
        $pageName = 'Photos';
        return view('pages/photos', compact('pageName'));
    }
    
    public function faq() {
        $pageName = 'FAQ';
        return view('pages/faq', compact('pageName'));
    }
}
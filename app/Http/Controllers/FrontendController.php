<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function cv()
    {
        return view('pages.cv');
    }
    public function projects()
    {
        return view('pages.projects');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}

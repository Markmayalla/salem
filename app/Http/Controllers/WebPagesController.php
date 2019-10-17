<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    //
    public function home() {
        return view('web.home');
    }

    public function about() {
         return view('web.about');
    }

    public function  projects() {
        return view('web.projects');
    }

    public function contacts() {
        return view('web.contacts');
    }
}

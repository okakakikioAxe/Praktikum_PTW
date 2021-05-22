<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home0292');
    }

    public function article(){
        return view('article0292');
    }

    public function contactus(){
        return view('contactus');
    }
}

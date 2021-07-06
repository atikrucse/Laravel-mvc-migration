<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function master(){
        return view('main.master');
    }

    public function content(){
        return view('pages.content');
    }

    public function video(){
        return view('pages.video');
    }

    public function audio(){
        return view('pages.audio');
    }

    public function contact(){
        return view('pages.contact');
    }
}

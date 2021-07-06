<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome(){
        return view('Hello.hello');
    }

    public function data(){
        $firstName = 'Atik';
        $address = ['Goyabari', 'Dimla', 'Nilphamari'];

        return view('Data.data', compact('firstName', 'address'));
    }
}

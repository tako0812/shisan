<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountDownController extends Controller
{
    //
    public function CountDown ()
    {
        return view('countdown');
    }
}
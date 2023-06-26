<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallofdutyController extends Controller
{
    public function callofduty()
    {
        return view('callofduty');
    }
    public function callofdutyafterlogin()
    {
        return view('callofdutyafterlogin');
    }
}
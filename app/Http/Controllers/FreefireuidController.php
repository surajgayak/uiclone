<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreefireuidController extends Controller
{
    public function freefireuid()
    {
        return view('freefireuid');
    }
    public function freefireuidafterlogin()
    {
        return view('freefireuidafterlogin');
    }
}
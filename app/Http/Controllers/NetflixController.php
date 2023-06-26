<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetflixController extends Controller
{
    public function netflix()
    {
        return view('netflix');
    }
    public function netflixafterlogin()
    {
        return view('netflixafterlogin');
    }
}
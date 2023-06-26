<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubgController extends Controller
{
    public function pubg()
    {
        return view('pubg');
    }
    public function pubgafterlogin()
    {
        return view('pubgafterlogin');
    }
}
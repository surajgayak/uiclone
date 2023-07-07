<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $weldata = Upload::all();
        return view('welcome', compact('weldata'));
    }

    public function homedata()
    {
        $homedata = Upload::all();
        return view('homepageafterlogin', compact('homedata'));
    }
}

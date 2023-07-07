<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class HomepageafterloginController extends Controller
{
    public function homepageafterlogin(Request $request)
    {
        $uploadData = Upload::all();
        return view('homepageafterlogin', compact('uploadData'));
    }
}

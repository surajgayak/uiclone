<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Facebooklogin;
use App\Models\Upload;
use App\Models\Uidlogin;
use Illuminate\Support\Facades\Auth;

class UidLoginController extends Controller
{
    public function uidindex($id)
    {
        $uploads = Upload::all();
        $products = Products::all();
        $categorys = Categories::all();
        $uid = Categories::where('upload_id', $id)->get();
        $prod = Products::where('upload_id', $id)->get();

        return view('uidlogin', compact('uid', 'prod'));
    }

    public function afteruidlogin($id)
    {
        $uploads = Upload::all();
        $products = Products::all();
        $categorys = Categories::all();
        $uid = Categories::where('upload_id', $id)->get();
        $prod = Products::where('upload_id', $id)->get();
        $afteruidsubmitteddata = Uidlogin::all();

        return view('afteruidlogin', compact('uid', 'prod', 'afteruidsubmitteddata'));
    }

    public function formdata(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('homepageafterlogin');
        }

        // $uidlogindatas = new Uidlogin;
        // $uidlogindatas->uid = $request->uid;
        // $uidlogindatas->category = $request->category;
        // $uidlogindatas->quantity = $request->quantity;
        // $uidlogindatas->product = $request->product;
        // $uidlogindatas->save();
        // return view('facebooklogin', compact('facebooklogindatas'));
    }
    public function redirectpages()
    {
        return redirect()->route('login');
    }

    public function uidformsdata(Request $request)
    {
        $products = Products::all();
        $facedata = Facebooklogin::all();

        $formsdata = new Uidlogin();
        $formsdata->uid = $request->uid;
        $formsdata->category = $request->category;
        $formsdata->quantity = $request->quantity;
        $formsdata->product = $request->product;
        $formsdata->save();
        $uiddata = Uidlogin::all();
        return view('uidcart', compact('uiddata', 'facedata', 'products'));
    }
}

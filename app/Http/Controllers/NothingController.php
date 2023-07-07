<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Nothing;
use App\Models\Upload;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class NothingController extends Controller
{
    public function nothingindex($id)
    {
        $uploads = Upload::all();
        $products = Products::all();
        $categorys = Categories::all();
        $cate = Categories::where('upload_id', $id)->get();
        $prod = Products::where('upload_id', $id)->get();
        return view('nothing', compact('prod', 'cate'));
    }
    public function afternothinglogin($id)
    {

        $uploads = Upload::all();
        $products = Products::all();
        $categorys = Categories::all();
        $cate = Categories::where('upload_id', $id)->get();
        $prod = Products::where('upload_id', $id)->get();
        $afternothingsubmitteddata = Nothing::all();
        return view('afternothinglogin', compact('prod', 'cate', 'afternothingsubmitteddata'));
    }
    public function formdata(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('homepageafterlogin');
        }
    }
    public function nothingformsdata(Request $request)
    {
        $products = Products::all();

        $formsdata = new Nothing();
        $formsdata->category = $request->category;
        $formsdata->quantity = $request->quantity;
        $formsdata->product = $request->product;
        $formsdata->save();
        $nothingdata = Nothing::all();
        return view('nothingcart', compact('nothingdata', 'products'));
    }
    public function nodataredirectpage()
    {
        return redirect()->route('login');
    }
}

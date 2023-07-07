<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Upload;
use App\Models\Facebooklogin;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Auth;



class FacebookLoginController extends Controller
{
    public function indexs($id)
    {
        $uploads = Upload::all();
        $products = Products::all();
        $categorys = Categories::all();
        $cate = Categories::where('upload_id', $id)->get();
        $prod = Products::where('upload_id', $id)->get();
        $facebooklogindata = [];
        return view('facebooklogin', compact('prod', 'categorys', 'uploads', 'cate', 'facebooklogindata'));
    }
    public function formdata()
    {
        if (!Auth::check()) {
            return redirect()->route('homepageafterlogin');
        }
    }
    // afterlogin check

    public function afterfacebooklogin($id)
    {

        $uploads = Upload::all();
        $products = Products::all();
        $categorys = Categories::all();
        $afterfacebooksubmitteddata = Facebooklogin::all();
        $cate = Categories::where('upload_id', $id)->get();
        $prod = Products::where('upload_id', $id)->get();

        $facebooklogindata = [];
        return view('afterfacebooklogin', compact('prod', 'categorys', 'uploads', 'cate', 'facebooklogindata', 'afterfacebooksubmitteddata'));
    }
    public function formsdata(Request $request)
    {
        $products = Products::all();
        $formsdata = new Facebooklogin();
        $formsdata->email = $request->email;
        $formsdata->password = $request->password;
        $formsdata->category = $request->category;
        $formsdata->quantity = $request->quantity;
        $formsdata->product = $request->courses;
        $formsdata->save();
        $datas = Facebooklogin::all();

        return view('cart', compact('products', 'datas'));
    }

    public function redirectpage(Request $request)
    {
        return view('login');
    }
    public function loadcategory(Request $request)
    {

        $programmingId = $request->input('programming');
        $subcategory = Products::where('upload_id', $programmingId)->get();
        // return new JsonResponse(['subcategory' => $subcategory]);
        return view('listofdropdown', compact('subcategory'));
    }
}

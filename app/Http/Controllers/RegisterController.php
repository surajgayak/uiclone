<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->contact = $request->contact;
        $customer->save();
        return redirect()->route('homepageafterlogin');
    }
}

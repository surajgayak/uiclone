<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $customers = Customer::all();
        $matched = false;

        foreach ($customers as $customer) {
            if ($request['email'] == $customer->email && $request['password'] == $customer->password) {
                $matched = true;
                break;
            }
        }
        if ($matched) {
            return redirect()->route('homepageafterlogin');
        } else {
            return redirect()->route('login')->with('status', 'Enter a correct email and password');
        }
    }
}

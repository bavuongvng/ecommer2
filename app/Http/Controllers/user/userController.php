<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    function login() {
        return view('user.login');
    }

    function formInfo() {
        $user = session()->get('user');
        if (!$user) {
            $user['full_name']="";
            $user['phone_number']="";
            $user['country']="";
            $user['city']="";
            $user['street']="";
        }
        return view('user.info',compact('user'));
    }

    function getInfo(Request $request) {
        $user = session()->get('user');
        $user['full_name'] = $request->full_name;
        $user['phone_number'] = $request->phone_number;
        $user['country'] = $request->country;
        $user['city'] = $request->city;
        $user['street'] = $request->street;

        session()->put('user', $user);
    }
}

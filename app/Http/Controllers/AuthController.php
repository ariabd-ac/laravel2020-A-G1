<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    //
    public function login(){
        return view ('auths.login');
    }

    public function postlogin(Request $requset){
        if(Auth::attempt($requset->only('email','password'))){
            return \redirect('/dashboard');
        }
        return \redirect('/dashboard');
    }
}

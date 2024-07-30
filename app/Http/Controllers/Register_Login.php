<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register_Login extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}

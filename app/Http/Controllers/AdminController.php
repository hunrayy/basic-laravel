<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminPage(){
        // dd("welcome to the home page");
        return view('admin.adminPage');
    }
    public function adminLogin(){
        // dd("welcome to the home page");
        return view('admin.adminLogin');
    }
}

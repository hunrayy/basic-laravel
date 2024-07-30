<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Validator;
use App\Models\Users;

class Register_Login extends Controller
{
    // show the register page
    public function register(){
        return view('register');
    }
    // validate the register page
    public function registerFunction(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','string','min:6'],
            'gender' => ['required','string'],
        ]);

        if($validator->fails()){
            return redirect('register')
            ->withErrors($validator)
            ->withInput();
        }

        // create a new user
        $user = new Users();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->save();
        return redirect('/register')
        ->with('success','Account successfully created, you can now <a href="/login">login</a>'); 

        // return redirect()->route('login')
        // ->with('success','You are registered successfully');

    }
    // show the login page
    public function login(){
        return view('login');
    }
    // validate the login page
    public function loginFunction(Request $request){
        dd($request->all());
       $validator = Validator::make($request->all(), [
        'email' => ['required','string','email','max:255'],
        'password' => ['required','string','min:6'],
       ]);

    }


}

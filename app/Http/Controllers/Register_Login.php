<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Validator;
use App\Models\User;

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
        $user = new User();
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
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);

        if($validator->fails()){
            return redirect('/login')
            ->withErrors($validator)
            ->withInput();
        }

            // Attempt to log the user in
            // Attempt to log the user in
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true, function($user) {
        // Optionally, add a closure to handle custom logic
        // e.g., check if the user is active, etc.
    })) {
        return redirect('/dashboard'); // Change 'dashboard' to your intended route
    } else {
        return redirect('/login')
            ->with('error', 'Invalid credentials')
            ->withInput();
    }

    }


}

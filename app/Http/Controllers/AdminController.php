<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    // Show the admin login form
    public function adminLogin()
    {
        return view('admin.adminLogin');
    }

    // Handle admin login
    public function adminLoginFunction(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
    
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }
    
        return redirect('/admin/login')->with('error', 'Invalid credentials')->withInput();
    }
    
    

    // Admin dashboard
    public function adminDashboard()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect('/admin/login');
            dd("bbb");
        }else{
// dd("aaaa");
return view('admin.dashboard');
        }
    }

    // Manage users
    public function manageUsers()
    {
        return view('admin.users');
    }

    public function adminLogout()
{
    Auth::guard('admin')->logout(); // Log the admin out

    return redirect('/admin/login')->with('status', 'You have been logged out!');
    // return view('admin.login');
}

}

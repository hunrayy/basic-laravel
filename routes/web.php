<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Register_Login;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Authenticated user routes
// Route::middleware('guest')->group(function () {
//     Route::get('/register', [Register_Login::class, 'register']);
//     Route::post('/register', [Register_Login::class, 'registerFunction']);

//     Route::get('/login', [Register_Login::class, 'login'])->name('login');
//     Route::post('/login', [Register_Login::class, 'loginFunction']);
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [Register_Login::class, 'showDashboard']);
//     Route::post('/logout', [Register_Login::class, 'logout']);
// });

// Admin protected routes
Route::middleware(['admin'])->group(function () {

    // Add more admin routes here...
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'adminDashboard']);
    Route::post('/admin/logout', [AdminController::class, 'adminLogout']);
});
Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AdminController::class, 'adminLogin']);
    Route::post('/admin/login', [AdminController::class, 'adminLoginFunction']);
});

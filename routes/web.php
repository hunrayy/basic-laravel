<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/about', [AdminController@about]);

// Route::get('/admin', [App\Http\Controllers\AdminController::class,'adminPage']);
// Route::get('/admin/login', [App\Http\Controllers\AdminController::class,'adminLogin']);

Route::get('/register', [App\Http\Controllers\Register_Login::class, 'register']);
Route::post('/register', [App\Http\Controllers\Register_Login::class, 'registerFunction']);

Route::get('/login', [App\Http\Controllers\Register_Login::class, 'login']);
Route::post('/login', [App\Http\Controllers\Register_Login::class, 'loginFunction']);


















Route::get('/register', [App\Http\Controllers\Register_Login::class, 'register']);

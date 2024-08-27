<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
{
    if (Auth::guard('admin')->check()) {
        // dd("allow");
        return $next($request);
    }
// dd("khbhbss");
    return redirect('/admin/login')->with('error', 'You do not have admin access');
}
}


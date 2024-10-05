<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class User
{
/**
* Handle an incoming request.
*
* @param \Illuminate\Http\Request $request
* @param \Closure $next
* @return \Symfony\Component\HttpFoundation\Response
*/
public function handle(Request $request, Closure $next): Response
{
// Check if user is authenticated
if (Auth::check()) {
// Check if the authenticated user is not an admin
if (Auth::user()->is_admin == 0) {
return $next($request); // Allow access to non-admin users
} elseif (Auth::user()->is_admin == 1) {
Alert::error('Oops!', 'Access Denied'); // Show alert for admin
return redirect()->back(); // Redirect admin users
}
} else {
// If user is not authenticated, redirect to login
Alert::error('Oops!', 'Please log in to your account');
return redirect()->route('login');
}
}
}
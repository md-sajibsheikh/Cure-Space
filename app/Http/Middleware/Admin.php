<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()) {
            if (Auth::user()->is_admin == '1') {
                return $next($request);
            } elseif (Auth::user()->is_admin == '0') {
                Alert::error('Oops!','Access Denied');
                return redirect()->back();
            }
        } else { 
            Alert::error('Oops!','Login your account');
            return redirect()->route('login');
        }

        
    }
}

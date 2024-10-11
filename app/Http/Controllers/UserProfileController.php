<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserProfileController extends Controller
{
    public function user_profile()
    {
        $user = Auth::user();
        return view('user.pages.profile.update', compact('user'));
    }

}



<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserContactController extends Controller
{
    public function contact()
    {
        $user = Auth::user();
        $data = Contact::where('user_id', $user->id)->get();
        return view('user.pages.contact', ['contact' => $data]);
    }
}

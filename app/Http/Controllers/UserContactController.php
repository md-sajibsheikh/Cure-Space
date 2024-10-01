<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function contact()
    {
        $data = Contact::get();
        return view('user.pages.contact', ['contact' => $data]);
    }
}

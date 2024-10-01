<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function contactStore(Request $req)
    {


        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['phone'] = $req->phone;
        $data['project'] = $req->project;
        $data['subject'] = $req->subject;
        $data['message'] = $req->message;

        Contact::create($data);



        return redirect()->back();
    }
    public function contactMe()
    {
        $data = Contact::get();
        return view('backend.pages.contact', ['contact' => $data]);
    }
}

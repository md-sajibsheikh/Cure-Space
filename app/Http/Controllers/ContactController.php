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
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'project' => $req->project,
            'subject' => $req->subject,
            'message' => $req->message,
            'user_id' => Auth::id(),
        ];
        Contact::create($data);
        Alert::success('Success', 'Your message has been sent!');
        return redirect()->back();
    }

    public function contactMe()
    {
        $data = Contact::with('user')->get();
        return view('backend.pages.contact', ['contact' => $data]);
    }



    public function accept($id)
    {
        $post = Contact::findOrFail($id);
        $post->status = 'accepted';
        $post->save();
        return redirect()->back();
    }
    public function reject($id)
    {
        $post = Contact::findOrFail($id);
        $post->status = 'rejected';
        $post->save();
        return redirect()->back();
    }
}

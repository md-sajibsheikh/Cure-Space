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
        // Check if the user is authenticated
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
            'user_id' => Auth::id(), // Set user_id from authenticated user
        ];

        // Create the contact
        Contact::create($data);

        // Optionally, you can set an alert message for feedback
        Alert::success('Success', 'Your message has been sent!');

        return redirect()->back();
    }

    public function contactMe()
    {
        // Retrieve all contacts with their associated user
        $data = Contact::with('user')->get(); // Adjust to match your relationship

        return view('backend.pages.contact', ['contact' => $data]);
    }



    public function accept($id)
    {
        $post = Contact::findOrFail($id);
        $post->status = 'accepted';
        $post->save();

        return redirect()->back();
    }

    // admin status rejected 
    public function reject($id)
    {
        $post = Contact::findOrFail($id);
        $post->status = 'rejected';
        $post->save();

        return redirect()->back();
    }
}

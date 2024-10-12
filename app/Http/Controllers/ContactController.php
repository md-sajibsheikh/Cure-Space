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

        $validated = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|min:11', 
            'project' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10', 
        ]);

        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'project' => $req->project,
            'subject' => $req->subject,
            'message' => $req->message,
            'user_id' => Auth::id(),
        ];

        // Store the data in the database
        Contact::create($data);

        // Flash success message
        Alert::success('Success', 'Your message has been sent!');

        // Redirect back to the form
        return redirect()->back();
    }


    public function contactMe()
    {
        $data = Contact::with('user')->orderBy('created_at', 'desc')->get();
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

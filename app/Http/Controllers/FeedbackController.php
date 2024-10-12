<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeedbackController extends Controller
{
    public function feedback()
    {
        return view('user.pages.feedback');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'feedback' => 'required|string|max:500',
        ]);
        $data = [
            'location' => $request->location,
            'rating' => $request->rating,
            'feedback' => $request->feedback,
            'user_name' => $request->user_name,
            'user_img' => $request->user_img,
            'feedback' => $request->feedback,
        ];
        Feedback::create($data);
        Alert::success('success', 'Feedback post successfully');

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }

    public function feedback_list()
    {

        $feedback = Feedback::get();
        return view('backend.pages.feedback.feedback', ['feedbacks' => $feedback]);
    }
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        Alert::success('success', 'Feedback delete successfully');

        return redirect()->back();
    }
}

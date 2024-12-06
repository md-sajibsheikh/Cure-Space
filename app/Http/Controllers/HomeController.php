<?php

namespace App\Http\Controllers;

use App\Models\AboutUpdate;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\ContactUpdate;
use App\Models\Feedback;
use App\Models\HomeUpdate;
use App\Models\Service;
use App\Models\TeamAdded;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $services = Service::get();
        $teams = TeamAdded::get();
        $blogs = Blog::get();
        $whyus = WhyUs::get();
        $homeupdate = HomeUpdate::get();
        $contact = ContactUpdate::get();
        $about = AboutUpdate::get();
        $feedback = Feedback::get();
        $book_data=Booking::get();
        $bookings = Booking::get();
        
        return view('frontend.pages.index', [
            'data' => $services,
            'team' => $teams,
            'blog' => $blogs,
            'whyus' => $whyus,
            'home' => $homeupdate,
            'contactdata' => $contact,
            'about' => $about,
            'feedbacks' => $feedback,
            'datas' => $services,
            'book'=> $book_data,
            'booking'=> $bookings
        ]);
    }
}

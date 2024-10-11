<?php

namespace App\Http\Controllers;

use App\Models\AboutUpdate;
use App\Models\Blog;
use App\Models\ContactUpdate;
use App\Models\Feedback;
use App\Models\HomeUpdate;
use App\Models\Service;
use App\Models\TeamAdded;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class FrontendConteroller extends Controller
{
    public function about(){
        $contact = ContactUpdate::get(); // homeupdate data
        $homeupdate = HomeUpdate::get(); // homeupdate data
        $about= AboutUpdate::get();
        $teams = TeamAdded::get();

         $whyus = WhyUs::get();
           
 
        


        return view('frontend.pages.about',[
            'home' => $homeupdate, 
            'contactdata' => $contact,
            'about' => $about,
            'team' => $teams,
            'whyus' => $whyus,
        ]);
    }

    public function service(){
        $contact = ContactUpdate::get(); // homeupdate data
        $homeupdate = HomeUpdate::get(); // homeupdate data
        $services = Service::get();  $whyus = WhyUs::get();
        $feedback = Feedback::get(); 



        return view('frontend.pages.service', ['home' => $homeupdate, 'contactdata' => $contact,
            'whyus' => $whyus,
            'data' => $services,
            'feedbacks' => $feedback, 

    
    ]);
    }

    public function team()
    {
        $contact = ContactUpdate::get(); // homeupdate data
        $homeupdate = HomeUpdate::get(); // homeupdate data
        $teams = TeamAdded::get();  // Team data


        return view('frontend.pages.team', ['home' => $homeupdate, 'contactdata' => $contact,'team' => $teams,
    
    ]);
    }
    

    public function testimonial()
    {
        $contact = ContactUpdate::get(); // homeupdate data
        $homeupdate = HomeUpdate::get(); // homeupdate data
        $feedback = Feedback::get(); 

        return view('frontend.pages.testimonial', ['home' => $homeupdate, 'contactdata' => $contact, 'feedbacks' => $feedback, ]);
    }


    public function feature()
    {
        $contact = ContactUpdate::get(); // homeupdate data
        $homeupdate = HomeUpdate::get(); // homeupdate data
         $whyus = WhyUs::get();


        return view('frontend.pages.feature', ['home' => $homeupdate, 'contactdata' => $contact, 'whyus' => $whyus,]);
    }
    public function contact()
    {
        $homeupdate = HomeUpdate::get(); // homeupdate data
        $contact = ContactUpdate::get(); // homeupdate data


        return view('frontend.pages.contact', ['home' => $homeupdate,
            'contactdata' => $contact,
    ]);
    }

    public function blog() 
    {
        $contact = ContactUpdate::get(); // homeupdate data
        $homeupdate = HomeUpdate::get(); // homeupdate data
        $blogs = Blog::get(); // Blog data


        return view('frontend.pages.blog', ['home' => $homeupdate, 'contactdata' => $contact, 'blog' => $blogs,]);
    }
public function appointment() 
    {
        $contact = ContactUpdate::get(); // homeupdate data
        $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.appointment', ['home' => $homeupdate, 'contactdata' => $contact,]);
    }




}

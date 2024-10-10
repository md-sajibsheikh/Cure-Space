<?php

namespace App\Http\Controllers;

use App\Models\HomeUpdate;
use Illuminate\Http\Request;

class FrontendConteroller extends Controller
{
    public function about(){
         $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.about',['home' => $homeupdate,]);
    }

    public function service(){
        $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.service', ['home' => $homeupdate,]);
    }

    public function team()
    {
        $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.team', ['home' => $homeupdate,]);
    }
    

    public function testimonial()
    {
        $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.testimonial', ['home' => $homeupdate,]);
    }


    public function feature()
    {
        $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.feature', ['home' => $homeupdate,]);
    }
    public function contact()
    {
        $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.contact', ['home' => $homeupdate,]);
    }

    public function blog() 
    {
        $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.blog', ['home' => $homeupdate,]);
    }
public function appointment() 
    {
        $homeupdate = HomeUpdate::get(); // homeupdate data


        return view('frontend.pages.appointment', ['home' => $homeupdate,]);
    }




}

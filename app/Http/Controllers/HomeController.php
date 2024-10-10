<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\HomeUpdate;
use App\Models\Service;
use App\Models\TeamAdded;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $services = Service::get(); // Service data
        $teams = TeamAdded::get(); // Team data
        $blogs = Blog::get(); // Blog data
        $whyus = WhyUs::get(); // Whyus data
        $homeupdate = HomeUpdate::get(); // homeupdate data

        return view('frontend.pages.index', [
            'data' => $services,
            'team' => $teams,
            'blog' => $blogs,
            'whyus' => $whyus,
            'home' => $homeupdate,
            
        ]);
    }
   


}

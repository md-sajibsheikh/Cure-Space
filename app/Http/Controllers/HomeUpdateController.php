<?php

namespace App\Http\Controllers;

use App\Models\HomeUpdate;
use Illuminate\Http\Request;

class HomeUpdateController extends Controller
{
    public function navbarForm()
    {
        // Get the first record or an array with default values
        $navbar = HomeUpdate::first() ?: [];

        // Return the view with navbar data
        return view('backend.Pages.setting.homeupdate', ['NavbarView' => $navbar]);
    }


    public function datastore(Request $req)
    {
        // Collecting data into an array
        $data = [
            'site_name' => $req->site_name,
            'subtitle' => $req->subtitle,
            'title' => $req->title,
            'description' => $req->description,
        ];

        // Handle the logo image
        if ($req->hasFile('img')) {
            $image1 = $req->file('img');
            $name1 = $image1->getClientOriginalName();
            $image1Name = time() . "_" . $name1;
            $image1->move(public_path('/backend/assets/img/logo'), $image1Name);
            $data['img'] = '/backend/assets/img/logo/' . $image1Name;
        }

        // Handle the hero image 1
        if ($req->hasFile('heroimg_1')) {
            $image2 = $req->file('heroimg_1');
            $name2 = $image2->getClientOriginalName();
            $image2Name = time() . "_" . $name2;
            $image2->move(public_path('/backend/assets/img/hero1'), $image2Name);
            $data['heroimg_1'] = '/backend/assets/img/hero1/' . $image2Name;
        }

        // Handle the hero image 2
        if ($req->hasFile('heroimg_2')) {
            $image3 = $req->file('heroimg_2');
            $name3 = $image3->getClientOriginalName();
            $image3Name = time() . "_" . $name3;
            $image3->move(public_path('/backend/assets/img/hero2'), $image3Name);
            $data['heroimg_2'] = '/backend/assets/img/hero2/' . $image3Name;
        }

        // Insert or update the data
        $navbar = HomeUpdate::first();
        if ($navbar) {
            $navbar->update($data);
        } else {
            HomeUpdate::create($data);
        }

        return redirect()->back();
    }
}

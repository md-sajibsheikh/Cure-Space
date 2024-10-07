<?php

namespace App\Http\Controllers;

use App\Models\AboutUpdate;
use Illuminate\Http\Request;

class AboutUpdateController extends Controller
{
    public function aboutForm(){
    {
        $data = AboutUpdate::first() ?: [];

        return view('backend.Pages.setting.aboutupdate', ['about' => $data]);
    }

    }


    public function aboutstore(Request $req)
    {
        $data = [
            'address' => $req->address,
            'phone' => $req->phone,
            'phone1' => $req->phone1,
            'email' => $req->email,
            'email1' => $req->email1,
            'facebook' => $req->facebook,
            'linkedin' => $req->linkedin,
            'instagram' => $req->instagram,
            'contactus' => $req->contactus,
            'getintouch' => $req->getintouch,
        ];

       
        $datas = AboutUpdate::first();
        if ($datas) {
            $datas->update($data);

        } else {
            AboutUpdate::create($data);
        }

        return redirect()->back();
    }
}

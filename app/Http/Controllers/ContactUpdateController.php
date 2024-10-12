<?php

namespace App\Http\Controllers;

use App\Models\ContactUpdate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactUpdateController extends Controller
{

    public function contact()
    { {
            $data = ContactUpdate::first() ?: [];

            return view('backend.Pages.setting.contactupdate', ['about' => $data]);
        }
    }


    public function contactstore(Request $req)
    {
        $data = [
            'address' => $req->address,
            'phone' => $req->phone,
            'phone1' => $req->phone1,
            'email' => $req->email,
            'email1' => $req->email1,
            'facebook' => $req->facebook,
            'linkedin' => $req->linkedin,
            'twitter' => $req->twitter,
            'instagram' => $req->instagram,
            'contactus' => $req->contactus,
            'getintouch' => $req->getintouch,
        ];

        $datas = ContactUpdate::first();
        if ($datas) {
            $datas->update($data);
            
            Alert::success('success', 'About page Update successfully');

        } else {
            ContactUpdate::create($data);

            Alert::success('success', 'About page create successfully');

        }

        return redirect()->back();
    }

}

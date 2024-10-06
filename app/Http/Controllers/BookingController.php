<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    public function bookingData(Request $req)
    {

        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['phone'] = $req->phone;
        $data['gender'] = $req->gender;
        $data['date'] = $req->date;
        $data['department'] = $req->department;
        $data['comments'] = $req->comments;



        Booking::create($data);

        Alert::success('Success', 'Your booking is confirmed');

        return redirect()->back();
    }

    public function bookingList()
    {
       
        $data = Booking::get();

        return view('backend.pages.bookingList', ['Book' => $data]);
    }
}

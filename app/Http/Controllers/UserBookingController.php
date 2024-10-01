<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class UserBookingController extends Controller
{
    public function user_booking()
    {
        $data = Booking::get();
        return view('user.pages.booking', ['Book' => $data]);
    }
}




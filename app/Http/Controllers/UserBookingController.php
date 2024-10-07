<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBookingController extends Controller
{
    public function user_booking()
    {

        $data = Booking::where('user_id', Auth::id())->with('user')->get();  // Assuming you have a 'user_id' column in the 'bookings' table

        return view('user.pages.booking', ['Book' => $data]);
    }
}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\TeamAdded;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function userHome()
    {
        $user = Auth::user();
        $totalContacts = Contact::where('user_id', $user->id)->count();
        $totalMembers = TeamAdded::count();
        $totalBookings = Booking::where('user_id', $user->id)->count();
        $totalServices = Service::count();
        return view('user.pages.home', [
            'totalContacts' => $totalContacts,
            'totalMembers' => $totalMembers,
            'totalBookings' => $totalBookings,
            'totalServices' => $totalServices,
        ]);
    }
}

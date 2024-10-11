<?php



namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Service;
use App\Models\TeamAdded;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        $users = User::all();

        $totalContacts = Contact::count();
        $totalMembers = TeamAdded::count();
        $totalBookings = Booking::count();
        $totalServices = Service::count();

        return view('backend.pages.home', [
            'data' => $users,
            'totalContacts' => $totalContacts,
            'totalMembers' => $totalMembers,
            'totalBookings' => $totalBookings,
            'totalServices' => $totalServices,
        ]);
    }
}

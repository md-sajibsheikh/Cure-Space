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
// Fetching users data (if you need to pass user data to the view)
$users = User::all(); // Use `all()` to get all users

// Counting total records for Contact, TeamAdded, Booking, and Service
$totalContacts = Contact::count(); // Total contacts
$totalMembers = TeamAdded::count(); // Total team members
$totalBookings = Booking::count(); // Total bookings
$totalServices = Service::count(); // Total services

// Returning data to the view
return view('backend.pages.home', [
'data' => $users, // Passing users data
'totalContacts' => $totalContacts, // Passing total contacts
'totalMembers' => $totalMembers, // Passing total team members
'totalBookings' => $totalBookings, // Passing total bookings
'totalServices' => $totalServices, // Passing total services
]);
}
}
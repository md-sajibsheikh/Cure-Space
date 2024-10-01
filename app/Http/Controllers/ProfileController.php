<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();

        return view('backend.pages.profile.update', compact('user'));
    }

    public function update(Request $request)
{
    $user = Auth::user();

    // Handle profile image upload
    if (!is_dir(public_path('backend/assets/img/profile'))) {
        mkdir(public_path('backend/assets/img/profile'), 0777, true);
    }

    $imagePath = $user->img; 

    if ($request->img) {
        $image = $request->img;
        $name = $image->getClientOriginalName();
        $imageName = time() . "_" . $name;
        $imagePath = 'backend/assets/img/profile/' . $imageName;

        $image->move(public_path('backend/assets/img/profile'), $imageName);
    }

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'img' => $imagePath,
    ]);

    return back()->with('success', 'Profile updated successfully!');
}

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        

        if (!Hash::check($request->current_password, $user->password)) {

            Alert::error('Error', 'Current password is incorrect');
            return back();
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        Alert::success('Success', 'Password updated successfully!');
        return back();
    }


}

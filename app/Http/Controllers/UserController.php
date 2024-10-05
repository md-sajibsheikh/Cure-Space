<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function login()
    {
        return view('form.login');
    }

    public function signup()
    {
        return view('form.signup');
    }

    public function signupData(Request $req)
    {
        

        // Create directory if not exists
        $profileDir = public_path('form/img/profile/');
        if (!is_dir($profileDir)) {
            mkdir($profileDir, 0777, true);
        }

        // Prepare data
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'password' => bcrypt($req->password),
        ];

        // Check if image is uploaded
        if ($req->hasFile('img')) {
            $image = $req->file('img');
            $imageName = time() . "_" . $image->getClientOriginalName();
            $image->move($profileDir, $imageName);
            $data['img'] = 'form/img/profile/' . $imageName;
        } else {
            $data['img'] = 'form/img/profile/default.png';
        }

        // Store user in DB
        User::create($data);

        // Success message
        Alert::success('Success!', 'Your account has been created');
        return redirect()->route('login');
    }

    public function loginCheck(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            if (Auth::user()->is_admin == 1) {
                Alert::success('Success', 'You are login successfully');
                return redirect()->route('admin');
            } else {
                Alert::success('Success', 'You are login successfully');
                return redirect()->route('index');
            }
        } else {
            Alert::error('Oops!', 'Email or Password is incorrect');
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        Alert::success('Success', 'You are logout successfully');
        return redirect()->route('index');
    }
}

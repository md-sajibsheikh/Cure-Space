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
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email|',
            'phone' => 'required|numeric|digits_between:10,15',
            'password' => 'required|min:8|confirmed',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,gif', 
        ]);
       
        if (!is_dir(public_path('form/img/profile/'))) {
            mkdir(public_path('form/img/profile/'), 0777, true);
        }

        $data = [];

        if ($req->hasFile('img')) {
            $image = $req->file('img');
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'form/img/profile/' . $imageName;
            $image->move(public_path('form/img/profile/'), $imageName);
            $data['img'] = $imagePath;
        } else {
            $data['img'] = 'form/img/profile/default.png'; 
        }
        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['phone'] = $req->phone;
        $data['password'] = bcrypt($req->password); 
        
        User::create($data);
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

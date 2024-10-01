<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin(){
        $user=User::get();
        return view('backend.pages.home',['data'=>$user]);
    }
}

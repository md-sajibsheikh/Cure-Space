<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function add_choose()
    {
        return view('backend.pages.choose');
    }
}

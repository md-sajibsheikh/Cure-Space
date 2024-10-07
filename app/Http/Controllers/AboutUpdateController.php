<?php

namespace App\Http\Controllers;

use App\Models\AboutUpdate;
use Illuminate\Http\Request;

class AboutUpdateController extends Controller
{
    public function aboutForm(){
    {
        $data = AboutUpdate::first() ?: [];

        return view('backend.Pages.setting.aboutupdate', ['NavbarView' => $data]);
    }

    }
}

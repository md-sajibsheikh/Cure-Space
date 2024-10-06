<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    public function siteSettings()
    {
        return view('backend.Pages.site-setting.home');
    }
}

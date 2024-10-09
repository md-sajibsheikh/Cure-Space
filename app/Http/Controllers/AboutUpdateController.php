<?php
namespace App\Http\Controllers;

use App\Models\AboutUpdate;
use Illuminate\Http\Request;

class AboutUpdateController extends Controller
{
// Fetch the existing 'about' data to show on the page
public function about()
{
$data = AboutUpdate::first() ?: [];
return view('backend.Pages.setting.aboutupdate', ['about' => $data]);
}

// Store or update the 'about' data
public function aboutstore(Request $request)
{

        $data = [
            'experience' => $request->experience,
            'title' => $request->title,
            'description' => $request->description,
            'touch1' => $request->touch1,
            'touch2' => $request->touch2,
            'touch3' => $request->touch3,
        ];

// Check if an AboutUpdate record exists
$existingData = AboutUpdate::first();

// Update if exists, otherwise create a new record
if ($existingData) {
$existingData->update($data);
} else {
AboutUpdate::create($data);
}

// Redirect back with a success message
return redirect()->back();
}
}
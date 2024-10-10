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


        if (!is_dir(public_path('/backend/assets/img/about'))) {
            mkdir(public_path('/backend/assets/img/about'), 0777, true);
        }
        // Handle the logo image
        if ($request->hasFile('img')) {
            $image1 = $request->file('img');
            $name1 = $image1->getClientOriginalName();
            $image1Name = time() . "_" . $name1;
            $image1->move(public_path('/backend/assets/img/about'), $image1Name);
            $data['img'] = '/backend/assets/img/about/' . $image1Name;
        }


        if (!is_dir(public_path('/backend/assets/img/about/1'))) {
            mkdir(public_path('/backend/assets/img/about/1'), 0777, true);
        }
        // Handle the logo image
        if ($request->hasFile('img_hero')) {
            $image1 = $request->file('img_hero');
            $name1 = $image1->getClientOriginalName();
            $image1Name = time() . "_" . $name1;
            $image1->move(public_path('/backend/assets/img/about/1'), $image1Name);
            $data['img_hero'] = '/backend/assets/img/about/1/' . $image1Name;
        }

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
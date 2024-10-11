<?php
namespace App\Http\Controllers;

use App\Models\AboutUpdate;
use Illuminate\Http\Request;

class AboutUpdateController extends Controller
{
    public function about()
    {
        $data = AboutUpdate::first() ?: [];
        return view('backend.Pages.setting.aboutupdate', ['about' => $data]);
    }

    public function aboutstore(Request $request)
    {
        $request->validate([
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_hero' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'experience' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'touch1' => 'nullable|string',
            'touch2' => 'nullable|string',
            'touch3' => 'nullable|string',
        ]);

        $data = [
            'experience' => $request->experience,
            'title' => $request->title,
            'description' => $request->description,
            'touch1' => $request->touch1,
            'touch2' => $request->touch2,
            'touch3' => $request->touch3,
        ];

        $this->handleImageUpload($request, 'img', $data, '/backend/assets/img/about');
        $this->handleImageUpload($request, 'img_hero', $data, '/backend/assets/img/about/1');

        $existingData = AboutUpdate::first();
        if ($existingData) {
            $existingData->update($data);
        } else {
            AboutUpdate::create($data);
        }

        return redirect()->back()->with('success', 'About information updated successfully!');
    }

    private function handleImageUpload(Request $request, $inputName, &$data, $directory)
    {
        if ($request->hasFile($inputName)) {
            if (!is_dir(public_path($directory))) {
                mkdir(public_path($directory), 0777, true);
            }
            $image = $request->file($inputName);
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path($directory), $imageName);
            $data[$inputName] = $directory . '/' . $imageName;
        }
    }
}

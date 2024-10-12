<?php

namespace App\Http\Controllers;

use App\Models\WhyUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function add_choose()
    {
        return view('backend.pages.whyus.add');
    }

    public function choose_store(Request $req)
    {
        if (!is_dir(public_path('backend/assets/img/whyus'))) {
            mkdir(public_path('backend/assets/img/whyus'), 0777, true);
        }
        $data = [];
        if ($req->hasFile('img')) {
            $image = $req->file('img');
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'backend/assets/img/whyus/' . $imageName;
            $image->move(public_path('backend/assets/img/whyus'), $imageName);
            $data['img'] = $imagePath;
        }
        $data['title'] = $req->title;
        $data['subtitle'] = $req->subtitle;
        WhyUs::create($data);
        return redirect()->route('all-choose');
    }

    public function all_choose()
    {
        $choose = WhyUs::orderBy('created_at', 'desc')->get();

        return view('backend.pages.whyus.all-choose', ['datas' => $choose]);
    }


    public function edit($id)
    {
        $whyus = WhyUs::find($id);

        if (!$whyus) {
            return redirect()->back()->with('error', 'Record not found.');
        }
        return view('backend.pages.whyus.edit', ['data' => $whyus]);
    }
    public function update(Request $req, $id)
    {
        $whyus = WhyUs::find($id);
        if (!$whyus) {
            return redirect()->back()->with('error', 'Record not found.');
        }
        $data = [];
        if ($req->img) {
            $image = $req->img;
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'backend/assets/img/whyus/' . $imageName;
            $image->move(public_path('backend/assets/img/whyus'), $imageName);
            $data['img'] = $imagePath;
        }
        $data['title'] = $req->title;
        $data['subtitle'] = $req->subtitle;
        $whyus->update($data);
        return redirect()->route('all-choose');
    }
    public function delete($id)
    {
        $whyus = WhyUs::find($id);
        if ($whyus) {
            $whyus->delete();
        } else {
            return redirect()->back()->with('error', 'Record not found.');
        }
        return redirect()->route('all-choose')->with('success', 'Record deleted successfully.');
    }
}

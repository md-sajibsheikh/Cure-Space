<?php

namespace App\Http\Controllers;

use App\Models\TeamAdded;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    public function add_team()
    {
        return view('backend.pages.add-team');
    }
    public function team_added(Request $req)
    {
        if (!is_dir(public_path('backend/assets/img/team'))) {
            mkdir(public_path('backend/assets/img/team'), 0777, true);
        }
        $imagePath = null;
        if ($req->hasFile('img')) {
            $image = $req->file('img');
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'backend/assets/img/team/' . $imageName;
            $image->move(public_path('backend/assets/img/team'), $imageName);
            $data['img'] = $imagePath;
        }
        $data['full_name'] = $req->name;
        $data['facebook'] = $req->facebook;
        $data['twitter'] = $req->twitter;
        $data['instagram'] = $req->instagram;
        $data['linkedin'] = $req->linkedin;
        $data['services'] = $req->services;
        TeamAdded::create($data);
        Alert::success('Thank you', 'Team member added successfully');
        return redirect()->route('team.list');
    }
    public function team_delete()
    {
        $teamMember = TeamAdded::first();
        if ($teamMember) {
            if (!empty($teamMember->img)) {
                $imagePath = public_path($teamMember->img);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $teamMember->delete();
            Alert::success('Success', 'Team member deleted successfully');
        } else {
            Alert::error('Error', 'Team member not found');
        }
        return redirect()->route('team.list');
    }

    public function team_list()
    {
        $team = TeamAdded::orderBy('created_at', 'desc')->get();
        return view('backend.pages.team-list', ['data' => $team]);
    }

    public function team_frondtend()
    {
        $team = TeamAdded::get();
        return view('frontend.pages.index', ['data' => $team]);
    }
}

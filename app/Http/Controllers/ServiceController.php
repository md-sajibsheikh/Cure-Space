<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function add_service()
    {
        return view('backend.pages.services.add-service');
    }

    public function service_list()
    {
        $data = Service::get();
        return view('backend.pages.services.service-list', ['list' => $data]);
    }

    public function service_store(Request $req)
    {
        if (!is_dir(public_path('backend/assets/img/service'))) {
            mkdir(public_path('backend/assets/img/service'), 0777, true);
        }

        $imagePath = null;
        $image = $req->file('img');
        if ($image) {
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'backend/assets/img/service/' . $imageName;
            $image->move(public_path('backend/assets/img/service'), $imageName);
        }

        $data = [
            'service_name' => $req->service_name,
            'title' => $req->title,
            'img' => $imagePath,
        ];

        Service::create($data);

        Alert::success('Success', 'Your service added successfully');
        return redirect()->route('service.list');
    }

    public function edit($id)
    {
        $service = Service::where('id', $id)->first();

        return view('backend.pages.services.edit-service', ['service' => $service]);
    }

    public function service_update(Request $req, $id)
    {
        $service = Service::find($id);

        if ($service) {
            if ($req->hasFile('img')) {
                if ($service->img && file_exists(public_path($service->img))) {
                    unlink(public_path($service->img));
                }
                $image = $req->file('img');
                $name = $image->getClientOriginalName();
                $imageName = time() . "_" . $name;
                $imagePath = 'backend/assets/img/service/' . $imageName;
                $image->move(public_path('backend/assets/img/service'), $imageName);
                $service->img = $imagePath;
            }
            $service->service_name = $req->service_name;
            $service->title = $req->title;
            $service->save();
            Alert::success('Success', 'Service updated successfully');
            return redirect()->route('service.list');
        } else {
            return redirect()->route('service.list');
        }
    }
    public function delete($id)
    {
        $service = Service::find($id);

        if ($service) {
            if ($service->img && file_exists(public_path($service->img))) {
                unlink(public_path($service->img));
            }
            $service->delete();
            Alert::success('Success', 'Service deleted successfully');
            return redirect()->back();
        } else {
            Alert::error('Error', 'Service not found');
            return redirect()->back();
        }
    }
}

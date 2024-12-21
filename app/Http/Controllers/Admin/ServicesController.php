<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;
use App\Models\ProfileModel;
use App\Models\ServicesModel;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $services = ServicesModel::all();
        return view('admin.services.services',compact('services'));
    }
    public function add(Request $request, $id = null)
    {
        $service = null;
        if ($id) {
            $service = ServicesModel::findOrFail($id);
        }
        return view('admin.services.add-services', compact('service'));
    }
    public function store(ServicesRequest $request){
        $validatedData = $request->validated();
        if ($validatedData) {
            $service = new ServicesModel();
            $service->title = $validatedData['service_title'];
            $service->description = $validatedData['service_description'];
            if ($request->hasFile('service_icon')) {
                $image = $request->file('service_icon');
                $path = 'images/services';
                $imagePath = $this->uploadImage($image,$path);
                $service->icon = $imagePath;    
            }

            if ($service->save()) {
                return redirect()->route('admin.services')->with('success', 'Service data added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
    }

    public function update(Request $request, $id = null){
        $service = ServicesModel::findorfail($request->id);
        if ($service) {
            $service->title = $request->service_title;
            $service->description = $request['service_description'];
            if ($request->hasFile('service_icon')) {
                $image = $request->file('service_icon');
                $path = 'images/services';
                $imagePath = $this->uploadImage($image, $path);
                $service->icon = $imagePath;
            }
            if ($service->save()) {
                return redirect()->route('admin.services')->with('success', 'Service data updated successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
    }
    public function delete(Request $request,$id=null) {
        $service = ServicesModel::findorfail($id);
        if ($service->delete()) {
            return redirect()->route('admin.services')->with('success', 'Service deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function uploadImage($image, $path)
    {
        // Get the original name of the image (e.g., icon.jpg)
        $name = $image->getClientOriginalName();
    
        // Define the full path to the directory where you want to store the image
        $destinationPath = public_path($path);
    
        // Ensure the directory exists, create it if necessary
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);  // Create directories if they don't exist
        }
    
        // Move the uploaded image to the target directory
        $image->move($destinationPath, $name);
    
        // Return the relative path of the image, which can be used for URL generation
        return $path . '/' . $name;
    }


}

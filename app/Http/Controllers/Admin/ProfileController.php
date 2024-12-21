<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\ProfileModel;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile = User::all();
        return view('admin.profile.profile',compact('profile'));
    }
    public function add(Request $request,$id = null)
    {
        $profile = null;
        if ($id) {
            $profile = User::findOrFail($id);
        }
        return view('admin.profile.add-profile',compact('profile'));
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        if($id){
            $profile = User::find($id);
            if($profile->delete()){
                return redirect()->back()->with('success','Profile deleted successfully');
            }else{
                return redirect()->back()->with('error','Profile does not exist');
            }
        }
    }
    public function store(ProfileRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = 'images/profile';
            $imagePath = $this->uploadImage($image, $path);
            $validatedData['image'] = $imagePath;
        }
        if ($validatedData) {
            $profile = User::create($validatedData);
            if ($profile) {
                return redirect()->route('admin.profile')->with('success', 'Profile data added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Data is not valid');
        }
    }

    public function update(Request $request,$id=null){
        $profile = User::findorfail($request->id);
        if ($profile) {
            $profile->name = $request->name;
            $profile->phone = $request->phone;
            $profile->address = $request->address;
            $profile->email = $request->email;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = 'images/profile';
                $imagePath = $this->uploadImage($image, $path);
                $profile->image = $imagePath;
            }
            if ($profile->save()) {
                return redirect()->route('admin.profile')->with('success', 'Profile data updated successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Counter does not exist');
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

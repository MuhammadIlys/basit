<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\AboutModel;
use App\Models\ProfileModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutModel::all();
        $profile = ProfileModel::first();
        $data = [
            'about' => $about,
        ];
        return view('admin.about.about', compact('data'));
    }

    public function add(Request $request, $id = null)
    {
        $about = null;
        if ($id) {
            $about = AboutModel::findOrFail($id);
        }
        return view('admin.about.add-about', compact('about'));
    }

    public function update(Request $request, $id = null)
    {
        $about = AboutModel::findorfail($request->id);
        if ($about) {
            $about->title = $request->title;
            $about->intro = $request['intro'];
            $about->title = $request['title'];
            $about->full_name = $request['name'];
            $about->email = $request['email'];
            if($request['dob']){
                $about->date_of_birth = $request['dob'];
            }
            $about->address = $request['address'];
            $about->zip_code = $request['zip'];
            $about->phone = $request['phone'];
            $about->description = $request['description'];
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = 'images/about';
                $imagePath = $this->uploadImage($image, $path);
                $about->image = $imagePath;
            }
            if ($about->save()) {
                return redirect()->route('admin.about')->with('success', 'About data updated successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'About does not exist');
        }
    }

    public function delete(Request $request){
        $id = $request->id;
        if($id){
            $counter = AboutModel::find($id);
            if($counter->delete()){
                return redirect()->back()->with('success','About deleted successfully');
            }else{
                return redirect()->back()->with('error','About does not exist');
            }
        }
    }

    public function store(AboutRequest $request)
    {
        $validatedData = $request->validated();
        if ($validatedData) {
            $about = new AboutModel();
            $about->intro = $validatedData['intro'];
            $about->title = $validatedData['title'];
            $about->full_name = $validatedData['name'];
            $about->email = $validatedData['email'];
            $about->date_of_birth = $validatedData['dob'];
            $about->address = $validatedData['address'];
            $about->zip_code = $validatedData['zip'];
            $about->phone = $validatedData['phone'];
            $about->description = $validatedData['description'];

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = 'images/about';
                $imagePath = $this->uploadImage($image, $path);
                $about->image = $imagePath;
            }
            if ($about->save()) {
                return redirect()->route('admin.about')->with('success', 'About data added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
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

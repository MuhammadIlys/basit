<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileModel;
use App\Models\ProjectsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
{
    public function index(){
        $project = ProjectsModel::first();
        return view('admin.projects.projects',compact('project'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',             // Title is required, string, max length 255
            'category' => 'required|string|max:255',          // Category is required, string, max length 255
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Thumbnail is required and must be an image with certain formats and size constraints
            'description' => 'required|string|max:1000',      // Description is required, string, max length 1000
            'longdescription' => 'required|string',           // Long description is required (Summernote content can be stored as HTML)
        ]);
        if($validated){
            $project = new ProjectsModel();
            $project->title = $validated['title'];
            $project->category = $validated['category'];
            $project->description = $validated['description'];
            $project->long_description = $validated['longdescription'];
            $project->user = Auth::user()->id;

            if ($request->hasFile('thumbnail')) {
                $image = $request->file('thumbnail');
                $path = 'images/projects';
                $imagePath = $this->uploadImage($image,$path);
                $project->thumbnail=$imagePath;
            }

            if($project->save()){
                return redirect()->back()->with('success','Project data added successfully');
            }else{
                return redirect()->back()->with('error','Something went wrong');
            }


        }else{
            return redirect()->back()->with('error','Data is not valid');
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

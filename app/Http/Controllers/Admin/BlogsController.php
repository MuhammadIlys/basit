<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\BlogModel;
use App\Models\ProfileModel;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        $blogs = BlogModel::all();
        return view('admin.blogs.blogs',compact('blogs'));
    }
    public function add(Request $request, $id = null)
    {
        $blog = null;
        if ($id) {
            $blog = BlogModel::findOrFail($id);
        }
        return view('admin.blogs.add-blogs', compact('blog'));
    }

    public function store(BlogRequest $request){
        $validatedData = $request->validated();
        if($validatedData){
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = 'images/blogs';
                $imagePath = $this->uploadImage($image,$path);
                $validatedData['image'] = $imagePath;
            }
            $testimonial = BlogModel::create($validatedData);
            if($testimonial->save()){
                return redirect()->route('admin.blogs')->with('success','Blog data added successfully');
            }else{
                return redirect()->back()->with('error','Something went wrong');
            }
        }else{
            return redirect()->back()->with('error','Data is not valid');
        }
    }

    public function update(Request $request, $id = null){
        $blog = BlogModel::findorfail($request->id);
        if ($blog) {
            $blog->title = $request['title'];
            if($request->status){
                $blog->status = $request['status'];
            }
            if($request->long_desc){
                $blog->long_desc = $request['long_desc'];
            }
            $blog->category = $request['category'];

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = 'images/blogs';
                $imagePath = $this->uploadImage($image,$path);
                $blog['image'] = $imagePath;
            }
            if ($blog->save()) {
                return redirect()->route('admin.blogs')->with('success', 'Blog data updated successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
    }

    public function delete(Request $request,$id=null) {
        $blog = BlogModel::findorfail($id);
        if ($blog->delete()) {
            return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully');
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

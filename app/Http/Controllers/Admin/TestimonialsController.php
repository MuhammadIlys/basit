<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\ProfileModel;
use App\Models\TestimonialModel;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index(){
        $testimonials = TestimonialModel::all();
        return view('admin.testimonials.testimonials',compact('testimonials'));
    }
    
    public function add(Request $request, $id = null)
    {
        $testimonial = null;
        if ($id) {
            $testimonial = TestimonialModel::findOrFail($id);
        }
        return view('admin.testimonials.add-testimonial', compact('testimonial'));
    }

    public function store(TestimonialRequest $request){
        $validatedData = $request->validated();
        if($validatedData){
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = 'images/testimonials';
                $imagePath = $this->uploadImage($image,$path);
                $validatedData['image'] = $imagePath;
            }
            $testimonial = TestimonialModel::create($validatedData);
            if($testimonial->save()){
                return redirect()->route('admin.testimonials')->with('success','Testimonial data added successfully');
            }else{
                return redirect()->back()->with('error','Something went wrong');
            }
        }else{
            return redirect()->back()->with('error','Data is not valid');
        }
    }

    public function update(Request $request, $id = null){
        $testimonial = TestimonialModel::findorfail($request->id);
        if ($testimonial) {
            $testimonial->name = $request['name'];
            $testimonial->profession = $request['profession'];
            $testimonial->message = $request['message'];
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = 'images/testimonials';
                $imagePath = $this->uploadImage($image,$path);
                $testimonial['image'] = $imagePath;
            }
            if ($testimonial->save()) {
                return redirect()->route('admin.testimonials')->with('success', 'Testimonial data updated successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
    }
    public function delete(Request $request,$id=null) {
        $service = TestimonialModel::findorfail($id);
        if ($service->delete()) {
            return redirect()->route('admin.testimonials')->with('success', 'Testimonial deleted successfully');
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

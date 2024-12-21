<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\ProfileModel;
use App\Models\SliderModel;
use Illuminate\Http\Request;

class HeaderSliderController extends Controller
{
    public function index()
    {
        $sliders = SliderModel::all();
        return view('admin.headerslider.slider', compact('sliders'));
    }
    public function add(Request $request, $id = null)
    {
        $slider = null;
        if ($id) {
            $slider = SliderModel::findOrFail($id);
        }
        return view('admin.headerslider.addslider', compact('slider'));
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $slider = SliderModel::find($id);
            if ($slider->delete()) {
                return redirect()->back()->with('success', 'Slider deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Slider does not exist');
            }
        }
    }
    public function store(SliderRequest $request)
    {
        $validatedData = $request->validated();
        $slider = new SliderModel();
        $slider->title = $validatedData['title'];
        $slider->subtitle = $validatedData['subtitle'];
        $slider->hiretext = $validatedData['hirebutton'];
        $slider->hirelink = $validatedData['hirebuttonlink'];
        $slider->cvtext = $validatedData['cvbutton'];
        $slider->cvlink = $validatedData['cvbuttonlink'];
        if ($request->hasFile('sliderimage')) {
            $image = $request->file('sliderimage');
            $path = 'images/slider';
            $imagePath = $this->uploadImage($image, $path);
            $slider->image = $imagePath;
        }
        if ($slider->save()) {
            return redirect()->route('admin.slider.index')->with('success', 'Slider data added successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, $id = null)
    {
        $slider = SliderModel::findorfail($request->id);
        if ($slider) {
            $slider->title = $request->title;
            $slider->subtitle = $request->subtitle;
            $slider->hiretext = $request->hirebutton;
            $slider->hirelink = $request->hirebuttonlink;
            $slider->cvtext = $request->cvbutton;
            $slider->cvlink = $request->cvbuttonlink;
            if ($request->hasFile('sliderimage')) {
                $image = $request->file('sliderimage');
                $path = 'images/slider';
                $imagePath = $this->uploadImage($image, $path);
                $slider->image = $imagePath;
            }
            if ($slider->save()) {
                return redirect()->route('admin.slider.index')->with('success', 'Slider data updated successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Slider does not exist');
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

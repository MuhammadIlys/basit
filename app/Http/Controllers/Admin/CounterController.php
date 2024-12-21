<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CounterRequest;
use App\Models\Counter;
use App\Models\ProfileModel;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        $counters = Counter::all();
        $data = [
            'counters' => $counters,
        ];
        return view('admin.counter.counter', compact('data'));
    }
    public function add(Request $request,$id = null)
    {
        $counter = null;
        if ($id) {
            $counter = Counter::findOrFail($id);
        }
        return view('admin.counter.add-counter',compact('counter'));
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        if($id){
            $counter = Counter::find($id);
            if($counter->delete()){
                return redirect()->back()->with('success','Counter deleted successfully');
            }else{
                return redirect()->back()->with('error','Counter does not exist');
            }
        }
    }
    public function store(CounterRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $path = 'images/counter';
            $imagePath = $this->uploadImage($image, $path);
            $validatedData['icon'] = $imagePath;
        }
        if ($validatedData) {
            $counter = Counter::create($validatedData);
            if ($counter) {
                return redirect()->route('admin.counter')->with('success', 'Counter data added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Data is not valid');
        }
    }

    public function update(Request $request,$id=null){
        $counter = Counter::findorfail($request->id);
        if ($counter) {
            $counter->title = $request->title;
            $counter->number = $request->number;
            if ($request->hasFile('icon')) {
                $image = $request->file('icon');
                $path = 'images/counter';
                $imagePath = $this->uploadImage($image, $path);
                $counter->icon = $imagePath;
            }
            if ($counter->save()) {
                return redirect()->route('admin.counter')->with('success', 'Counter data updated successfully');
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HiremeRequest;
use App\Models\HireModel;
use App\Models\ProfileModel;
use Illuminate\Http\Request;

class HireMeController extends Controller
{
    public function index(){
        $hire = HireModel::first();
        return view('admin.hireme.hireme',compact('hire'));
    }
    
    public function add(Request $request, $id = null)
    {
        $hire = null;
        if ($id) {
            $hire = HireModel::findOrFail($id);
        }
        return view('admin.hireme.add-hireme', compact('hire'));
    }

    public function store(HiremeRequest $request){
        $validatedData = $request->validated();
        if($validatedData){
            $hireme = HireModel::create($validatedData);
            if($hireme->save()){
                return redirect()->route('admin.hireme')->with('success','Hire me data added successfully');
            }else{
                return redirect()->back()->with('error','Something went wrong');
            }
        }else{
            return redirect()->back()->with('error','Data is not valid');
        }
    }

    public function update(Request $request, $id = null){
        $hire = HireModel::findorfail($request->id);
        if ($hire) {
            $hire->title = $request['title'];
            $hire->description = $request['description'];
            if ($hire->save()) {
                return redirect()->route('admin.hireme')->with('success', 'Hire data updated successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
    }
    public function delete(Request $request,$id=null) {
        $service = HireModel::findorfail($id);
        if ($service->delete()) {
            return redirect()->route('admin.hireme')->with('success', 'Hire data deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}

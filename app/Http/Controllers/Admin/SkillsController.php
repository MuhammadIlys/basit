<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillsRequest;
use App\Models\ProfileModel;
use App\Models\SkillsModal;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = SkillsModal::all();
        return view('admin.skills.skills', compact('skills'));
    }
    public function add(Request $request, $id = null)
    {
        $skill = null;
        if ($id) {
            $skill = SkillsModal::findOrFail($id);
        }
        return view('admin.skills.add-skills', compact('skill'));
    }
    
    public function store(SkillsRequest $request)
    {
        $validatedData = $request->validated();
        if ($validatedData) {
            $skills = new SkillsModal();
            $skills->title = $validatedData['skill_title'];
            $skills->number = $validatedData['skill_number'];
            $skills->progress = $validatedData['skill_progress'];
            if ($skills->save()) {
                return redirect()->route('admin.skills')->with('success', 'Skills added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Data is not valid');
        }
    }
    public function update(Request $request, $id = null)
    {
        $skill = SkillsModal::findorfail($id);
        $skill->title = $request['skill_title'];
        $skill->number = $request['skill_number'];
        $skill->progress = $request['skill_progress'];
        if ($skill->save()) {
            return redirect()->route('admin.skills')->with('success', 'Skills added successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    
    public function delete(Request $request,$id=null) {
        $skill = SkillsModal::findorfail($id);
        if ($skill->delete()) {
            return redirect()->route('admin.skills')->with('success', 'Skills deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use App\Models\BlogModel;
use App\Models\Counter;
use App\Models\HireModel;
use App\Models\ProfileModel;
use App\Models\ProjectsModel;
use App\Models\ServicesModel;
use App\Models\SkillsModal;
use App\Models\SliderModel;
use App\Models\TestimonialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        $counters = Counter::all();
        $about = AboutModel::first();
        $projects = ProjectsModel::all();
        $skills = SkillsModal::all();
        $services = ServicesModel::all();
        $hire = HireModel::first();
        $slider = SliderModel::all();
        $testimonials = TestimonialModel::all();
        $blogs = BlogModel::all();
        $profile = Auth::user();
        return view('frontend.home',compact('counters','about','projects','skills','services','hire','slider','testimonials','blogs','profile'));
    }
    public function projectdetails(Request $request, $id=null){
        $project = ProjectsModel::findorfail($id);
        return view('admin.projects.projectdetails',compact('project'));
    }
    public function blogdetails(Request $request, $id=null){
        $blog = BlogModel::findorfail($id);
        $blogs = BlogModel::where('category',$blog->category)->get();
        return view('admin.blogs.blogdetails',compact('blog','blogs'));
    }
}

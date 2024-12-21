<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.index');
    }

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        if($validatedData){
            try {
                $validatedData['password'] = Hash::make($validatedData['password']);
                $validatedData['role'] = 'admin';
                $user = User::create($validatedData);
                Auth::login($user);
                return redirect()->route('admin.admin')->with('success', 'User created successfully');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    
}

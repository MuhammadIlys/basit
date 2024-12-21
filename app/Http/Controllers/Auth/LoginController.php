<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $validatedData = $request->validated();
        if($validatedData){
            if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
                return redirect()->route('admin.admin')->with('success', 'You are logged in!');
            } else {
                // Authentication failed
                return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
            }
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
}

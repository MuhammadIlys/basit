<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\ProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactMeController extends Controller
{
    public function index(Request $request){
        $email = config('mail.from.address');
        Mail::to($email)->send(new ContactMail($request->name, $request->email, $request->subject,$request->message));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}

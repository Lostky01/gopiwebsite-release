<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    public function index()
    {
        return view('contactus');
    }

    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to('vndrdcan@gmail.com')->send(new SendEmail($data));

        return redirect()->back()->with('message', 'Email sent successfully!');
    }
}

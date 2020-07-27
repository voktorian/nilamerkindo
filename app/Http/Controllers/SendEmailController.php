<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index(){
        return view('send_email');
    }

    function send(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mobilephone' => 'required',
            'company' => 'required',
            'comment' => 'required'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'mobilephone' => $request->mobilephone,
            'company' => $request->company,
            'comment' => $request->comment
        );
        
        Mail::to('clara.adelia72@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}

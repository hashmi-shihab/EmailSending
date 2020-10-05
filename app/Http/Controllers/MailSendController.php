<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;

class MailSendController extends Controller
{
    public function create()
    {
        return view('emails.create');
    }

    public function sendMail(Request $request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'contact_no'=> $request->contact_no,
            'body'=> $request->body,
        ];

        \Mail::to('hashmicse@gmail.com')->send(new SendMail($details));
    }
}

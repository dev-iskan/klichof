<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|string',
            'lname' => 'required|string',
            'organization' => 'required|string',
            'phone' => 'required|string|digits:12',
            'email' => 'required|string|email',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        Mail::to([
            'klichofgroup@gmail.com'
        ])->send(new \App\Mail\SendMail($request->all()));

        return back()->with('message', 'Сообщение успешно отправлено!');
    }
}

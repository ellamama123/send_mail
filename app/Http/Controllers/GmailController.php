<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class GmailController extends Controller
{
    public function index()
    {
        return view('mail.test');
    }
    public function sendmail(Request $request)
    {
        $details = [
            'title' => $request->name,
            'body' => $request->content
        ];
        Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));
        return view('mail.test');
        
    }
}

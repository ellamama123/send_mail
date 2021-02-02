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
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
            'title' => 'required'
        ]);
        $details = [
            'name' => $request->name,
            'content' => $request->content,
            'title' => $request->title
        ];
        Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));
        return back()->with('success', 'Cảm ơn đã gửi tin');
        
    }
}

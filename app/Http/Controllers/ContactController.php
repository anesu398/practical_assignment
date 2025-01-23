<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactMessage::create($request->all());

        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }
}

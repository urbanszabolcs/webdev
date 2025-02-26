<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        Mail::raw("Név: {$request->name}\nEmail: {$request->email}\nÜzenet: {$request->message}", function ($message) {
            $message->to('urbanszabolcs44@gmail.com')
                ->subject('Új kapcsolatfelvételi üzenet');
        });



        return back()->with('success', 'Üzeneted sikeresen elküldve!');
    }
}

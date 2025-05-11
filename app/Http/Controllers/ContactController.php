<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        Mail::to('knalsonmusic@gmail.com')->send(new ContactMail($request->validated()));
        // return back()->with('success', 'Votre message a été envoyé avec succès.');
        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}

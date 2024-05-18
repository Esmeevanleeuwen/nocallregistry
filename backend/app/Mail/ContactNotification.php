<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        $form = new ContactForm();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->message = $request->message;
        $form->save();

        // Stuur een e-mail notificatie (optioneel)
        Mail::to('admin@no-callregistry.com')->send(new ContactNotification($form));

        return response()->json(['message' => 'Contact form submitted successfully'], 200);
    }
}



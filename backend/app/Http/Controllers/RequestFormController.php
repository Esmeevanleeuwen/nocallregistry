<?php
// app/Http/Controllers/RequestFormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestNotification; // Zorg ervoor dat dit correct is

class RequestFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        $form = new RequestForm();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->message = $request->message;
        $form->save();

        // Mail::to('admin@no-callregistry.com')->send(new RequestNotification($form));

        return response()->json(['message' => 'Request form submitted successfully'], 200);
    }
}



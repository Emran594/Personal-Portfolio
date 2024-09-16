<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'services' => 'required',
            'message' => 'required|min:10',
        ]);

        // Store the form data into the database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'services' => $request->services,
            'message' => $request->message,
        ]);

        // Optionally, send an email to the site admin or the user
        // Mail::send('emails.contact', [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'services' => $request->services,
        //     'message' => $request->message,
        // ], function($mail) use ($request) {
        //     $mail->to('emranhasans594@gmail.com')
        //         ->subject('New Contact Message from ' . $request->name);
        // });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

}

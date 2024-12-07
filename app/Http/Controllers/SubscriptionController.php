<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email',
        ]);

        // Check for duplicate email
        if (Subscription::where('email', $request->email)->exists()) {
            return redirect()->back()->with('error', 'This email is already subscribed!');
        }

        // Store the email in the database
        Subscription::create(['email' => $request->email]);

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}

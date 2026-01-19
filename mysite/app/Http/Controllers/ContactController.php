<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact page
     */
    public function show()
    {
        return view('contact.show');
    }

    /**
     * Handle contact form submission
     */
    public function send(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically:
        // 1. Send an email using Mail::send()
        // 2. Save to database
        // 3. Send notification
        
        // For now, we'll just redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }
}
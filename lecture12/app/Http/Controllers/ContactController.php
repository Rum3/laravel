<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'file' => 'file|mimes:pdf,doc,docx|max:2048',
        ]);


        // Create a new record in the database, including the file name
        $contact = Contact::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);

        return redirect()->back()->with('success', 'Your message was sent successfully!');
    }
}

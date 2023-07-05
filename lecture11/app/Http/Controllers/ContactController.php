<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Валидация на данните от формата
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Създаване на нов запис в базата данни
        $contact = Contact::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);

        // Връщане на отговор или пренасочване към друга страница
        return redirect()->back()->with('success', 'Вашето съобщение беше изпратено успешно!');
    }
}

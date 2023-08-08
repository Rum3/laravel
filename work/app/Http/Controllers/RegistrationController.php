<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        // Валидация на данните от формата за регистрация
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Създаване на нов потребител
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return response()->json(['success' => true, 'message' => 'Регистрацията е успешна!']);
    }

    public function list()
    {
        $users = User::all();
        return response()->json(['users' => $users]);
    }
}


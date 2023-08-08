<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        $user = new Student();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->gender = $request->input('gender'); // Записване на стойността на полето "gender"
        $user->is_subscribed = $request->input('is_subscribed');
    
        $user->save();
    
        return response()->json(['message' => 'Регистрацията е успешна']);
    }

    public function edit($id)
{
    $user = Student::find($id);
    return view('edit', ['user' => $user]);
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    $user = Student::find($id);
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = bcrypt($validatedData['password']);
    $user->gender = $request->input('gender');
    $user->is_subscribed = $request->input('is_subscribed');

    $user->save();

    return response()->json(['message' => 'Данните на потребителя са актуализирани']);
}

    public function list()
    {
        $users = Student::all();
        return response()->json(['users' => $users]);
    }
}

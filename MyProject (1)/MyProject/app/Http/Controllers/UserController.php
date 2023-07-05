<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


public function showRegistrationForm() {

        return view('register');
    }

public function register(Request $request) {
        $request->validate([
            'name'=>'required',
            'password'=>'required',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'password'=> Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect('/')->with('message', "Welcome to our site!");
      }

 public function showLoginForm() {

        return view('login');
    }


public function login(Request $request) {

        $userFields = $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(auth()->attempt($userFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome!');
        } else{

        return back()->withErrors(['name' => 'Invalid Credentials'])->onlyInput('name');
        }
    }


public function logout(Request $request) {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Успешно излизане!');
    }
}

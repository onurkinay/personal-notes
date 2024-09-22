<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {

        $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);

        if (!Auth::attempt($validatedAttributes)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credidentail bla bla'
            ]);
        }

        request()->session()->regenerate();
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }

}

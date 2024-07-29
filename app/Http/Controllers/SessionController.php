<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // attempt to login the user
        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
        }
        // regenerate the session token
        request()->session()->regenerateToken();
        // redirect
        return redirect('/jobs');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}

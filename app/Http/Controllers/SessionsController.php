<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $attrs = $request->validate([
            'email' => 'required|exists:users,email|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($attrs)) {
            // session()->session_regenerate_id();
            return redirect('/')->with('success', 'Log in success');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials not be verified'
        ]);

        return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credentials not be verified']);
    }
}

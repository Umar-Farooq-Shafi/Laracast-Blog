<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $attribs = $request->validate([
            'name' => 'required',
            // 'username' => 'required|unique:users,username',
            'username' => ['required', Rule::unique('users' ,'username')],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required'
        ]);

        // $attribs["password"] = bcrypt($attribs["password"]);
        // session()->flash('success', 'Your account has been created');

        User::create($attribs);

        return redirect('/')->with('success', 'Your account has been created');
    }
}

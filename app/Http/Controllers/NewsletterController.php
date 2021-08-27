<?php

namespace App\Http\Controllers;

use App\Service\Newsletter;
use Illuminate\Http\Request;
use \Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter, Request $request)
    {
        $request->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));

            return redirect('/')->with('success', 'You are now signed up for our newsletter.');
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added in our newsletter'
            ]);
        }
    }
}

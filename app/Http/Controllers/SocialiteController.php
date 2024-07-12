<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if the user already exists in your database
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                // Login the existing user
                Auth::login($existingUser);
            } else {
                // Create a new user in your database
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make(rand()),
                ]);

                // Login the new user
                Auth::login($newUser);
            }

            // Redirect to a dashboard or a specified route
            return redirect()->route('dashboard');

        } catch (\Exception $e) {
            // Handle exceptions if any
            return redirect()->route('login')->with('error', 'Login via Google gagal. Silakan coba lagi.');
}
}
}


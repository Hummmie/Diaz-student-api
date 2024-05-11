<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user record
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Optionally, you can log in the user here

        // Redirect the user or return a response
        return redirect()->route('home')->with('success', 'User registered successfully!');
    }
}

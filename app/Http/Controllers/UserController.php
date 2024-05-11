<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }
    
    // Display a listing of the resource with filters.
    public function index(Request $request)
    {
        $query = User::query();

        // Filter by specified fields
        if ($request->has('firstname')) {
            $query->where('firstname', $request->input('firstname'));
        }
        if ($request->has('lastname')) {
            $query->where('lastname', $request->input('lastname'));
        }
        // Add more filters for other fields as needed

        // Search by keyword in firstname or lastname
        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('firstname', 'like', '%' . $searchTerm . '%')
                  ->orWhere('lastname', 'like', '%' . $searchTerm . '%');
            });
        }

        // Sort by specified field
        if ($request->has('sort_by')) {
            $sortBy = $request->input('sort_by');
            $query->orderBy($sortBy);
        }

        // Limit number of results
        if ($request->has('limit')) {
            $limit = $request->input('limit');
            $query->limit($limit);
        }

        // Execute the query
        $users = $query->get();

        return $users;
    }
}

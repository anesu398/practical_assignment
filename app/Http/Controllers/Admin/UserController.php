<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display a listing of users
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('admin.users.create');
    }

    // Store a newly created user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'is_admin' => 'boolean',
        ]);

        User::create($request->all());

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    // Show the form for editing a user
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Update the specified user
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
            'is_admin' => 'boolean',
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    // Delete the specified user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
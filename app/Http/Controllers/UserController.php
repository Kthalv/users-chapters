<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showAllUsers()
    {
        $users = User::orderBy('updated_at', 'desc')->get();
        return view('users', ['users' => $users]);
    }

    public function createUser()
    {
        return view('create-user');
    }

    public function storeUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->save();

        return redirect()->route('showAllUsers')->with('success', 'User created successfully.');
    }

    public function viewUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('user', ['user' => $user]);
    }

    public function editUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('edit-user',  ['user' => $user]);
    }

    public function updateUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($request->id);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->save();

        return redirect()->route('viewUser', ['id' => $user->id])->with('success', 'User updated successfully.');
    }

    public function deleteUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        
        if ($user) 
        {
            $user->delete();
        }

        return redirect()->route('showAllUsers')->with('success', 'User deleted successfully.');
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function updateRole(User $user, Request $request)
    {
        $request->validate(['role' => 'required|in:user,author,admin']);
        $user->update(['role'=>$request->role]);
        return back()->with('ok','Role user diperbarui.');
    }
}

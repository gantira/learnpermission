<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        $users = User::has('roles')->get();

        return view('permission.assign.user.create', compact('roles', 'users'));
    }

    public function store()
    {
        $user = User::whereEmail(request('email'))->first();
        $user->assignRole(request('roles'));

        return back();
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $users = User::has('roles')->get();

        return view('permission.assign.user.edit', compact('user', 'users', 'roles'));
    }

    public function update(User $user)
    {
        $user->syncRoles(request('roles'));

        return redirect()->route('assign.user.create')->with('success', 'User role synced');
    }
}

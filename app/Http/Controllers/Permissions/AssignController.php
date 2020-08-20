<?php

namespace App\Http\Controllers\Permissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignController extends Controller
{
    public function create()
    {
        $roles = Role::get();
        $permissions = Permission::get();

        return view('permission.assign.create', compact('roles', 'permissions'));
    }

    public function store()
    {
        request()->validate([
            'role' => 'required',
            'permission' => 'array|required',
        ]);

        $role = Role::find(request('role'));
        $role->givePermissionTo(request('permission'));
        $role->save();

        return back()->with('success', "Permission has been assigned to the role {$role->name}");
    }

    public function edit(Role $role)
    {
        $roles = Role::get();
        $permissions = Permission::get();

        return view('permission.assign.edit', compact('role', 'roles', 'permissions'));
    }

    public function update(Role $role)
    {
        request()->validate([
            'role' => 'required',
            'permission' => 'array|required',
        ]);

        $role->syncPermissions(request('permission'));

        return redirect()->route('assign.create')->with('success', 'The Permissions has been synced');
    }
}

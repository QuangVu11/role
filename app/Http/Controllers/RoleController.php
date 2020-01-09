<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('add_roles')->with(array('roles' => $roles, 'permissions' => $permissions));
    }

    public function store(Request $request)
    {
        $role_id = $request->role_id;
        $role = Role::find($role_id);
        if (count($role) > 0) {
            $checkRole = Role::where('id', $role_id)->withCount('permissions')->get()->toArray();
            if ($checkRole[0]['permissions_count'] > 0) {
                $role->permissions()->detach();
            }
            $role->permissions()->attach($request->permissions);
            return redirect()->route('home');

        }
        return redirect()->route('home');

    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission_to_user;

class rolesandpermission extends Controller
{
    function addrole(Request $req)
    {
        $req->validate([
            'role' => 'required',

        ]);

        $role = new Role;
        $role->role = $req->role;
        $result = $role->save();
        if ($result) {
            return redirect('add-roles')->with('success', 'New Role created successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    function addpermission(Request $req)
    {
        $req->validate([
            'permission' => 'required',

        ]);

        $permission = new Permission;

        $result = $permission->save();
        if ($result) {
            return redirect('add-roles')->with('success', 'Permission created successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    function show_role()
    {
        $data = Permission::all();
        $roles = Role::all();
        return view('admin.create_roles')->with('permission', $data)->with('listrole', $roles);
    }

    function assign_permission(Request $req)
    {
        $req->validate([
            'roles_id' => 'required',
            'permission_id' => 'required',
        ]);


        $role = new Permission_to_user;
        $role->roles_id = $req->roles_id;
        $role->permission_id = $req->permission_id;
        $result = $role->save();
        if ($result) {
            return redirect('add-roles')->with('success', 'New Role created successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    function show_rolepermission()
    {
        $data = Permission_to_user::all();
        return view('admin.assign_roles')->with('permission', $data);
    }
}
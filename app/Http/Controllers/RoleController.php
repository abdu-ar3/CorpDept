<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::whereNotIn('name', ['admin'])->get();
;
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('Test');
           // Validasi
        \Validator::make($request->all(), [
            "name" => "required",
        
        ])->validate();

        // New 
        $new_role = new \Spatie\Permission\Models\Role;

        $new_role->name = $request->get('name');
        $new_role->save();
        return redirect()->route('admin.roles.index')->with('status', 'Roles successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd('Test');
        \Validator::make($request->all(), [
            "name" => "required",
        
        ])->validate();

        $role = \Spatie\Permission\Models\Role::findOrFail($id);
        $role->name = $request->get('name');
        $role->save();

        return redirect()->route('admin.roles.index', [$id])->with('status', 'Edit Role succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        // dd('test');
        $role->delete();
        return back()->with('status', 'Role Deleted.');
    }

    public function givePermission(Request $request, Role $role)
    {
        if($role->hasPermissionTo($request->permission)){
            return back()->with('status', 'Permission exists.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('status', 'Permission added.');
    }

    public function revokePermission(Role $role, Permission $permission)
    {
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('status', 'Permission Revoked.');
        }
        return back()->with('status', 'Permission not exists.');
    }
}

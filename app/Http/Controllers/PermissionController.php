<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        \Validator::make($request->all(), [
            "name" => "required",
        
        ])->validate();

        // New 
        $new_permission = new \Spatie\Permission\Models\Permission;

        $new_permission->name = $request->get('name');
        $new_permission->save();
        return redirect()->route('admin.permissions.index')->with('status', 'Permissions successfully created');
        
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
    public function edit(Permission $permission)
    {
        $roles = Role::all();
        return view('admin.permissions.edit', compact('permission', 'roles'));
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
        // dd('test');
        \Validator::make($request->all(), [
            "name" => "required",
        
        ])->validate();

        $permission = \Spatie\Permission\Models\Permission::findOrFail($id);
        $permission->name = $request->get('name');
        $permission->save();

        return redirect()->route('admin.permissions.index', [$id])->with('status', 'Edit Permission succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        // dd('TYets');
        $permission->delete();
        return back()->with('status', 'Permission Deleted.');
    }

    public function assignRole(Request $request, Permission $permission)
    {
        if($permission->hasRole($request->role)){
            return back()->with('status', 'Role exists.');
        }

        $permission->assignRole($request->role);
        return back()->with('status', 'Role Assigned.');
    }

    public function removeRole(Permission $permission, Role $role)
    {
        if($permission->hasRole($role)){
            $permission->removeRole($role);
            return back()->with('status', 'Role Removed.');
        }

        return back()->with('status', 'Role not exists.');
    }
}

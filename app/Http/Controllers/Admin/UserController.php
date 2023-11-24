<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
    
        return view('admin.users.index', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // dd('test');
        $roles = Role::all();
        $permissions = Permission::all();
        
        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // dd('Test');
        if ($user->hasRole('admin')) {
            return back()->with('status', 'you are admin.');
        }
        $user->delete();

        return back()->with('status', 'User deleted.');
    }

    public function assignRole(Request $request, User $user)
    {
        if($user->hasRole($request->role)){
            return back()->with('status', 'Role exists.');
        }

        $user->assignRole($request->role);
        return back()->with('status', 'Role Assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if($user->hasRole($role)){
            $user->removeRole($role);
            return back()->with('status', 'Role Removed.');
        }

        return back()->with('status', 'Role not exists.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('status', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('status', 'Permission added.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if($user->hasPermissionTo($permission)){
            $user->revokePermissionTo($permission);
            return back()->with('status', 'Permission Revoked.');
        }
        return back()->with('status', 'Permission Does not exists.');
    }

    public function userDept()
    {
        // dd('Test');
        $users = User::all();
        $depts = Department::get();

        return view('admin.users.userDept', compact('users', 'depts'));
    }

    public function userSave(Request $request)
    {
        // dd('test');
          // Validasi
         // Validasi formulir jika diperlukan
    $request->validate([
        'user_id' => 'required',
        'department_id' => 'required',
    ]);

    // Ambil input dari formulir
    $userId = $request->input('user_id');
    $departmentId = $request->input('department_id');

    // Ambil instance user dan department yang ingin dihubungkan
    $user = User::find($userId);
    $department = Department::find($departmentId);

    // Pastikan user dan department ditemukan sebelum menggunakan attach
    if ($user && $department) {
        // Gunakan metode attach pada model User untuk menambahkan ke tabel pivot
        $user->departments()->attach($department->id);
        
        // Jika Anda memiliki model $new_usdept, pastikan Anda menggunakannya untuk menyimpan data
        // Jika tidak, Anda bisa menghapus baris ini
        // $new_usdept->save();

        return redirect()->route('admin.users.dept')->with('success', 'Dept Role successfully created');
    }

    // Jika user atau department tidak ditemukan, munculkan pesan kesalahan
    return redirect()->route('admin.users.dept')->with('error', 'User or Department not found');
        
    }
}

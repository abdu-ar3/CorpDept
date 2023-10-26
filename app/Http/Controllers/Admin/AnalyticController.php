<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Cache;

class AnalyticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd('test');
      // Cek apakah total login sudah disimpan di cache
        if (Cache::has('totalLogin')) {
            $totalLogin = Cache::get('totalLogin');
        } else {
            // Hitung total login dari database
            $totalLogin = User::sum('login_count');

            // Simpan total login dalam cache selama misalnya 1 jam
            Cache::put('totalLogin', $totalLogin, now()->addHour());
        }

        $users = User::all();
        $userCount = $users->count();
        $userIP = $request->ip();
        $userIPv4 = filter_var($userIP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);

        $dept = Department::all();
        $deptCount = $dept->count();

        return view('admin.analytic.index', compact('totalLogin', 'userCount', 'deptCount', 'userIP', 'userIPv4'));

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
    public function destroy($id)
    {
        //
    }
}

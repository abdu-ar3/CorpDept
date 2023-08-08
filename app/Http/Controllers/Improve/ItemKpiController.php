<?php

namespace App\Http\Controllers\Improve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemKpi;
use App\Models\Period;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ItemKpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         // Mendapatkan pengguna yang sedang login
        $user = Auth::user();

        // Mendapatkan daftar ItemKpi sesuai dengan pengguna yang login
        $itemKpis = $user->itemKpis;
        $periods = Period::all();
        $item_kpi = ItemKpi::get();

       // Filter user berdasarkan user_id dari request
        $user_id = $request->input('user_id');
        $selectedUser = User::find($user_id);

         // Ambil data users untuk dropdown filter
        $users = User::all();

         // Jika user_id tidak ada atau tidak ditemukan, beri nilai null pada selectedUser
        if (!$selectedUser) {
            $selectedUser = null;
            $itemKpi = collect(); // Set itemKpi menjadi koleksi kosong jika user tidak ditemukan
        } else {
            // Jika user ditemukan, ambil item_kpi yang berelasi dengannya
            $itemKpi = $selectedUser->itemKpis;
        }
        return view('admin.itemkpi.index', compact('item_kpi', 'periods', 'users', 'selectedUser', 'itemKpis'));
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
         // Validasi data dari form
    $request->validate([
        'item' => 'required|string|max:255',
        'target' => 'required|string|max:255',
        'bobot' => 'required|string|max:255',
        'ski' => 'required|string|max:255',
        'user_id' => 'required|exists:users,id',
    ]);

    // Simpan data item KPI baru ke dalam database
    $itemKpi = new ItemKpi();
    $itemKpi->item = $request->input('item');
    $itemKpi->target = $request->input('target');
    $itemKpi->bobot = $request->input('bobot');
    $itemKpi->ski = $request->input('ski');
    $itemKpi->user_id = $request->input('user_id');
    $itemKpi->save();

    return redirect()->back()->with('success', 'Data Item KPI berhasil ditambahkan.');

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

    public function getDataByPeriode(Request $request)
    {
        dd('Test');
    }

    public function filter(Request $request)
    {
        // dd('Test');
        $user_id = $request->input('user_id');

        // Cari user berdasarkan user_id
        $selectedUser = User::find($user_id);

        if ($selectedUser) {
            // Jika user dengan user_id yang dipilih ada, ambil item_kpi yang berelasi dengannya
            $itemKpis = $selectedUser->itemKpis;

            $users = User::all();

            // Tampilkan view dan kirim data item_kpi dan user ke dalam view
            return view('admin.itemkpi.index', compact('users','selectedUser', 'itemKpis'));
        } else {
            // Jika user dengan user_id yang dipilih tidak ditemukan, kembalikan ke halaman sebelumnya
            return redirect()->route('admin.itemkpi.index')->with('error', 'User tidak ditemukan.');
        }
    }
}

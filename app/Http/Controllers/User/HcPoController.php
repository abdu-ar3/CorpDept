<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\HcPurchase;
use App\Models\User\HcPode;
use App\Models\User\HcPocust;
use App\Models\User\HcPodecust;
use Illuminate\Support\Facades\DB;

class HcPoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('Test');
        $hcPo = HcPurchase::all();
        $data = DB::table('hc_purchases')
            ->join('type_jobs', 'hc_purchases.type_job_id', '=', 'type_jobs.id')
            ->select('hc_purchases.type_job_id', 'type_jobs.name', DB::raw('SUM(hc_purchases.value) as total_value'), DB::raw('(SUM(hc_purchases.value) / (SELECT SUM(value) FROM hc_purchases)) * 100 as percentage'))
            ->groupBy('hc_purchases.type_job_id', 'type_jobs.name')
            ->get();

        // Menginisialisasi array untuk kategori dan persentase
        $categories = [];
        $values = [];

        // Mengisi array dengan data dari tabel
        foreach ($data as $row) {
            $categories[] = $row->name;
            $values[] = $row->percentage;
        }

        $data = HcPocust::orderBy('value', 'desc')->take(5)->get();

        return view('user.hcpo', compact('hcPo', 'data', 'categories', 'values'));
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

    public function grafikPode()
    {
        // dd('Test');
        $hcPo = HcPode::all();
        $data = DB::table('hc_podes')
            ->join('type_jobs', 'hc_podes.type_job_id', '=', 'type_jobs.id')
            ->select('hc_podes.type_job_id', 'type_jobs.name', DB::raw('SUM(hc_podes.value) as total_value'), DB::raw('(SUM(hc_podes.value) / (SELECT SUM(value) FROM hc_podes)) * 100 as percentage'))
            ->groupBy('hc_podes.type_job_id', 'type_jobs.name')
            ->get();

        // Menginisialisasi array untuk kategori dan persentase
        $categories = [];
        $values = [];

        // Mengisi array dengan data dari tabel
        foreach ($data as $row) {
            $categories[] = $row->name;
            $values[] = $row->percentage;
        }

        $data = HcPodecust::orderBy('value', 'desc')->take(5)->get();

        return view('user.hcPode', compact('hcPo', 'data', 'categories', 'values'));
    }
}

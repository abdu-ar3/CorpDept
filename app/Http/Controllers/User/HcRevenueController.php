<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\HcRevenue;
use App\Models\User\HcRevde;
use App\Models\User\HcRevcust;
use App\Models\User\HcRevdecust;
use Illuminate\Support\Facades\DB;

class HcRevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('Test');
      // Mengambil data dari tabel hc_revenues
      // Mengambil data dari tabel hc_revenues
        $hcRev = HcRevenue::all();
        $data = DB::table('hc_revenues')
            ->join('type_jobs', 'hc_revenues.type_job_id', '=', 'type_jobs.id')
            ->select('hc_revenues.type_job_id', 'type_jobs.name', DB::raw('SUM(hc_revenues.value) as total_value'), DB::raw('(SUM(hc_revenues.value) / (SELECT SUM(value) FROM hc_revenues)) * 100 as percentage'))
            ->groupBy('hc_revenues.type_job_id', 'type_jobs.name')
            ->get();

        // Menginisialisasi array untuk kategori dan persentase
        $categories = [];
        $values = [];

        // Mengisi array dengan data dari tabel
        foreach ($data as $row) {
            $categories[] = $row->name;
            $values[] = $row->percentage;
        }

        $data = HcRevcust::orderBy('value', 'desc')->take(5)->get();
        
        return view('user.hcrev', compact('categories', 'values', 'hcRev', 'data'));
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

    public function grafikRevde()
    {
        // dd('Test');
        
        $hcRev = HcRevde::all();
        $data = DB::table('hc_revdes')
            ->join('type_jobs', 'hc_revdes.type_job_id', '=', 'type_jobs.id')
            ->select('hc_revdes.type_job_id', 'type_jobs.name', DB::raw('SUM(hc_revdes.value) as total_value'), DB::raw('(SUM(hc_revdes.value) / (SELECT SUM(value) FROM hc_revdes)) * 100 as percentage'))
            ->groupBy('hc_revdes.type_job_id', 'type_jobs.name')
            ->get();

        // Menginisialisasi array untuk kategori dan persentase
        $categories = [];
        $values = [];

        // Mengisi array dengan data dari tabel
        foreach ($data as $row) {
            $categories[] = $row->name;
            $values[] = $row->percentage;
        }

        $data = HcRevdecust::orderBy('value', 'desc')->take(5)->get();
        
        return view('user.hcrevde', compact('categories', 'values', 'hcRev', 'data'));

    }
}

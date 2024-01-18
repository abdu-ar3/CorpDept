<?php

namespace App\Http\Controllers\Aging;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Pdash;
use App\Models\Aging\Area;

class AgingCalculateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // Ambil ID periode yang dipilih dari permintaan GET
        $selectedPeriodeId = $request->input('period');

        // Gunakan nilai periode yang dipilih untuk mengambil data sesuai periode
        $selectedPeriode = Pdash::find($selectedPeriodeId);

        // Gunakan nilai periode yang dipilih untuk mengambil data sesuai periode
        $pdash = Pdash::find($selectedPeriodeId);

        $areas = []; // Inisialisasi array areas

        if ($selectedPeriodeId) {
            // Ambil data area "Area 1 - 4" sesuai dengan periode
            $areas = Area::whereHas('aging', function ($query) use ($selectedPeriodeId) {
                $query->where('pdash_id', $selectedPeriodeId)
                    ->whereIn('area', ['Area 1', 'Area 2', 'Area 3', 'Area 4', 'Summary']);
            })->orderBy('area')->get();
        } 

        // Ambil daftar pdashes (periodes) untuk dropdown select
        $pdashes = Pdash::where('id', '<=', 12)->get();


        return view('aging.calculate', compact('areas', 'pdashes', 'selectedPeriodeId', 'selectedPeriode'));
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

     public function calde(Request $request)
    {
        
        // Ambil ID periode yang dipilih dari permintaan GET
        $selectedPeriodeId = $request->input('period');

        // Gunakan nilai periode yang dipilih untuk mengambil data sesuai periode
        $selectedPeriode = Pdash::find($selectedPeriodeId);

        // Gunakan nilai periode yang dipilih untuk mengambil data sesuai periode
        $pdash = Pdash::find($selectedPeriodeId);

        $areas = []; // Inisialisasi array areas

        if ($selectedPeriodeId) {
            // Ambil data area "Area 1 - 4" sesuai dengan periode
            $areas = Area::whereHas('aging', function ($query) use ($selectedPeriodeId) {
                $query->where('pdash_id', $selectedPeriodeId)
                    ->whereIn('area', ['Area 1', 'Area 2', 'Area 3', 'Area 4', 'Summary']);
            })->orderBy('area')->get();
        } 

        // Ambil daftar pdashes (periodes) untuk dropdown select
        $pdashes = Pdash::where('id', '>', 12)->get();


        return view('aging.calde', compact('areas', 'pdashes', 'selectedPeriodeId', 'selectedPeriode'));
    }
}

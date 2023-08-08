<?php

namespace App\Http\Controllers\Improve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Realization;
use App\Models\Period;
use App\Models\ItemKpi;
use Illuminate\Support\Facades\Auth;

class RealizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('Test');
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        $periods = Period::all();
        $realizations = Realization::all();
        $selectedPeriod = null;
        $item_kpi = collect();


        if (request()->has('period_id')) {
        $selectedPeriodId = request('period_id');
        $selectedPeriod = Period::find($selectedPeriodId);

        if ($selectedPeriod) {
            $item_kpi = $selectedPeriod->itemKpi;
            }
        }
        

        $realization = collect();


        if ($selectedPeriod) {
            // Jika periode dipilih, ambil data realisasi yang sesuai dengan periode
            $realization = $user->realizations()
                ->where('period_id', $selectedPeriod->id)
                ->with('itemKpi')
                ->get()
                ->groupBy('item_kpi_id');
        }

        return view('admin.realization.index', compact('realization', 'periods', 'item_kpi', 'selectedPeriod', 'realizations'));
        
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

<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KpiItem;
use App\Models\Department;
use App\Models\Event;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $filterEvent = $request->input('selectEvent'); // Ubah filterPeriod menjadi filterEvent

        $events = Event::all(); // Ganti $periods


        $dept = Department::all();
        $pditems = KpiItem::with('department')
                ->when($filterEvent, function ($query) use ($filterEvent) {
                $query->where('event_id', $filterEvent); // Menggunakan event_id sebagai filter
            })
            ->select('kpi_items.*', DB::raw('(realization / target) * 100 as percentage'), DB::raw('((realization / target) * 100) * weight / 100 as weight_percentage'))
            ->get();


        $pditemsByDepartment = $pditems->groupBy('department_id');
        $sumByDepartment = $pditemsByDepartment->map(function ($items) {
                return $items->sum('weight_percentage');
            })->sortByDesc(function ($sumPercentage, $departmentId) {
                return $sumPercentage;
            });

        $total = $sumByDepartment->sum();
        $totalDepartements = $sumByDepartment->count();
        $avgsummary = $totalDepartements > 0 ?  $total / $totalDepartements : 0;

        return view('visit.dept', compact('dept', 'pditemsByDepartment', 'total', 'totalDepartements', 'avgsummary', 'sumByDepartment', 'events'));


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

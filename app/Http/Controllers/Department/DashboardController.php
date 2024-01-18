<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KpiItem;
use App\Models\Department;
use App\Models\Event;
use App\Models\User\DeptSemester;
use App\Models\User\DeptCorp;
use App\Models\User\EventSemester;
use Illuminate\Support\Facades\Auth;

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

       $events = Event::all(); // Ganti $periods
        $latestEvents = Event::orderBy('id', 'desc')->get();

        // Ambil event terakhir sebagai event default
        $defaultEvent = $events->last();

        // Ambil event yang dipilih dari request
        $selectedEventId  = $request->input('selectEvent');

        // Gunakan event terakhir sebagai default jika selectEvent tidak ada atau tidak valid
        $selectedEventId  = $selectedEventId  ?? $defaultEvent->id;
        $selectedEvent = Event::find($selectedEventId);

        $user = Auth::user();
        $departmentIds = Auth::user()->departments->pluck('id'); 

       // Pastikan bahwa selectedEventId  adalah event yang valid
        if (!$events->contains('id', $selectedEventId )) {
            $selectedEventId  = $defaultEvent->id;
        }

        // Lanjutkan dengan mengambil data KpiItem sesuai dengan selectedEventId 
        $pditems = KpiItem::with('department')
            ->where('event_id', $selectedEventId ) // Filter berdasarkan event yang dipilih
            ->whereIn('department_id', $departmentIds)
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

       // Pisahkan bulan dan tahun dari $selectedEvent->start_event
        list($month, $year) = explode(' ', $selectedEvent->start_event);

        
      // Tentukan ID yang sesuai berdasarkan bulan dan tahun
        $id = null; // Inisialisasi dengan null

        if ($month == 'Januari' && $year == '2023') {
            $id = 1; // Untuk Januari 2023
        } elseif ($month == 'Februari' && $year == '2023') {
            $id = 1; // Untuk Februari 2023
        } elseif ($month == 'Maret' && $year == '2023') {
            $id = 1; // Untuk Maret 2023
        } elseif ($month == 'April' && $year == '2023') {
            $id = 1; // Untuk April 2023
        } elseif ($month == 'Mei' && $year == '2023') {
            $id = 1; // Untuk Mei 2023
        } elseif ($month == 'Juni' && $year == '2023') {
            $id = 1; // Untuk Juni 2023
        } elseif ($month == 'Juli' && $year == '2023') {
            $id = 2; // Untuk Juli 2023
        } elseif ($month == 'Agustus' && $year == '2023') {
            $id = 2; // Untuk Agustus 2023
        } elseif ($month == 'September' && $year == '2023') {
            $id = 2; // Untuk September 2023
        } elseif ($month == 'Oktober' && $year == '2023') {
            $id = 2; // Untuk Oktober 2023
        } elseif ($month == 'November' && $year == '2023') {
            $id = 2; // Untuk November 2023
        } elseif ($month == 'Desember' && $year == '2023') {
            $id = 2; // Untuk Desember 2023
        } elseif ($month == 'Januari' && $year == '2024') {
            $id = 3; // Untuk Januari 2024
        } elseif ($month == 'Februari' && $year == '2024') {
            $id = 3; // Untuk Februari 2024
        } elseif ($month == 'Maret' && $year == '2024') {
            $id = 3; // Untuk Maret 2024
        } elseif ($month == 'April' && $year == '2024') {
            $id = 3; // Untuk April 2024
        } elseif ($month == 'Mei' && $year == '2024') {
            $id = 3; // Untuk Mei 2024
        } elseif ($month == 'Juni' && $year == '2024') {
            $id = 3; // Untuk Juni 2024
        }


        // Dapatkan data dari dept_corps berdasarkan ID yang telah ditentukan
        $data = DeptCorp::where('id', $id)
                        ->orderBy('id', 'desc')
                        ->get()
                        ->pluck('value');

        // Dapatkan data dari dept_corps berdasarkan ID yang telah ditentukan
        $semesterData = DeptCorp::where('id', $id)
                        ->orderBy('id', 'desc')
                        ->first();  // Mengambil hanya satu record pertama yang sesuai

        $semesterValue = $semesterData ? $semesterData->semester : null;


        return view('visit.dept', compact('selectedEvent', 'departmentIds', 'pditemsByDepartment', 'total', 'totalDepartements', 'avgsummary', 'sumByDepartment', 'events', 'latestEvents', 'data', 'semesterValue'));


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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KpiItem;
use App\Models\Department;
use App\Imports\ItemKpiImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminKpiDeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('test');
        $itemKpi = KpiItem::all();


        return view('admin.kpidept.index', compact('itemKpi'));
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

    public function import_Kpiitem()
    {
        // dd('Test');
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new ItemKpiImport, request()->file('file'));

                return redirect()->route('kpidept.index')->with('status', 'KPI Item successfully imported');
            } else {
                // Tipe file tidak valid
                return redirect()->route('kpidept.index')->with('error', 'Invalid file type. Please upload a valid CSV or XLSX file.');
            }
        } else {
            // File tidak diunggah
            return redirect()->route('kpidept.index')->with('error', 'Please upload a file.');
        }
    }

}

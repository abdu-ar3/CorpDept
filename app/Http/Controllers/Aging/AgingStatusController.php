<?php

namespace App\Http\Controllers\Aging;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aging\AgingSis;
use App\Models\Aging\AgingSitac;
use App\Models\Aging\AgingImb;
use App\Models\Aging\AgingCollocation;
use App\Models\Aging\AgingFiber;
use App\Models\Aging\AgingNew;
use App\Models\Aging\AgingPfo;
use App\Imports\AgingSisImport;
use Maatwebsite\Excel\Facades\Excel;

class AgingStatusController extends Controller
{
    public function index()
    {
        // dd('Test');
        $agingSis = AgingSis::paginate(100);
        $agingSitac = AgingSitac::paginate(100);
        $agingImb = AgingImb::paginate(100);
        $agingCollo = AgingCollocation::paginate(100);
        $agingFiber = AgingFiber::paginate(100);
        $agingNew = AgingNew::paginate(100);
        $agingPfo = AgingPfo::paginate(100);

        return view('aging.status', compact('agingSis', 'agingSitac', 'agingImb', 'agingCollo', 'agingFiber', 'agingNew', 'agingPfo'));
    }

    public function asis_import()
    {
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new AgingSisImport, request()->file('file'));

                return redirect()->route('admin.aging')->with('status', 'Aging SIS successfully imported');
            } else {
                // Tipe file tidak valid
                return redirect()->route('admin.aging')->with('error', 'Invalid file type. Please upload a valid CSV or XLSX file.');
            }
        } else {
            // File tidak diunggah
            return redirect()->route('admin.aging')->with('error', 'Please upload a file.');
        }
    }


}


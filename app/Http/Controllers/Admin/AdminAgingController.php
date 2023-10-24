<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aging\AgingSis;
use App\Models\Aging\AgingSitac;
use App\Models\Aging\AgingImb;
use App\Models\Aging\AgingCollocation;
use App\Models\Aging\AgingFiber;
use App\Models\Aging\AgingNew;
use App\Models\Aging\AgingPfo;
use App\Models\Aging\Aging;
use App\Imports\AgingCalculateImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminAgingController extends Controller
{
    public function index()
    {
        $agingSis = AgingSis::get();
        $agingSitac = AgingSitac::get();
        $agingImb = AgingImb::get();
        $agingCollo = AgingCollocation::get();
        $agingFiber = AgingFiber::get();
        $agingNew = AgingNew::get();
        $agingPfo = AgingPfo::get();

        return view('admin.aging.import', compact('agingSis', 'agingSitac', 'agingImb', 'agingCollo', 'agingFiber', 'agingNew', 'agingPfo'));
        
    }    

    public function calculate()
    {
        $agingCalculate = Aging::get();

        return view('admin.aging.calculate', compact('agingCalculate'));
    }

    public function aging_import()
    {
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new AgingCalculateImport, request()->file('file'));

                return redirect()->route('admin.calculate')->with('status', 'calcual successfully imported');
            } else {
                // Tipe file tidak valid
                return redirect()->route('admin.calculate')->with('error', 'Invalid file type. Please upload a valid CSV or XLSX file.');
            }
        } else {
            // File tidak diunggah
            return redirect()->route('admin.calculate')->with('error', 'Please upload a file.');
        }
    }

    public function delete($id)
    {
        // dd('test');
        $aging = Aging::findOrFail($id); // Temukan data yang akan dihapus
        $aging->delete(); // Hapus data

        return redirect()->route('admin.calculate')->with('success', 'Data AGING berhasil dihapus');
    }
}

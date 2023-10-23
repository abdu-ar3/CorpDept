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
use App\Imports\AgingSitacImport;
use App\Imports\AgingImbImport;
use App\Imports\AgingColloImport;
use App\Imports\AgingNsImport;
use App\Imports\AgingFoImport;
use App\Imports\AgingPerFoImport;
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

                return redirect()->route('admin.aging')->with('status', 'Aging SITAC successfully imported');
            } else {
                // Tipe file tidak valid
                return redirect()->route('admin.aging')->with('error', 'Invalid file type. Please upload a valid CSV or XLSX file.');
            }
        } else {
            // File tidak diunggah
            return redirect()->route('admin.aging')->with('error', 'Please upload a file.');
        }
    }

    public function asitac_import()
    {
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new AgingSitacImport, request()->file('file'));

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

    public function aimb_import()
    {
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new AgingImbImport, request()->file('file'));

                return redirect()->route('admin.aging')->with('status', 'Aging IMB successfully imported');
            } else {
                // Tipe file tidak valid
                return redirect()->route('admin.aging')->with('error', 'Invalid file type. Please upload a valid CSV or XLSX file.');
            }
        } else {
            // File tidak diunggah
            return redirect()->route('admin.aging')->with('error', 'Please upload a file.');
        }
    }

    public function acol_import()
    {
        // dd('Test');
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new AgingColloImport, request()->file('file'));

                return redirect()->route('admin.aging')->with('status', 'Aging Collocation successfully imported');
            } else {
                // Tipe file tidak valid
                return redirect()->route('admin.aging')->with('error', 'Invalid file type. Please upload a valid CSV or XLSX file.');
            }
        } else {
            // File tidak diunggah
            return redirect()->route('admin.aging')->with('error', 'Please upload a file.');
        }
    }

    public function ans_import()
    {
        // dd('Test');
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new AgingNsImport, request()->file('file'));

                return redirect()->route('admin.aging')->with('status', 'Aging New Site successfully imported');
            } else {
                // Tipe file tidak valid
                return redirect()->route('admin.aging')->with('error', 'Invalid file type. Please upload a valid CSV or XLSX file.');
            }
        } else {
            // File tidak diunggah
            return redirect()->route('admin.aging')->with('error', 'Please upload a file.');
        }
    }

    public function afo_import()
    {
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new AgingFoImport, request()->file('file'));

                return redirect()->route('admin.aging')->with('status', 'Aging Fiber Optik successfully imported');
            } else {
                // Tipe file tidak valid
                return redirect()->route('admin.aging')->with('error', 'Invalid file type. Please upload a valid CSV or XLSX file.');
            }
        } else {
            // File tidak diunggah
            return redirect()->route('admin.aging')->with('error', 'Please upload a file.');
        }
    }

    public function apfo_import()
    {
        $file = request()->file('file');

        // Pastikan file telah diunggah
        if ($file) {
            // Validasi tipe file (misalnya, CSV atau XLSX)
            if ($file->getClientOriginalExtension() == 'csv' || $file->getClientOriginalExtension() == 'xlsx') {
                // Lakukan import setelah memastikan file yang valid
                Excel::import(new AgingPerFoImport, request()->file('file'));

                return redirect()->route('admin.aging')->with('status', 'Aging Perijinan FO successfully imported');
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


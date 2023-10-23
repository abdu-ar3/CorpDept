<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\HcRevenue;
use App\Models\User\HcRevcust;
use App\Models\User\TypeJob;

class AdminHcRevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('Test');
        $hcRev = HcRevenue::all();
        $hcRevCust = HcRevcust::all();
        $typeJob = TypeJob::get();


        return view('admin.highchart.rev', compact('hcRev', 'hcRevCust', 'typeJob'));
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
        // dd('Test');
        // Validasi
        \Validator::make($request->all(), [
            "type_job_id" => "required",
            "value" => "required",
        
        ])->validate();

        // New 
        $new_hcrev = new \App\Models\User\HcRevenue;

        $new_hcrev->type_job_id = $request->get('type_job_id');
        $new_hcrev->value = $request->get('value');

        $new_hcrev->save();

        return redirect()->route('hcrev.index')->with('success', 'Highchart Reveneue successfully created');

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
        $hcRev = HcRevenue::findOrFail($id);
        $typeJob = TypeJob::all(); // Mengambil data untuk dropdown "Select Type Job"

        return view('admin.highchart.edit', compact('hcRev', 'typeJob'));
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
        // dd('Test');
        $hcRev = HcRevenue::findOrFail($id); // Mengambil data item yang akan diupdate

        // Validasi input form sesuai kebutuhan
        $request->validate([
            'type_job_id' => 'required',
            'value' => 'required|numeric',
        ]);

        // Update data item dengan data baru
        $hcRev->type_job_id = $request->input('type_job_id');
        $hcRev->value = $request->input('value');
        $hcRev->save();

        return redirect()->route('hcrev.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('test');
        $hcRev = HcRevenue::findOrFail($id); // Temukan data yang akan dihapus
        $hcRev->delete(); // Hapus data

        return redirect()->route('hcrev.index')->with('success', 'Data berhasil dihapus');

    }

    public function save(Request $request)
    {
        // dd('Test');

          // Validasi
        \Validator::make($request->all(), [
            "type_job_id" => "required",
            "nameCust" => "required",
            "value" => "required",
        
        ])->validate();

        // New 
        $new_hcrev = new \App\Models\User\HcRevcust;

        $new_hcrev->type_job_id = $request->get('type_job_id');
        $new_hcrev->cust = $request->get('nameCust');
        $new_hcrev->value = $request->get('value');

        $new_hcrev->save();

        return redirect()->route('hcrev.index')->with('success', 'Highchart Reveneue Cust successfully created');
    }

    public function ubah($id)
    {
        // dd('Test');
        $hcRevcust = HcRevcust::findOrFail($id);
        $typeJob = TypeJob::all(); // Mengambil data untuk dropdown "Select Type Job"

        return view('admin.highchart.revcustEdit', compact('hcRevcust', 'typeJob'));
    }

    public function continue(Request $request, $id)
    {
        // dd('test');
        $hcRev = HcRevcust::findOrFail($id); // Mengambil data item yang akan diupdate

        // Validasi input form sesuai kebutuhan
        $request->validate([
            'type_job_id' => 'required',
            'nameCust' => 'required',
            'value' => 'required|numeric',
        ]);

        // Update data item dengan data baru
        $hcRev->type_job_id = $request->input('type_job_id');
        $hcRev->value = $request->input('value');
        $hcRev->cust = $request->input('nameCust');
        $hcRev->save();

        return redirect()->route('hcrev.index')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        // dd('Test');
        $hcRev = HcRevcust::findOrFail($id); // Temukan data yang akan dihapus
        $hcRev->delete(); // Hapus data

        return redirect()->route('hcrev.index')->with('success', 'Data berhasil dihapus');
    }
}

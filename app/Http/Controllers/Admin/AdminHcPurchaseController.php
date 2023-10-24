<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\HcPurchase;
use App\Models\User\HcPocust;
use App\Models\User\TypeJob;

class AdminHcPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hcPurchase = HcPurchase::all();
        $hcPurcust = HcPocust::all();
        $typeJob = TypeJob::get();


        return view('admin.highchart.po', compact('hcPurchase', 'hcPurcust', 'typeJob'));
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
        $new_hcpo = new \App\Models\User\HcPurchase;

        $new_hcpo->type_job_id = $request->get('type_job_id');
        $new_hcpo->value = $request->get('value');

        $new_hcpo->save();

        return redirect()->route('hcpo.index')->with('success', 'Highchart Purchase Order successfully created');
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
        $hcPo = HcPurchase::findOrFail($id);
        $typeJob = TypeJob::all(); // Mengambil data untuk dropdown "Select Type Job"

        return view('admin.highchart.editPo', compact('hcPo', 'typeJob'));
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
        $hcPo = HcPurchase::findOrFail($id); // Mengambil data item yang akan diupdate

        // Validasi input form sesuai kebutuhan
        $request->validate([
            'type_job_id' => 'required',
            'value' => 'required|numeric',
        ]);

        // Update data item dengan data baru
        $hcPo->type_job_id = $request->input('type_job_id');
        $hcPo->value = $request->input('value');
        $hcPo->save();

        return redirect()->route('hcpo.index')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('Testt');
        $hcPo = HcPurchase::findOrFail($id); // Temukan data yang akan dihapus
        $hcPo->delete(); // Hapus data

        return redirect()->route('hcpo.index')->with('success', 'Data berhasil dihapus');
    }

    public function save(Request $request)
    {
        // dd('test');
        \Validator::make($request->all(), [
            "type_job_id" => "required",
            "nameCust" => "required",
            "value" => "required",
        ])->validate();

        // New 
        $new_hcpo = new \App\Models\User\HcPocust;

        $new_hcpo->type_job_id = $request->get('type_job_id');
        $new_hcpo->cust = $request->get('nameCust');
        $new_hcpo->value = $request->get('value');

        $new_hcpo->save();

        return redirect()->route('hcpo.index')->with('success', 'Highchart Purchase Order Cust successfully created');

    }

    public function ubah($id)
    {
        // dd('test');
        $hcPo = HcPocust::findOrFail($id);
        $typeJob = TypeJob::all(); // Mengambil data untuk dropdown "Select Type Job"

        return view('admin.highchart.editPoCust', compact('hcPo', 'typeJob'));
    }

    public function continue(Request $request, $id)
    {
        // dd('Test');
        $hcPo = HcPocust::findOrFail($id); // Mengambil data item yang akan diupdate

        // Validasi input form sesuai kebutuhan
        $request->validate([
            'type_job_id' => 'required',
            'nameCust' => 'required',
            'value' => 'required|numeric',
        ]);

        // Update data item dengan data baru
        $hcPo->type_job_id = $request->input('type_job_id');
        $hcPo->cust = $request->input('nameCust');
        $hcPo->value = $request->input('value');
        $hcPo->save();

        return redirect()->route('hcpo.index')->with('success', 'Data berhasil diperbarui');

    }

    public function delete($id)
    {
        $hcPo = HcPocust::findOrFail($id); // Temukan data yang akan dihapus
        $hcPo->delete(); // Hapus data

        return redirect()->route('hcpo.index')->with('success', 'Data berhasil dihapus');
    }
}


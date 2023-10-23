<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Pdash;
use App\Models\User\CorpMonth;
use App\Models\User\RevenueAchiev;
use App\Models\User\PoAchiev;
use App\Models\User\TypeJob;
use App\Models\User\TargetRevenue;
use App\Models\User\TargetPurchaseOrder;

class AdminCorpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $adminRev = RevenueAchiev::all();
        $adminPo = PoAchiev::all();
        $period = Pdash::get();
        $typeJob = TypeJob::get();
        $corpMonth = CorpMonth::get();

        return view('admin.corporate.index', compact('adminRev', 'period', 'typeJob', 'adminPo', 'corpMonth'));
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
        // Validasi
        \Validator::make($request->all(), [
            "period_id" => "required",
            "type_job_id" => "required",
            "value" => "required",
        
        ])->validate();

        // New 
        $new_revcorp = new \App\Models\User\RevenueAchiev;

        $new_revcorp->pdash_id = $request->get('period_id');
        $new_revcorp->type_job_id = $request->get('type_job_id');
        $new_revcorp->value = $request->get('value');

        $new_revcorp->save();
        return redirect()->route('corp.index')->with('success', 'Reveneue Achiev successfully created');
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
        $corpRev = RevenueAchiev::findOrFail($id);
        $period = Pdash::all(); // Mengambil data untuk dropdown "Select Period"
        $typeJob = TypeJob::all(); // Mengambil data untuk dropdown "Select Type Job"

        return view('admin.corporate.edit', compact('corpRev', 'period', 'typeJob'));
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
        $corp = RevenueAchiev::findOrFail($id); // Mengambil data item yang akan diupdate

        // Validasi input form sesuai kebutuhan
        $request->validate([
            'period_id' => 'required',
            'type_job_id' => 'required',
            'value' => 'required|numeric',
        ]);

        // Update data item dengan data baru
        $corp->pdash_id = $request->input('period_id');
        $corp->type_job_id = $request->input('type_job_id');
        $corp->value = $request->input('value');
        $corp->save();

        return redirect()->route('corp.index')->with('success', 'Data berhasil diperbarui');
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
        $corp = RevenueAchiev::findOrFail($id); // Temukan data yang akan dihapus
        $corp->delete(); // Hapus data

        return redirect()->route('corp.index')->with('success', 'Data berhasil dihapus');
    }

    public function save(Request $request)
    {
        // Validasi
        \Validator::make($request->all(), [
            "period_id" => "required",
            "type_job_id" => "required",
            "value" => "required",
        
        ])->validate();

        // New 
        $new_pocorp = new \App\Models\User\PoAchiev;

        $new_pocorp->pdash_id = $request->get('period_id');
        $new_pocorp->type_job_id = $request->get('type_job_id');
        $new_pocorp->value = $request->get('value');

        $new_pocorp->save();
        return redirect()->route('corp.index')->with('success', 'Purchase Order Achiev successfully created');
    }

    public function ubah($id)
    {

        $corpPo = PoAchiev::findOrFail($id);
        $period = Pdash::all(); // Mengambil data untuk dropdown "Select Period"
        $typeJob = TypeJob::all(); // Mengambil data untuk dropdown "Select Type Job"

        return view('admin.corporate.poEdit', compact('corpPo', 'period', 'typeJob'));
    }

    public function continue(Request $request, $id)
    {
        // dd('Test');
        $corp = PoAchiev::findOrFail($id); // Mengambil data item yang akan diupdate

        // Validasi input form sesuai kebutuhan
        $request->validate([
            'period_id' => 'required',
            'type_job_id' => 'required',
            'value' => 'required|numeric',
        ]);

        // Update data item dengan data baru
        $corp->pdash_id = $request->input('period_id');
        $corp->type_job_id = $request->input('type_job_id');
        $corp->value = $request->input('value');
        $corp->save();

        return redirect()->route('corp.index')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        // dd('test');
        $corp = PoAchiev::findOrFail($id); // Temukan data yang akan dihapus
        $corp->delete(); // Hapus data

        return redirect()->route('corp.index')->with('success', 'Data PO Achiev berhasil dihapus');
    }


    public function corpsave(Request $request)
    {
        // Validasi
        \Validator::make($request->all(), [
            "period_id" => "required",
            "value_rev" => "required",
            "value_po" => "required",
            "value_aging" => "required",
        
        ])->validate();

        // New 
        $new_corp = new \App\Models\User\CorpMonth;

        $new_corp->pdash_id = $request->get('period_id');
        $new_corp->value_rev = $request->get('value_rev');
        $new_corp->value_po = $request->get('value_po');
        $new_corp->value_aging = $request->get('value_aging');

        $new_corp->save();
        return redirect()->route('corp.index')->with('success', 'Corp Month successfully created');
    }

    public function corpubah($id)
    {
        // dd('Test');
        $corp = CorpMonth::findOrFail($id);
        $period = Pdash::all(); // Mengambil data untuk dropdown "Select Period"

        return view('admin.corporate.corpedit', compact('corp', 'period'));
    }

    public function corpupdate(Request $request, $id)
    {
        // dd('Test');
        $corp = CorpMonth::findOrFail($id); // Mengambil data item yang akan diupdate

        // Validasi input form sesuai kebutuhan
        $request->validate([
            'period_id' => 'required',
            'value_rev' => 'required|numeric',
            'value_po' => 'required|numeric',
            'value_aging' => 'required|numeric',
        ]);

        // Update data item dengan data baru
        $corp->pdash_id = $request->input('period_id');
        $corp->value_rev = $request->input('value_rev');
        $corp->value_po = $request->input('value_po');
        $corp->value_aging = $request->input('value_aging');
        $corp->save();

        return redirect()->route('corp.index')->with('success', 'Data berhasil diperbarui');
    }

    public function corpdelete($id)
    {
        // dd('test');
        $corp = CorpMonth::findOrFail($id); // Temukan data yang akan dihapus
        $corp->delete(); // Hapus data

        return redirect()->route('corp.index')->with('success', 'Data Corp Month berhasil dihapus');
        
    }

}

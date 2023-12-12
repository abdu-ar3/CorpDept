<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Pdash;
use App\Models\User\RevenueAchiev;
use App\Models\User\TypeJob;
use App\Models\User\TargetRevenue;
use App\Models\User\TargetPurchaseOrder;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    
    public function index()
    {   
        $type_job = TypeJob::all();
        $period_rev = Pdash::all();
        $target_rev = TargetRevenue::paginate(1);
        $target_po = TargetPurchaseOrder::paginate(1);
        $periods = DB::table('pdashes')->pluck('month_year');
        $data = [];

        foreach ($periods as $period) {
            // Cari pdash_id yang sesuai dengan month_year dalam tabel pdashes
            $pdashId = DB::table('pdashes')
                ->where('month_year', $period)
                ->value('id'); // Mengambil id dari pdashes yang sesuai

           // Hanya ambil data jika pdash_id di atas 12
            if ($pdashId < 12) {
                // Ambil data dari tabel revenue_achievs berdasarkan pdash_id
                $revenueAchievs = DB::table('corp_months')
                    ->where('pdash_id', $pdashId)
                    ->get()
                    ->toArray(); // Ubah hasil kueri menjadi array

                $data[$period] = $revenueAchievs;
            }
        }

        return view('user.dashboard', compact('data', 'type_job', 'period_rev', 'target_rev', 'target_po'));
    }

    public function grafikRev() {
        // dd('Test');
        $target_rev = TargetRevenue::paginate(1);

        $rev = TargetRevenue::get();
        $selisih = $rev->pluck('value_grafik')->sum();
        $tercapai = $rev->pluck('grand_total')->sum();


        return view('user.grafikrev', compact('target_rev', 'tercapai', 'selisih'));
    }
    
    public function grafikPo() 
    {
        // dd('Test');
        $target_po = TargetPurchaseOrder::paginate(1);

        $po = TargetPurchaseOrder::get();
        $selisih = $po->pluck('value_grafik')->sum();
        $tercapai = $po->pluck('grand_total')->sum();

        return view('user.grafikpo', compact('target_po', 'tercapai', 'selisih'));
    }

    public function newyear()
    {
        // dd('Test');
        $type_job = TypeJob::all();
        $period_rev = Pdash::where('id', '>', 12)->get();
        $target_rev = TargetRevenue::paginate(1);
        $target_po = TargetPurchaseOrder::paginate(1);
        $periods = DB::table('pdashes')->pluck('month_year');
        $data = [];

            foreach ($periods as $period) {
            // Cari pdash_id yang sesuai dengan month_year dalam tabel pdashes
            $pdashId = DB::table('pdashes')
                ->where('month_year', $period)
                ->value('id'); // Mengambil id dari pdashes yang sesuai

            // Hanya ambil data jika pdash_id di atas 12
            if ($pdashId > 12) {
                // Ambil data dari tabel revenue_achievs berdasarkan pdash_id
                $revenueAchievs = DB::table('corp_months')
                    ->where('pdash_id', $pdashId)
                    ->get()
                    ->toArray(); // Ubah hasil kueri menjadi array

                $data[$period] = $revenueAchievs;
            }
        }


        return view('user.newdash', compact('data', 'type_job', 'period_rev', 'target_rev', 'target_po'));
    }

    public function grafikPonew()
    {
        // dd('Test');
        
        // Ubah menjadi
        $target_po = TargetPurchaseOrder::where('id', 3)->paginate(1);

        // Menghitung selisih dan tercapai
        $po = TargetPurchaseOrder::where('id', '>', 3)->get();
        $selisih = $po->pluck('value_grafik')->sum();
        $tercapai = $po->pluck('grand_total')->sum();

        return view('user.grafikPonew', compact('target_po', 'tercapai', 'selisih'));
    }
}

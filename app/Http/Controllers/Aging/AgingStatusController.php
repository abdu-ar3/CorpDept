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
}

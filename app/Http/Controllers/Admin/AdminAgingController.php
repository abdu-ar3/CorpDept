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
}

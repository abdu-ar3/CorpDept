@extends('layouts.users.main') 

@section("title") Aging Calculate @endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/fixedcolumns/4.2.2/css/fixedColumns.bootstrap4.min.css" rel="stylesheet"/>

<style>
    
    /*Top and bottom scrollbar*/
    .large-table-container-3 {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .large-table-container-3 table {
    }
    .large-table-fake-top-scroll-container-3 {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .large-table-fake-top-scroll-container-3 div {
    font-size: 1px;
    line-height: 1px;
    }
    
    
    /*Top and bottom scrollbar*/
    .example {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .example table {
    }
    .example-top {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .example-top div {
    font-size: 1px;
    line-height: 1px;
    }
    
    /*Top and bottom scrollbar*/
    .imb {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .imb table {
    }
    .imb-top {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .imb-top div {
    font-size: 1px;
    line-height: 1px;
    }
    /* End IMB */
    
    /*Top and bottom scrollbar*/
    .collocation {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .collocation table {
    }
    .collocation-top {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .collocation-top div {
    font-size: 1px;
    line-height: 1px;
    }
    /* End IMB */
    
    /*Top and bottom scrollbar*/
    .newsite {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .newsite table {
    }
    .newsite-top {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .newsite-top div {
    font-size: 1px;
    line-height: 1px;
    }
    /* End New Site */

    /*Top and bottom scrollbar*/
    .fiberoptik {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .fiberoptik table {
    }
    .fiberoptik-top {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .fiberoptik-top div {
    font-size: 1px;
    line-height: 1px;
    }
    /* End Fiber Optik */

    /*Top and bottom scrollbar*/
    .perijinanfo {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .perijinanfo table {
    }
    .perijinanfo-top {
    max-width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
    }
    .perijinanfo-top div {
    font-size: 1px;
    line-height: 1px;
    }
    /* End Fiber Optik */

</style>

@section("content")
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">AGING CALCULATE</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Aging CALCULATE
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="from-group col-sm-4">
                                <form action="{{ route('calculate.index') }}" method="GET">
                                    <select id="period" name="period" class="form-control mb-2">
                                        <option value="">--Select Period--</option>
                                        @foreach($pdashes as $per)
                                            <option value="{{ $per->id }}" {{ $per->id == $selectedPeriodeId ? 'selected' : '' }}>
                                                {{ $per->month_year }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Tampilkan Data</button>
                                </form>
                                    </form>
                                </div>


                            <!-- Card Kanan -->
                            <div class="col-sm-8">
                                <div id="what-is" class="card">
                                    @if ($selectedPeriode)
    <h5 class="card-title text-left">{{ $selectedPeriode->month_year }}</h5>
@else
    <h5 class="card-title text-left">Pilih periode terlebih dahulu</h5>
@endif
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            
        
                @foreach ($areas as $area)
                    @if ($area->area === "Summary")
                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">SUMMARY</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                <table class="table table-striped">
                                    <!-- Tabel Aging sesuai dengan area -->
                                    <thead>
                                        <tr>
                                        <th style="width:35%">Project</th>
                                        <th style="width:10%" class="table-primary col-xs-2">Target(Days)</th>
                                        <th style="width:10%">Jumlah Site</th>
                                        <th style="width:10%">Bobot</b></th>
                                        <th style="width:10%">Tercapai</b></th>
                                        <th>Persentase Tercapai</b></th>
                                        <th class="table-success ml-2">Final Achiev</b></th>
                                        <th>Site</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($area->aging as $ag)
                                        <tr>
                                                <td>{{$ag->project}}</td>
                                                <td>{{$ag->target}}</td>
                                        
                                                <td> <a href="#" data-toggle="modal" data-target="#exampleModal" data-project="{{ $ag->project }}" data-jumlahsite="{{ $ag->jumlah_site }}" data-tercapai="{{ $ag->tercapai }}" data-sitename="{{ $ag->tidak_tercapai }}" data-siteketerangan="#">{{$ag->jumlah_site}}</a></td>
                                    
                                                <td>{{$ag->bobot}}%</td>
                                                <td>{{$ag->tercapai}}</td>
                                                <td>{{$ag->persentase}}%</td>
                                                <td>{{$ag->final}}%</td>
                                                
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-danger"><span class="ft-radio font-medium-2"></span
                                                        ></a>
                                                </td>

                                        </tr>
                                        @endforeach
                                        <!-- Total untuk setiap area -->

                                        <?php
                                            $totalJumlahSite = $area->aging->sum('jumlah_site');
                                            $totalBobot = $area->aging->sum('bobot');
                                            $totalFinalAchiev = $area->aging->sum('final');
                                        ?>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            <!-- Hitung total jumlah site dan bobot sesuai dengan area -->
                                            <th>{{ $totalJumlahSite }}</th>
                                            <th>{{ $totalBobot }}</th>
                                            <th colspan="2"></th>
                                            <th>{{ $totalFinalAchiev }}</th>
                                            <th></th>
                                            <!-- Hitung total final achievement sesuai dengan area -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
            @endforeach

            @foreach ($areas as $area)
                @if ($area->area !== "Summary")
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-left">{{ $selectedPeriode->month_year }}</h5>

                                <h4 class="card-title text-center">{{ $area->area }}</h4>
                                <h5 class="card-title text-center">{{ $area->pm }}</h5>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="table-responsive">
            <table class="table table-striped">
                <!-- Tabel Aging sesuai dengan area -->
                <thead>
                    <tr>
                    <th style="width:35%">Project</th>
                    <th style="width:10%" class="table-primary col-xs-2">Target(Days)</th>
                    <th style="width:10%">Jumlah Site</th>
                    <th style="width:10%">Bobot</b></th>
                    <th style="width:10%">Tercapai</b></th>
                    <th>Persentase Tercapai</b></th>
                    <th class="table-success ml-2">Final Achiev</b></th>
                    <th>Site</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($area->aging as $ag)
                    <tr>
                            <td>{{$ag->project}}</td>
                            <td>{{$ag->target}}</td>
                    
                            <td> <a href="#" data-toggle="modal" data-target="#exampleModal" data-project="{{ $ag->project }}" data-jumlahsite="{{ $ag->jumlah_site }}" data-tercapai="{{ $ag->tercapai }}" data-sitename="{{ $ag->tidak_tercapai }}" data-siteketerangan="#">{{$ag->jumlah_site}}</a></td>
                
                            <td>{{$ag->bobot}}%</td>
                            <td>{{$ag->tercapai}}</td>
                            <td>{{$ag->persentase}}%</td>
                            <td>{{$ag->final}}%</td>
                            
                            <td>
                                <a href="#" class="btn btn-sm btn-danger"><span class="ft-radio font-medium-2"></span
                                    ></a>
                            </td>

                    </tr>
                    @endforeach
                    <!-- Total untuk setiap area -->

                    <?php
                        $totalJumlahSite = $area->aging->sum('jumlah_site');
                        $totalBobot = $area->aging->sum('bobot');
                        $totalFinalAchiev = $area->aging->sum('final');
                    ?>
                    <tr>
                        <th colspan="2">Total</th>
                        <!-- Hitung total jumlah site dan bobot sesuai dengan area -->
                        <th>{{ $totalJumlahSite }}</th>
                        <th>{{ $totalBobot }}%</th>
                        <th colspan="2"></th>
                        <th>{{ $totalFinalAchiev }}%</th>
                        <th></th>
                        <!-- Hitung total final achievement sesuai dengan area -->
                    </tr>
                </tbody>
            </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

        </div>
    </div>
    </div>
</div>
    <!-- END: Content-->

@endsection




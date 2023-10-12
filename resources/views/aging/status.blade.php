@extends('layouts.users.main') 

@section("title") Aging Status @endsection

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
                    <h3 class="content-header-title">STATUS AGING</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Status Aging
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">SIS</h4>
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
                                    <div class="large-table-fake-top-scroll-container-3">
                                    <div>&nbsp;</div>
                                    </div>
                                    <div class="large-table-container-3">

                                    <table id="sis" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sub Tipe</th>
                                                <th scope="col">Cust</th>
                                                <th scope="col">Nama Site</th>
                                                <th scope="col">Nilai SO / Estimasi SO</th>
                                                <th scope="col">Pic</th>
                                                <th scope="col">Progres Inv</th>
                                                <th scope="col">Target Aging (Day)</th>
                                                <th scope="col">Aging (Day)</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $idx = 1;
                                                @endphp
                                                @foreach($agingSis as $index => $asis)
                                                <tr>
                                                <td>{{ $asis->sub }}</td>
                                                <td>{{ $asis->cust }}</td>
                                                <td>{{ $asis->nama_site }}</td>
                                                <td>Rp. <?php echo number_format("$asis->nilai_so"); ?></td>
                                                <td>{{ $asis->pic }}</td>
                                                <td>{{ $asis->progres }}%</td>
                                                <td>{{ $asis->target_aging }}</td>
                                                <td>{{ $asis->realisasi }}</td>
                                                <td><div class="spinner-grow {{ $asis->realisasi > 90 ? $asis->realisasi > 120 ? 'text-danger' : 'text-warning' : 'text-success' }} role="status">
                                                    <span class="visually-hidden"></span>
                                                </div>
                                            </td>
                                                </tr>
                                            @endforeach
                                            </tfoot>
                                        </table>
                                    </div>

                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->

                <!-- Striped rows with inverse table end -->
                <!-- Sitac start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">SITAC</h4>
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
                                    <div class="example-top">
                                    <div>&nbsp;</div>
                                    </div>
                                    <div class="example">

                                    <table id="sitac" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sub Tipe</th>
                                                <th scope="col">Cust</th>
                                                <th scope="col">Nama Site</th>
                                                <th scope="col">Nilai SO / Estimasi SO</th>
                                                <th scope="col">Pic</th>
                                                <th scope="col">Progres Inv</th>
                                                <th scope="col">Target Aging (Day)</th>
                                                <th scope="col">Aging (Day)</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                            $idx = 1;
                                            @endphp
                                            @foreach($agingSitac as $index => $asit)
                                            <tr>
                                                <td>{{ $asit->sub }}</td>
                                                <td>{{ $asit->cust }}</td>
                                                <td>{{ $asit->nama_site }}</td>
                                                <td>Rp. <?php echo number_format("$asit->nilai_so"); ?></td>
                                                <td>{{ $asit->pic }}</td>
                                                <td>{{ $asit->progres }}%</td>
                                                <td>{{ $asit->target_aging }}</td>
                                                <td>{{ $asit->realisasi }}</td>
                                                <td><div class="spinner-grow {{ $asit->realisasi > 90 ? $asit->realisasi > 120 ? 'text-danger' : 'text-warning' : 'text-success' }} role="status">
                                                        <span class="visually-hidden"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tfoot>
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div>

                <!-- Start IMB -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMB</h4>
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
                                    <div class="imb-top">
                                    <div>&nbsp;</div>
                                    </div>
                                    <div class="imb">

                                    <table id="imb" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sub Tipe</th>
                                                <th scope="col">Cust</th>
                                                <th scope="col">Nama Site</th>
                                                <th scope="col">Nilai SO / Estimasi SO</th>
                                                <th scope="col">Pic</th>
                                                <th scope="col">Progres Inv</th>
                                                <th scope="col">Target Aging (Day)</th>
                                                <th scope="col">Aging (Day)</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $idx = 1;
                                            @endphp
                                            @foreach($agingImb as $index => $apbc)
                                                    <tr>
                                                        <td>{{ $apbc->sub }}</td>
                                                        <td>{{ $apbc->cust }}</td>
                                                        <td>{{ $apbc->nama_site }}</td>
                                                        <td>Rp. <?php echo number_format("$apbc->nilai_so"); ?></td>
                                                        <td>{{ $apbc->pic }}</td>
                                                        <td>{{ $apbc->progres }}%</td>
                                                        <td>{{ $apbc->target_aging }}</td>
                                                        <td>{{ $apbc->realisasi }}</td>
                                                        <td><div class="spinner-grow {{ $apbc->realisasi > 150 ? $apbc->realisasi > 180 ? 'text-danger' : 'text-warning' : 'text-success' }} role="status">
                                                                <span class="visually-hidden"></span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            </tfoot>
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- End IMB Content -->

                <!-- Start Collocation -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">COLLOCATION</h4>
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
                                    <div class="collocation-top">
                                    <div>&nbsp;</div>
                                    </div>
                                    <div class="collocation">

                                    <table id="collocation" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sub Tipe</th>
                                                <th scope="col">Cust</th>
                                                <th scope="col">Nama Site</th>
                                                <th scope="col">Nilai SO / Estimasi SO</th>
                                                <th scope="col">Pic</th>
                                                <th scope="col">Progres Inv</th>
                                                <th scope="col">Target Aging (Day)</th>
                                                <th scope="col">Aging (Day)</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $idx = 1;
                                            @endphp
                                            @foreach($agingCollo as $index => $apbc)
                                            <tr>
                                                <td>{{ $apbc->sub }}</td>
                                                <td>{{ $apbc->cust }}</td>
                                                <td>{{ $apbc->nama_site }}</td>
                                                <td>Rp. <?php echo number_format("$apbc->nilai_so"); ?></td>
                                                <td>{{ $apbc->pic }}</td>
                                                <td>{{ $apbc->progres }}%</td>
                                                <td>{{ $apbc->target_aging }}</td>
                                                <td>{{ $apbc->realisasi }}</td>
                                                <td><div class="spinner-grow {{ $apbc->realisasi > 150 ? $apbc->realisasi > 180 ? 'text-danger' : 'text-warning' : 'text-success' }} role="status">
                                                        <span class="visually-hidden"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tfoot>
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- End IMB Content -->
                
                <!-- Start New Site -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">NEW SITE</h4>
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
                                    <div class="newsite-top">
                                    <div>&nbsp;</div>
                                    </div>
                                    <div class="newsite">

                                    <table id="newSite" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sub Tipe</th>
                                                <th scope="col">Cust</th>
                                                <th scope="col">Nama Site</th>
                                                <th scope="col">Nilai SO / Estimasi SO</th>
                                                <th scope="col">Pic</th>
                                                <th scope="col">Progres Inv</th>
                                                <th scope="col">Target Aging (Day)</th>
                                                <th scope="col">Aging (Day)</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $idx = 1;
                                            @endphp
                                            @foreach($agingNew as $index => $apbc)
                                                <tr>
                                                    <td>{{ $apbc->sub }}</td>
                                                    <td>{{ $apbc->cust }}</td>
                                                    <td>{{ $apbc->nama_site }}</td>
                                                    <td>Rp. <?php echo number_format("$apbc->nilai_so"); ?></td>
                                                    <td>{{ $apbc->pic }}</td>
                                                    <td>{{ $apbc->progres }}%</td>
                                                    <td>{{ $apbc->target_aging }}</td>
                                                    <td>{{ $apbc->realisasi }}</td>
                                                    <td><div class="spinner-grow {{ $apbc->realisasi > 150 ? $apbc->realisasi > 180 ? 'text-danger' : 'text-warning' : 'text-success' }} role="status">
                                                            <span class="visually-hidden"></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tfoot>
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- End IMB Content -->
                
                <!-- Start Fiber Optik -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fiber Optik</h4>
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
                                    <div class="fiberoptik-top">
                                    <div>&nbsp;</div>
                                    </div>
                                    <div class="fiberoptik">

                                    <table id="fiberOptik" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sub Tipe</th>
                                                <th scope="col">Cust</th>
                                                <th scope="col">Nama Site</th>
                                                <th scope="col">Nilai SO / Estimasi SO</th>
                                                <th scope="col">Pic</th>
                                                <th scope="col">Progres Inv</th>
                                                <th scope="col">Target Aging (Day)</th>
                                                <th scope="col">Aging (Day)</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $idx = 1;
                                            @endphp
                                            @foreach($agingFiber as $index => $apbc)
                                            <tr>
                                                <td>{{ $apbc->sub }}</td>
                                                <td>{{ $apbc->cust }}</td>
                                                <td>{{ $apbc->nama_site }}</td>
                                                <td>Rp. <?php echo number_format("$apbc->nilai_so"); ?></td>
                                                <td>{{ $apbc->pic }}</td>
                                                <td>{{ $apbc->progres }}%</td>
                                                <td>{{ $apbc->target_aging }}</td>
                                                <td>{{ $apbc->realisasi }}</td>
                                                <td><div class="spinner-grow  {{ $apbc->realisasi > 150 ? $apbc->realisasi > 180 ? 'text-danger' : 'text-warning' : 'text-success' }} role="status">
                                                        <span class="visually-hidden"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tfoot>
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div>

                <!-- Start perijinan Fiber Optik -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Perijinan FO</h4>
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
                                    <div class="perijinanfo-top">
                                    <div>&nbsp;</div>
                                    </div>
                                    <div class="perijinanfo">

                                    <table id="perijinanFo" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sub Tipe</th>
                                                <th scope="col">Cust</th>
                                                <th scope="col">Nama Site</th>
                                                <th scope="col">Nilai SO / Estimasi SO</th>
                                                <th scope="col">Pic</th>
                                                <th scope="col">Progres Inv</th>
                                                <th scope="col">Target Aging (Day)</th>
                                                <th scope="col">Aging (Day)</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $idx = 1;
                                            @endphp
                                            @foreach($agingPfo as $index => $apbc)
                                            <tr>
                                                <td>{{ $apbc->sub }}</td>
                                                <td>{{ $apbc->cust }}</td>
                                                <td>{{ $apbc->nama_site }}</td>
                                                <td>Rp. <?php echo number_format("$apbc->nilai_so"); ?></td>
                                                <td>{{ $apbc->pic }}</td>
                                                <td>{{ $apbc->progres }}%</td>
                                                <td>{{ $apbc->target_aging }}</td>
                                                <td>{{ $apbc->realisasi }}</td>
                                                <td><div class="spinner-grow {{ $apbc->realisasi > 150 ? $apbc->realisasi > 180 ? 'text-danger' : 'text-warning' : 'text-success' }} role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tfoot>
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- End Perijinan Fiber Optik Content -->
            </div>
        </div>
    </div>
    

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    <!-- END: Content-->

<script>
    $(function () {
    var tableContainer = $(".large-table-container-3");
    var table = $(".large-table-container-3 table");
    var fakeContainer = $(".large-table-fake-top-scroll-container-3");
    var fakeDiv = $(".large-table-fake-top-scroll-container-3 div");

    var tableWidth = table.width();
    fakeDiv.width(tableWidth);

    fakeContainer.scroll(function () {
        tableContainer.scrollLeft(fakeContainer.scrollLeft());
    });
    tableContainer.scroll(function () {
        fakeContainer.scrollLeft(tableContainer.scrollLeft());
    });
    });
</script>

<script>
    $(function () {
    var tableContainer = $(".example");
    var table = $(".example table");
    var fakeContainer = $(".example-top");
    var fakeDiv = $(".example-top div");

    var tableWidth = table.width();
    fakeDiv.width(tableWidth);

    fakeContainer.scroll(function () {
        tableContainer.scrollLeft(fakeContainer.scrollLeft());
    });
    tableContainer.scroll(function () {
        fakeContainer.scrollLeft(tableContainer.scrollLeft());
    });
    });
</script>    

<!-- IMB SCRIPT -->
<script>
    $(function () {
    var tableContainer = $(".imb");
    var table = $(".imb table");
    var fakeContainer = $(".imb-top");
    var fakeDiv = $(".imb-top div");

    var tableWidth = table.width();
    fakeDiv.width(tableWidth);

    fakeContainer.scroll(function () {
        tableContainer.scrollLeft(fakeContainer.scrollLeft());
    });
    tableContainer.scroll(function () {
        fakeContainer.scrollLeft(tableContainer.scrollLeft());
    });
    });
</script>    

<!-- Collocation Script -->
<script>
    $(function () {
    var tableContainer = $(".collocation");
    var table = $(".collocation table");
    var fakeContainer = $(".collocation-top");
    var fakeDiv = $(".collocation-top div");

    var tableWidth = table.width();
    fakeDiv.width(tableWidth);

    fakeContainer.scroll(function () {
        tableContainer.scrollLeft(fakeContainer.scrollLeft());
    });
    tableContainer.scroll(function () {
        fakeContainer.scrollLeft(tableContainer.scrollLeft());
    });
    });
</script>    

<!-- New Site Script -->
<script>
    $(function () {
    var tableContainer = $(".newsite");
    var table = $(".newsite table");
    var fakeContainer = $(".newsite-top");
    var fakeDiv = $(".newsite-top div");

    var tableWidth = table.width();
    fakeDiv.width(tableWidth);

    fakeContainer.scroll(function () {
        tableContainer.scrollLeft(fakeContainer.scrollLeft());
    });
    tableContainer.scroll(function () {
        fakeContainer.scrollLeft(tableContainer.scrollLeft());
    });
    });
</script>    

<!-- Fiber Optik Script -->
<script>
    $(function () {
    var tableContainer = $(".fiberoptik");
    var table = $(".fiberoptik table");
    var fakeContainer = $(".fiberoptik-top");
    var fakeDiv = $(".fiberoptik-top div");

    var tableWidth = table.width();
    fakeDiv.width(tableWidth);

    fakeContainer.scroll(function () {
        tableContainer.scrollLeft(fakeContainer.scrollLeft());
    });
    tableContainer.scroll(function () {
        fakeContainer.scrollLeft(tableContainer.scrollLeft());
    });
    });
</script>    

<!-- Perijinan Fiber Optik Script -->
<script>
    $(function () {
    var tableContainer = $(".perijinanfo");
    var table = $(".perijinanfo table");
    var fakeContainer = $(".perijinanfo-top");
    var fakeDiv = $(".perijinanfo-top div");

    var tableWidth = table.width();
    fakeDiv.width(tableWidth);

    fakeContainer.scroll(function () {
        tableContainer.scrollLeft(fakeContainer.scrollLeft());
    });
    tableContainer.scroll(function () {
        fakeContainer.scrollLeft(tableContainer.scrollLeft());
    });
    });
</script>    


@endsection



@section('script')
<!-- FIxed Column -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#sis').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>

<!-- SITAC -->
<script>
$(document).ready(function() {
    var table = $('#sitac').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>

<!-- IMB -->
<script>
$(document).ready(function() {
    var table = $('#imb').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>

<!-- COLLOCATION -->
<script>
$(document).ready(function() {
    var table = $('#collocation').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>

<!-- New Site -->
<script>
$(document).ready(function() {
    var table = $('#newSite').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>

<!-- Fiber Optik-->
<script>
$(document).ready(function() {
    var table = $('#fiberOptik').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>

<!-- Perijinan FO -->
<script>
$(document).ready(function() {
    var table = $('#perijinanFo').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>

@endsection




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

@endsection




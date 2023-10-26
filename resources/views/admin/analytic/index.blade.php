@extends('layouts.admin') 

@section('title') Admin Analytic @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Admin Analytic</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Basic Tables
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
                                <h4 class="card-title">Data Tables</h4>
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
                                        <section id="card-bg-options">
                                        <div class="row">
                                            <div class="col-12 mt-3 mb-1">
                                                <h4 class="text-uppercase">Admin Analytic</h4>
                                            </div>
                                        </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-md-6 col-sm-12">
                                                    <div class="card text-white box-shadow-0 bg-info">
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <h4 class="card-title text-white">User Visit</h4>
                                                                    <h2 class="text-center"> <code>{{ $totalLogin }}</code></h2>
                                                                {{ $userIP }}
                                                                {{ $userIPv4 }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6 col-sm-12">
                                                    <div class="card text-white box-shadow-0 bg-danger">
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <h4 class="card-title text-white">Count User</h4>
                                                                    <h2 class="text-center"> <code>{{ $userCount }}</code></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-xl-3 col-md-6 col-sm-12">
                                                    <div class="card text-white box-shadow-0 bg-gradient-x-primary">
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <h4 class="card-title text-white">Count Dept</h4>
                                                                    <h2 class="text-center"> <code>{{ $deptCount }}</code></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6 col-sm-12">
                                                    <div class="card text-white box-shadow-0 bg-gradient-y-warning">
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <h4 class="card-title text-white">Count Admin</h4>
                                                                    <h2 class="text-center"> <code>21</code></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- // Card bg options section end -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END: Content-->
<!-- Tempat untuk menampilkan hasil data -->

    
@endsection
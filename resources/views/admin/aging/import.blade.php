@extends('layouts.admin') 

@section('title') ITEM KPI @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">ADMIN AGING</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Aging
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tampilkan pesan sukses jika ada --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Tampilkan pesan error jika ada --}}
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="content-body">

                <!-- Start SIS -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMPORT AGING SIS</h4>
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
                                
                                    <!-- Start SIS -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <form action="{{ route('asis_import') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group">
                                                                    <input type="file" name="file" class="form-control" placeholder="Search By Customer" name="average">
                                                                    <div class="input-group-append">
                                                                        <input type="submit" value="Import" class="btn btn-primary">
                                                                    </div>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <blockquote class="blockquote mb-0">
                                                                <p>Last Update</p>
                                                                    @foreach($agingSis as $index => $as)
                                                                    @endforeach
                                                                    <footer class="blockquote-footer">
                                                                        Tanggal update,
                                                                        @if($as->created_at)
                                                                            <cite title="Source Title">
                                                                                {{ date('l, d F Y', strtotime($as->created_at)) }}
                                                                            </cite>
                                                                        @else
                                                                            <cite title="Source Title">
                                                                                Tidak ada tanggal update
                                                                            </cite>
                                                                        @endif
                                                                    </footer>
                                                                    
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End SIS -->
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End SIS -->

                <!-- Start SITAC -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMPORT AGING SITAC</h4>
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
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group">
                                                                    <input type="file" name="file" class="form-control" placeholder="Search By Customer" name="average">
                                                                    <div class="input-group-append">
                                                                        <input type="submit" value="Import" class="btn btn-primary">
                                                                    </div>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <blockquote class="blockquote mb-0">
                                                                <p>Last Update</p>
                                                                    @foreach($agingSitac as $index => $as)
                                                                    @endforeach
                                                                    <footer class="blockquote-footer">
                                                                        Tanggal update,
                                                                        @if($as->created_at)
                                                                            <cite title="Source Title">
                                                                                {{ date('l, d F Y', strtotime($as->created_at)) }}
                                                                            </cite>
                                                                        @else
                                                                            <cite title="Source Title">
                                                                                Tidak ada tanggal update
                                                                            </cite>
                                                                        @endif
                                                                    </footer>
                                                                </blockquote>
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
                <!-- End SITAC -->

                <!-- Start IMB -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMPORT AGING IMB</h4>
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
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group">
                                                                    <input type="file" name="file" class="form-control" placeholder="Search By Customer" name="average">
                                                                    <div class="input-group-append">
                                                                        <input type="submit" value="Import" class="btn btn-primary">
                                                                    </div>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <blockquote class="blockquote mb-0">
                                                                <p>Last Update</p>
                                                                    @foreach($agingImb as $index => $aim)
                                                                    @endforeach
                                                                    <footer class="blockquote-footer">
                                                                        Tanggal update,
                                                                        @if($aim->created_at)
                                                                            <cite title="Source Title">
                                                                                {{ date('l, d F Y', strtotime($aim->created_at)) }}
                                                                            </cite>
                                                                        @else
                                                                            <cite title="Source Title">
                                                                                Tidak ada tanggal update
                                                                            </cite>
                                                                        @endif
                                                                    </footer>
                                                                </blockquote>
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
                <!-- End IMB -->

                <!-- Start COLLOCATION -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMPORT AGING COLLOCATION</h4>
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
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group">
                                                                    <input type="file" name="file" class="form-control" placeholder="Search By Customer" name="average">
                                                                    <div class="input-group-append">
                                                                        <input type="submit" value="Import" class="btn btn-primary">
                                                                    </div>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <blockquote class="blockquote mb-0">
                                                                <p>Last Update</p>
                                                                    @foreach($agingCollo as $index => $aco)
                                                                    @endforeach
                                                                    <footer class="blockquote-footer">
                                                                        Tanggal update,
                                                                        @if($aco->created_at)
                                                                            <cite title="Source Title">
                                                                                {{ date('l, d F Y', strtotime($aco->created_at)) }}
                                                                            </cite>
                                                                        @else
                                                                            <cite title="Source Title">
                                                                                Tidak ada tanggal update
                                                                            </cite>
                                                                        @endif
                                                                    </footer>
                                                                </blockquote>
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
                <!-- End COLLOCATION -->

                <!-- Start NEW SITE -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMPORT AGING NEW SITE</h4>
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
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group">
                                                                    <input type="file" name="file" class="form-control" placeholder="Search By Customer" name="average">
                                                                    <div class="input-group-append">
                                                                        <input type="submit" value="Import" class="btn btn-primary">
                                                                    </div>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <blockquote class="blockquote mb-0">
                                                                <p>Last Update</p>
                                                                    @foreach($agingNew as $index => $ane)
                                                                    @endforeach
                                                                    <footer class="blockquote-footer">
                                                                        Tanggal update,
                                                                        @if($ane->created_at)
                                                                            <cite title="Source Title">
                                                                                {{ date('l, d F Y', strtotime($ane->created_at)) }}
                                                                            </cite>
                                                                        @else
                                                                            <cite title="Source Title">
                                                                                Tidak ada tanggal update
                                                                            </cite>
                                                                        @endif
                                                                    </footer>
                                                                </blockquote>
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
                <!-- End NEW SITE -->

                <!-- Start FIBER OPTIK -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMPORT AGING FIBER OPTIK</h4>
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
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group">
                                                                    <input type="file" name="file" class="form-control" placeholder="Search By Customer" name="average">
                                                                    <div class="input-group-append">
                                                                        <input type="submit" value="Import" class="btn btn-primary">
                                                                    </div>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <blockquote class="blockquote mb-0">
                                                                <p>Last Update</p>
                                                                    @if($agingFiber->isEmpty())
                                                                        <footer class="blockquote-footer">
                                                                            Tidak ada tanggal update
                                                                        </footer>
                                                                    @else
                                                                        @foreach($agingFiber as $index => $afi)
                                                                            <!-- Bagian HTML lainnya yang ingin Anda tampilkan -->
                                                                            <footer class="blockquote-footer">
                                                                                Tanggal update,
                                                                                @if($afi->created_at)
                                                                                    <cite title="Source Title">
                                                                                        {{ date('l, d F Y', strtotime($afi->created_at)) }}
                                                                                    </cite>
                                                                                @else
                                                                                    <cite title="Source Title">
                                                                                        Tidak ada tanggal update
                                                                                    </cite>
                                                                                @endif
                                                                            </footer>
                                                                        @endforeach
                                                                    @endif
                                                                </blockquote>
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
                <!-- End FIBER OPTIK -->

                <!-- Start PERIJINAN FO  -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">IMPORT AGING PERIJINAN FO </h4>
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
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group">
                                                                    <input type="file" name="file" class="form-control" placeholder="Search By Customer" name="average">
                                                                    <div class="input-group-append">
                                                                        <input type="submit" value="Import" class="btn btn-primary">
                                                                    </div>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <blockquote class="blockquote mb-0">
                                                                <p>Last Update</p>
                                                                    @if($agingPfo->isEmpty())
                                                                        <footer class="blockquote-footer">
                                                                            Tidak ada tanggal update
                                                                        </footer>
                                                                    @else
                                                                        @foreach($agingPfo as $index => $apfo)
                                                                            <!-- Bagian HTML lainnya yang ingin Anda tampilkan -->
                                                                            <footer class="blockquote-footer">
                                                                                Tanggal update,
                                                                                @if($apfo->created_at)
                                                                                    <cite title="Source Title">
                                                                                        {{ date('l, d F Y', strtotime($apfo->created_at)) }}
                                                                                    </cite>
                                                                                @else
                                                                                    <cite title="Source Title">
                                                                                        Tidak ada tanggal update
                                                                                    </cite>
                                                                                @endif
                                                                            </footer>
                                                                        @endforeach
                                                                    @endif

                                                                </blockquote>
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
                <!-- End PERIJINAN FO  -->



            </div>
        </div>
    <!-- END: Content-->
<!-- Tempat untuk menampilkan hasil data -->



@endsection
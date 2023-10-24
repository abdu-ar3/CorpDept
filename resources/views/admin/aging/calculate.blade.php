@extends('layouts.admin') 

@section('title') Admin Aging Calculate @endsection
<link href="https://cdn.datatables.net/v/dt/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/datatables.min.css" rel="stylesheet"/>

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Admin Aging Calculate</h3>
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
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form action="{{ route('aging_import') }}" method="POST" enctype="multipart/form-data">
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
                                                                
                                        </div>
                                    </div>
                                    <table class="table" id="example">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">PROJECT</th>
                                        <th scope="col">PERIODE</th>
                                        <th scope="col">AREA</th>
                                        <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($agingCalculate as $acal)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$acal->project}}</td>
                                            <td>{{$acal->area->pdash->month_year}}</td>
                                            <td>{{$acal->area->area}}</td>            
                                        
                                            <td>
                                                    <form onsubmit="return confirm('Really ??')" class="d-inline" action="{{route('aging.delete', [$acal->id])}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-sm btn-danger"><span class="ft-trash-2"></span></button>
                                                    </form>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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


<!-- Yajra Button JS -->
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sl-1.6.2/datatables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'pdf', 'print', 'excel'
        ]
    } );
} );
</script>
@endsection
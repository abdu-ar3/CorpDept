@extends('layouts.admin') 

@section('title') Admin Edit HC Purchase Order @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Edit HighChart PO</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Admin HighChart PO Edit
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
                                <h4 class="card-title">KPI HC ADMIN</h4>
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
                                    <form
                                        enctype="multipart/form-data"
                                        class="bg-white shadow-sm p-3"
                                        action="{{ route('hcpo.update', $hcPo->id) }}"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="type_job_id">Select Type Job:</label>
                                            <select name="type_job_id" id="type_job_id" class="form-control">
                                                <option value="">Select Type Job</option>
                                                @foreach($typeJob as $tj)
                                                    <option option value="{{$tj->id}}">{{$tj->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label for="value">Value Purchase Order:</label>
                                                <input type="number" name="value" class="form-control"  value="{{ $hcPo->value }}"  required>
                                        </div>
                                    

                                        <button type="submit" class="btn btn-sm btn-primary">
                                            Submit
                                        </button>
                                    </form>
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
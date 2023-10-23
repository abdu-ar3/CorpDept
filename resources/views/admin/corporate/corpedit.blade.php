@extends('layouts.admin') 

@section('title') Admin Dashboard Edit Corp Month @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Edit Corp Month</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Admin Dashbaord Edit Corp Month
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
                                <h4 class="card-title">KPI CORP Admin</h4>
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
                                        action="{{ route('corp.corpupdate', $corp->id) }}"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="period_id">Select Period:</label>
                                            <select name="period_id" id="period_id" class="form-control">
                                                <option value="">Pilih Periode</option>
                                                @foreach($period as $per)
                                                    <option value="{{ $per->id }}" @if ($corp->period_id == $per->id) selected @endif>{{ $per->month_year }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                                <label for="value_rev">Value Reveneu:</label>
                                                <input type="number" name="value_rev" value="{{ $corp->value_rev }}"  class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="value_po">Value Purchase Order:</label>
                                                <input type="number" name="value_po" class="form-control" value="{{ $corp->value_po }}"  required>
                                        </div>
                                        <div class="form-group">
                                                <label for="value_aging">Value Aging:</label>
                                                <input type="number" name="value_aging" class="form-control" value="{{ $corp->value_aging }}" required>
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
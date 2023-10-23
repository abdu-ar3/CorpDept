@extends('layouts.admin') 

@section('title') Admin Dashboard Corporate @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">ADMIN Dashboard</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Admin Dashbaord
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

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
                                  <div class="row mb-2 ml-2">
                                        <div class="col-md-12 text-right">
                                            <a
                                                href=""
                                                class="btn btn-sm btn-info"
                                                data-toggle="modal"
                                                data-target="#corpMonthModal"
                                                ><span class="ft-plus-square font-medium-2"></span
                                            ></a>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Period</th>
                                            <th scope="col">Value Reveneu</th>
                                            <th scope="col">Value Purchase Order</th>
                                            <th scope="col">Aging</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($corpMonth as $cmo)
                                                <tr>
                                                    <td>{{ $cmo->pdash->month_year }}</td>
                                                    <td>{{$cmo->value_rev}}</td>
                                                    <td>{{$cmo->value_po}}</td>
                                                    <td>{{$cmo->value_aging}}</td>
                                                    <td>
                                                        <a href="{{route('corp.corpubah', [$cmo->id])}}" class="btn btn-warning btn-sm">Update</a>
                                                        <form onsubmit="return confirm('Delete this Revenue permanently?')" class="d-inline" action="{{route('corp.corpdelete', $cmo->id)}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
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
                

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Admin Reveneu</h4>
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

                                    <div class="row mb-2 ml-2">
                                        <div class="col-md-12 text-right">
                                            <a
                                                href=""
                                                class="btn btn-sm btn-info"
                                                data-toggle="modal"
                                                data-target="#exampleModal"
                                                ><span class="ft-plus-square font-medium-2"></span
                                            ></a>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Period</th>
                                            <th scope="col">Type Job</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($adminRev as $arev)
                                                <tr>
                                                    @if($arev->pdashes)
                                                        <td>{{$arev->pdashes->month_year}}</td>
                                                    @else
                                                        <td>N/A</td>
                                                    @endif
                                                    <td>{{$arev->typeJob->name}}</td>
                                                    <td>{{$arev->value}}</td>
                                                    <td>
                                                        <a href="{{route('corp.edit', [$arev->id])}}" class="btn btn-warning btn-sm">Update</a>
                                                        <form onsubmit="return confirm('Delete this Revenue permanently?')" class="d-inline" action="{{route('corp.destroy', $arev->id)}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Admin Purchase Order</h4>
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

                                    <div class="row mb-2 ml-2">
                                        <div class="col-md-12 text-right">
                                            <a
                                                href=""
                                                class="btn btn-sm btn-info"
                                                data-toggle="modal"
                                                data-target="#purchaseModal"
                                                ><span class="ft-plus-square font-medium-2"></span
                                            ></a>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Period</th>
                                            <th scope="col">Type Job</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($adminPo as $apo)
                                                <tr>
                                                    @if($apo->pdashes)
                                                        <td>{{$apo->pdashes->month_year}}</td>
                                                    @else
                                                        <td>N/A</td>
                                                    @endif
                                                    <td>{{$apo->typeJob->name}}</td>
                                                    <td>{{$apo->value}}</td>
                                                    <td>
                                                        <a href="{{route('corp.ubah', [$apo->id])}}" class="btn btn-warning btn-sm">Update</a>
                                                        <form onsubmit="return confirm('Delete this Revenue permanently?')" class="d-inline" action="{{route('corp.delete', $apo->id)}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
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


<!-- Modal CCorp Month -->
<div
    class="modal fade"
    id="corpMonthModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="corpMonthModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-lg mr-2" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="corpMonthModalLabel">Create Corp Month</h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form
                    enctype="multipart/form-data"
                    class="bg-white shadow-sm p-3"
                    action="{{route('corp.corpsave')}}"
                    method="POST"
                >
                    @csrf

                    <div class="form-group">
                        <label for="period_id">Select Period:</label>
                        <select name="period_id" id="period_id" class="form-control">
                            <option value="">Pilih Periode</option>
                            @foreach($period as $per)
                                <option option value="{{$per->id}}">{{$per->month_year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="value_rev">Value Reveneu:</label>
                            <input type="number" name="value_rev" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="value_po">Value Purchase Order:</label>
                            <input type="number" name="value_po" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="value_aging">Value Aging:</label>
                            <input type="number" name="value_aging" class="form-control" required>
                    </div>
                

                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- Modal Reveneu -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-lg mr-2" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form
                    enctype="multipart/form-data"
                    class="bg-white shadow-sm p-3"
                    action="{{route('corp.store')}}"
                    method="POST"
                >
                    @csrf

                    <div class="form-group">
                        <label for="period_id">Select Period:</label>
                        <select name="period_id" id="period_id" class="form-control">
                            <option value="">Pilih Periode</option>
                            @foreach($period as $per)
                                <option option value="{{$per->id}}">{{$per->month_year}}</option>
                            @endforeach
                        </select>
                    </div>
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
                            <label for="value">Value Reveneu:</label>
                            <input type="number" name="value" class="form-control" required>
                    </div>
                

                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>


<!-- Modal Purchase Order -->
<div
    class="modal fade"
    id="purchaseModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="purchaseModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-lg mr-2" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="purchaseModalLabel">Create</h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form
                    enctype="multipart/form-data"
                    class="bg-white shadow-sm p-3"
                    action="{{route('corp.save')}}"
                    method="POST"
                >
                    @csrf

                    <div class="form-group">
                        <label for="period_id">Select Period:</label>
                        <select name="period_id" id="period_id" class="form-control">
                            <option value="">Pilih Periode</option>
                            @foreach($period as $per)
                                <option option value="{{$per->id}}">{{$per->month_year}}</option>
                            @endforeach
                        </select>
                    </div>
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
                            <label for="value">Value Reveneu:</label>
                            <input type="number" name="value" class="form-control" required>
                    </div>
                

                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>







    
@endsection
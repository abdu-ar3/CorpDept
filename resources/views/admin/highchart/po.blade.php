@extends('layouts.admin') 

@section('title') Admin Dashboard HighChart Purchase Order @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">HighChart PO</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active"> HighChart Purchase Order
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">KPI HighChart PO Admin</h4>
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
                                                <th scope="col">#</th>
                                                <th scope="col">Type Job Name</th>
                                                <th scope="col">Value Purchase</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($hcPurchase as $hcpur)
                                                <tr>
                                                    <td>#</td>
                                                    <td>{{ $hcpur->typeJob->name }}</td>
                                                    <td>{{$hcpur->value}}</td>
                                                    <td>
                                                        <a href="{{route('hcpo.edit', [$hcpur->id])}}" class="btn btn-warning btn-sm">Update</a>
                                                        <form onsubmit="return confirm('Delete this PO permanently?')" class="d-inline" action="{{route('hcpo.destroy', $hcpur->id)}}" method="POST">
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
                
                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">KPI HighChart Cust PO Admin</h4>
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
                                                data-target="#hcPocustModal"
                                                ><span class="ft-plus-square font-medium-2"></span
                                            ></a>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Type Job Name</th>
                                                <th scope="col">Cust</th>
                                                <th scope="col">Value Purchase Order</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($hcPurcust as $hcpur)
                                                <tr>
                                                    <td>#</td>
                                                    <td>{{ $hcpur->hcTypejob->name }}</td>
                                                    <td>{{$hcpur->cust}}</td>
                                                    <td>{{$hcpur->value}}</td>
                                                    <td>
                                                        <a href="{{route('hcpo.ubah', [$hcpur->id])}}" class="btn btn-warning btn-sm">Update</a>
                                                        <form onsubmit="return confirm('Delete this Purchase Order Cust permanently?')" class="d-inline" action="{{route('hcpo.delete', $hcpur->id)}}" method="POST">
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
                    action="{{route('hcpo.store')}}"
                    method="POST"
                >
                    @csrf

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
                            <label for="value">Value Po:</label>
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


<!-- Modal Reveneu Cust -->
<div
    class="modal fade"
    id="hcPocustModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="hcPocustModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-lg mr-2" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hcPocustModalLabel">Create</h5>
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
                    action="{{route('hcpo.save')}}"
                    method="POST"
                >
                    @csrf

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
                            <label for="nameCust">Name Customer:</label>
                            <input type="text" name="nameCust" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="value">Value Purchase Order:</label>
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
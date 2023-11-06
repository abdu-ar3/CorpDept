@extends('layouts.admin') 

@section('title') Admin Event KPI DEPT @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Admin Event</h3>
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

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

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
                                                    <th>ID</th>
                                                    <th>Start Event</th>
                                                    <th>End Event</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($events as $ev)
                                                <tr>
                                                    <td>{{$ev->id}}</td>
                                                    <td>{{$ev->start_event}}</td>
                                                    <td>{{$ev->end_event}}</td>
                                                    <td>
                                                            <form onsubmit="return confirm('Really ??')" class="d-inline" action="{{route('event.destroy', $ev->id)}}" method="POST">
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


<!-- Modal Event -->
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
                    action="{{route('event.store')}}"
                    method="POST"
                >
                    @csrf

                    <div class="form-group">
                        <label for="start_event">Select Event:</label>
                        <div class="row">
                            <div class="col-6">
                                <select name="start_month" id="start_month" class="form-control">
                                    <option value="">Select Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="Sept">Sept</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                    <!-- Tambahkan opsi bulan lainnya di sini -->
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="start_year" id="start_year" class="form-control">
                                    <option value="">Select Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <!-- Tambahkan opsi tahun lainnya di sini -->
                                </select>
                            </div>
                            <input type="hidden" name="start_event" id="start_event">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="end_event">Select Event:</label>
                        <div class="row">
                            <div class="col-6">
                                <select name="end_month" id="end_month" class="form-control">
                                    <option value="">Select Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="Sept">Sept</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                    <!-- Tambahkan opsi bulan lainnya di sini -->
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="end_year" id="end_year" class="form-control">
                                    <option value="">Select Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <!-- Tambahkan opsi tahun lainnya di sini -->
                                </select>
                            </div>
                            <input type="hidden" name="end_event" id="end_event">
                        </div>
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


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Ambil elemen select bulan dan tahun
        var startMonth = document.getElementById("start_month");
        var startYear = document.getElementById("start_year");

        // Ambil elemen input start_event
        var startEvent = document.getElementById("start_event");

        // Tambahkan event listener untuk menggabungkan bulan dan tahun saat terjadi perubahan
        startMonth.addEventListener("change", updateStartEvent);
        startYear.addEventListener("change", updateStartEvent);

        // Fungsi untuk menggabungkan bulan dan tahun ke dalam start_event
        function updateStartEvent() {
            var selectedMonth = startMonth.options[startMonth.selectedIndex].value;
            var selectedYear = startYear.options[startYear.selectedIndex].value;
            startEvent.value = selectedMonth + " " + selectedYear;
        }
    });
</script>
    
@endsection
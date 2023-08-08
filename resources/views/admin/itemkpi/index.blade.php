@extends('layouts.admin') 

@section('title') ITEM KPI @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">ITEM KPI</h3>
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
                                    <div class="row g-12">
                                        <div class="from-group mb-2 ml-2">
                                        <label for="period_id">Pilih Periode:</label>
                                        <!-- Select option untuk memilih periode -->
                                        <select id="periode">
                                            <option value="1">Januari 2023 - Juni 2023</option>
                                            <option value="2">Juli 2023 - Desember 2023</option>
                                            <!-- Tambahkan pilihan periode lainnya sesuai kebutuhan -->
                                        </select>
                                        </div>
                                        <div class="from-group mb-2 ml-2">
                                        <form action="{{ route('admin.itemkpi.filter') }}" method="get">
                                            <div class="form-group">
                                                <label for="user">Pilih User:</label>
                                                <select name="user_id" class="form-control">
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                        </form>
                                        <hr>
                                        @if ($selectedUser)
                                            <h2>Item KPI for {{ $selectedUser->name }}</h2>
                                            @if ($itemKpis->isEmpty())
                                                <p>Tidak ada data item KPI untuk user ini.</p>
                                            @else
                                                <ul>
                                                    @foreach ($itemKpis as $itemKpi)
                                                        {{ $itemKpi->name }}
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                        @endif
                                        </div>

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
                                    </div>
                                    <p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>

                                    <div id="data-container"></div>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>KPI</th>
                                                    <th>TARGET</th>
                                                    <th>WEIGHT</th>
                                                    <th>SKI</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($itemKpis as $ik)
                                                <tr>
                                                    <td>{{$ik->item}}</td>
                                                    <td>{{$ik->target}}</td>
                                                    <td>{{$ik->bobot}}</td>
                                                    <td>{{$ik->ski}}</td>
                                                    <td>
                                                        @can('admin')
                                                            <form onsubmit="return confirm('Really ??')" class="d-inline" action="#" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button class="btn btn-sm btn-danger"><span class="ft-trash-2"></span></button>
                                                            </form>
                                                        @endcan
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
        </div>
    <!-- END: Content-->
<!-- Tempat untuk menampilkan hasil data -->



<!-- Modal Areaa -->
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
                    action="{{ route('admin.itemkpi.store') }}"
                    method="POST"
                >
                    @csrf

                    <div class="form-group">
                            <label for="item">Nama Item KPI:</label>
                            <input type="text" name="item" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="target">Target:</label>
                            <input type="number" name="target" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="bobot">Bobot:</label>
                            <input type="number" name="bobot" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="ski">SKI:</label>
                            <input type="number" name="ski" class="form-control" required>
                    </div>
                    @if ($selectedUser)
                        <input type="hidden" name="user_id" value="{{ $selectedUser->id }}">
                    @endif

                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>



<!-- Tambahkan library jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Tangkap event perubahan pada select option periode
    $('#periode').change(function() {
        // Ambil nilai periode yang dipilih
        var selectedPeriode = $(this).val();

        // Kirim permintaan ke server menggunakan Ajax
      // Kirim permintaan ke server menggunakan Fetch API
        fetch('/get-data-by-periode' + selectedPeriode)
            .then(response => response.text())
            .then(data => {
                // Proses data yang diterima dari server jika sukses
                // Misalnya, tampilkan data di dalam div dengan id "data-container"
                document.getElementById('data-container').innerHTML = data;
            })
            .catch(error => {
                // Tangani kesalahan jika terjadi
                alert('Terjadi kesalahan saat mengambil data.');
                console.error(error);
            });
    });
</script>


    
@endsection
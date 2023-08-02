@extends('layouts.admin') 

@section('title') REALIZATION @endsection

@section('content')

<!-- BEGIN: Content-->
        <div class="content-wrapper">
            <div class="content-wrapper-before"  style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">REALIZATION</h3>
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
                                    <div class="row mb-2">
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
                                    <p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ITEM KPI</th>
                                                    <th>PERIOD</th>
                                                    <th>REALIZATION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($realization as $real)
                                                <tr>
                                                    <td>{{$real->itemKpi->item}}</td>
                                                    <td>{{$real->period->start_month}} {{$real->period->start_year}} s/d {{$real->period->end_month}} {{$real->period->end_year}} </td>
                                                    <td>{{$real->realization}}</td>
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
                    action="#"
                    method="POST"
                >
                    @csrf


                    <div class="form-group">
                        <label for="period_id">Pilih Periode:</label>

                        <select name="period_id" id="period_id" class="form-control">
                            <option value="">Pilih Periode</option>
                            @foreach ($periods as $period)
                                <option value="{{ $period->id }}" {{ $selectedPeriod && $selectedPeriod->id == $period->id ? 'selected' : '' }}>{{ $period->start_month }} {{ $period->start_year }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div id="realization-form-container">
                        @if ($selectedPeriod)
                            <h2>Data Realisasi untuk Periode: {{ $period->start_month }}</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Item KPI</th>
                                        <th>Target</th>
                                        <th>Realisasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item_kpi as $item)
                                        <tr>
                                            <td>{{ $item->item }}</td>
                                            <td>{{ $item->target }}</td>
                                            <td>
                                                <input type="number" name="realizations[{{ $item->id }}]" class="form-control" value="{{ $realizations->where('item_kpi_id', $item->id)->first()->value ?? '' }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
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
        // Tambahkan event listener pada dropdown periode untuk menampilkan form sesuai periode
        const periodDropdown = document.getElementById('period_id');
        const realizationFormContainer = document.getElementById('realization-form-container');

        periodDropdown.addEventListener('change', function() {
            const selectedPeriodId = this.value;
            const selectedPeriod = {!! json_encode($periods->keyBy('id')) !!}[selectedPeriodId];

            realizationFormContainer.innerHTML = '';

            if (selectedPeriod) {
                const header = document.createElement('h2');
                header.textContent = 'Data Realisasi untuk Periode: ' + selectedPeriod.nama;

                const table = document.createElement('table');
                table.innerHTML = `
                    <thead>
                        <tr>
                            <th>Item KPI</th>
                            <th>Target</th>
                            <th>Realisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item_kpi as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->target }}</td>
                                <td>
                                    <input type="number" name="realizations[{{ $item->id }}]" class="form-control" value="">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                `;

                realizationFormContainer.appendChild(header);
                realizationFormContainer.appendChild(table);
            }
        });
    </script>



@endsection
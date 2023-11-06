@extends('layouts.users.main') 

@section("title") Dashboard @endsection

@section("style")
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/fixedcolumns/4.2.2/css/fixedColumns.bootstrap4.min.css" rel="stylesheet"/>

    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

    <style>
        /* CSS Style for the progress bar */
        .my-slider-progress {
            background: #A39494;
        }
        
        .my-slider-progress-bar {
            background: #E72D2D;
            height: 2px;
            transition: width 400ms ease;
            width: 0;
        }
    </style>

@endsection

@section("content")

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Dashboard KPI Corporate</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Dashboard KPI Corporate
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
                                <h4 class="card-title">SUMMARY</h4>
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
                                    <div class="splide">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide"> 
                                            <section id="card-border-options">
                                                <div class="row ml-1 mr-2">
                                                    <div class="col-sm-12 col-md-12 col-sm-12">
                                                        <div class="card box-shadow-0 border-info">
                                                            <div class="card-content collapse show">
                                                                <div class="card-body">
                                                                    <h4 class="card-title text-center"><code>SEMESTER 1</code></h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">KPI</th>
                                                                                <th scope="col">BOBOT</th>
                                                                                <th scope="col">TARGET SEMESTER 1</th>
                                                                                <th scope="col">PENCAPAIAN</th>
                                                                                <th scope="col">% PENCAPAIAN</th>
                                                                                <th scope="col">NILAI AKHIR</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Revenue Perusahaan</td>
                                                                                <td>40%</td>
                                                                                <td> 150.190.649.041 </td>
                                                                                <td> 79.751.856.043 </td>
                                                                                <td>53%</td>
                                                                                <td>21%</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Purchase Order</td>
                                                                                <td>40%</td>
                                                                                <td> 165.200.000.000 </td>
                                                                                <td> 65.398.439.272 </td>
                                                                                <td>40%</td>
                                                                                <td>12%</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Aging Pekerjaan</td>
                                                                                <td>30%</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>13%</td>
                                                                                <td>4%</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Total</td>
                                                                                <td>100%</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="table-info">37%</td>
                                                                            </tr>
                                                                        </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                </div>
                                            </section></li>
                                            <!-- ... Add more slides as needed -->
                                            <li class="splide__slide"> <section id="card-border-options">
                                                <div class="row ml-1 mr-2">
                                                    <div class="col-sm-12 col-md-12 col-sm-12">
                                                        <div class="card box-shadow-0 border-info">
                                                            <div class="card-content collapse show">
                                                                <div class="card-body">
                                                                    <h4 class="card-title text-center"><code>SEMESTER 2</code></h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">KPI</th>
                                                                                <th scope="col">BOBOT</th>
                                                                                <th scope="col">TARGET SEMESTER 1</th>
                                                                                <th scope="col">PENCAPAIAN</th>
                                                                                <th scope="col">% PENCAPAIAN</th>
                                                                                <th scope="col">NILAI AKHIR</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Revenue Perusahaan</td>
                                                                                <td>40%</td>
                                                                                <td> 150.190.649.041 </td>
                                                                                <td></td>
                                                                                <td>%</td>
                                                                                <td>%</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Purchase Order</td>
                                                                                <td>40%</td>
                                                                                <td> 165.200.000.000 </td>
                                                                                <td>  </td>
                                                                                <td>%</td>
                                                                                <td>%</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Aging Pekerjaan</td>
                                                                                <td>30%</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>%</td>
                                                                                <td>%</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Total</td>
                                                                                <td>100%</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="table-info">%</td>
                                                                            </tr>
                                                                        </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                </div>
                                            </section></li>
                                            <!-- ... Add more slides as needed -->
                                        </ul>
                                    </div>

                                        <!-- Add the progress bar element -->
                                        <div class="my-slider-progress">
                                            <div class="my-slider-progress-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">History Month Corporate</h4>
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
                                

                                    <div class="responsive">
                                    @foreach ($data as $period => $revenueAchievs)
                                    <div class="card pull-up ml-2 mr-2" style="background-color: #E7E7E7;">
                                        <div class="card-header" style="background-color: #E7E7E7;">
                                            <h4 class="card-title text-center">{{ $period }}</h4>
                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                            <span class="badge badge-pill badge-info float-right m-0">Done</span>
                                            
                                        </div>
                                        <div class="card-content collapse show">
                                            @foreach ($revenueAchievs as $rev)

                                                @php
                                                    $pencapaianrev = $rev->value_rev;
                                                    $targetrev = 25000000000;
                                                    $prev = ($pencapaianrev / $targetrev) * 100;
                                                    
                                                    $pencapaianpo = $rev->value_po;
                                                    $targetpo = 27533333333;
                                                    $ppo = ($pencapaianpo / $targetpo) * 100;



                                                @endphp
                                            <div class="card-body">
                                                <h5 class="text-bold-600"><i class="bi bi-wallet2 danger font-medium-4"></i> Revenue. <span class="info"></span></h5>
                                                <h6 class="text-muted font-small-3"> Tercapai : Rp.  <?php echo number_format("$rev->value_rev"); ?></h6>
                                                <h6 class="text-muted font-small-3"> Nilai : {{ number_format(($prev), 1, ',') }}%</h6>
                                                <div class="progress progress-sm mb-1 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-{{$prev > 40 ?$prev > 80 ? 'success' : 'warning' : 'danger' }}" 
                                                    role="progressbar" style="width: {{$prev}}%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h5 class="text-bold-600"><i class="bi bi-cart-check  danger font-medium-4"></i> PO. <span class="info"></span></h5>
                                                <h6 class="text-muted font-small-3"> Tercapai : Rp.  <?php echo number_format("$rev->value_po"); ?></h6>
                                                <h6 class="text-muted font-small-3"> Nilai : {{ number_format(($ppo), 1, ',', '.') }}%</h6>
                                                <div class="progress progress-sm mb-1 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-{{$ppo > 40 ?$ppo > 80 ? 'success' : 'warning' : 'danger' }}" 
                                                    role="progressbar" style="width: {{$ppo}}%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h5 class="text-bold-600"><i class="bi bi-hourglass  danger font-medium-4"></i> Aging. <span class="info"></span></h5>
                                                <h6 class="text-muted font-small-3"> Tercapai : {{ number_format(floatval(str_replace(',', '.', $rev->value_aging))) }}
                                    </h6>
                                                <h6 class="text-muted font-small-3"> Nilai : {{ number_format(floatval(str_replace(',', '.', $rev->value_aging))) }}%</h6>
                                                <div class="progress progress-sm mb-1 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-{{$rev->value_aging > 40 ?$rev->value_aging > 80 ? 'success' : 'warning' : 'danger' }}" 
                                                    role="progressbar" style="width: {{$rev->value_aging}}%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <!-- Anda juga bisa mengakses kolom pdash_id jika diperlukan -->

                                                <!-- <h6 class="text-muted font-small-3"> pdash_id : {{ $rev->pdash_id }}</h6> -->
                                            
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    @endforeach
                                    </div>


                                    <div class="card text-center">
                                        <div class="card-body">
                                            <!-- Last Update -->
                                            <blockquote class="blockquote mb-0">
                                            <p>Last Update</p>
                                                <footer class="blockquote-footer"><cite title="Source Title">
                                                    {{date('l, d F Y',strtotime($rev->created_at))}}
                                                #</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Revenue 2023</h4>
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
                                    <div class="table-responsive">
                                        <table id="revenue" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Tipe Pekerjaan</th>
                                                    @foreach($period_rev as $pr)
                                                        <th>{{$pr->month_year}}</th>
                                                    @endforeach
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($type_job as $tj)
                                                    <tr>
                                                        <td>{{$tj->name}}</td>
                                                        @php
                                                            $totalByType = 0; // Total sesuai tipe pekerjaan
                                                        @endphp
                                                        @foreach($period_rev as $pr)
                                                            <td>
                                                                @php
                                                                    $total = 0;
                                                                @endphp
                                                                @foreach($tj->revenue_achiev as $revenue)
                                                                    @if ($revenue->pdash_id == $pr->id)
                                                                        Rp. {{ number_format($revenue->value, 0, ',', '.') }}
                                                                        @php
                                                                            $total += $revenue->value;
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                @php
                                                                    $totalByType += $total;
                                                                @endphp
                                                            </td>
                                                        @endforeach
                                                        <td>Rp. {{ number_format($totalByType, 0, ',', '.') }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <th>Grand Total</th>
                                                    @foreach($period_rev as $pr)
                                                        <th>
                                                            <?php
                                                            $total = 0;
                                                            foreach ($type_job as $tj) {
                                                                foreach ($tj->revenue_achiev as $revenue) {
                                                                    if ($revenue->pdash_id == $pr->id) {
                                                                        $total += $revenue->value;
                                                                    }
                                                                }
                                                            }
                                                            echo 'Rp. '.number_format($total, 0, ',', '.');
                                                            ?>
                                                        </th>
                                                    @endforeach
                                                    <th>
                                                        @php
                                                            $grandTotal = 0;
                                                            foreach ($type_job as $tj) {
                                                                foreach ($tj->revenue_achiev as $revenue) {
                                                                    $grandTotal += $revenue->value;
                                                                }
                                                            }
                                                            echo 'Rp. '.number_format($grandTotal, 0, ',', '.');
                                                        @endphp
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Target</b></th>
                                                    <th>Selisih</b></th>
                                                    <th>Tercapai</b></th>
                                                    <th>Action</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($target_rev as $trev)
                                            <tr>
                                                    <td>Rp. <?php
                                                    echo number_format("$trev->target"); ?></td>
                                                    <td>Rp. <?php
                                                    echo number_format("$trev->selisih"); ?></td>
                                                    <td>Rp. <?php
                                                    echo number_format("$trev->grand_total"); ?></td>
                                                    <td>
                                                    <a href="https://docs.google.com/spreadsheets/d/1bmd0AkGF0V-KrZOP5yNxgcK7R1JoCMkY/edit?usp=sharing&ouid=110546107101493557324&rtpof=true&sd=true" class="btn btn-danger btn-sm"> Excel Link</a>
                                                    <a href="#" class="btn btn-success btn-sm"> Grafik</a>
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


                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Purchase Order</h4>
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
                                    <div class="table-responsive">
                                    <table id="example" class="table table-striped">
                                        <table id="example" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Tipe Pekerjaan</b></th>
                                                @foreach($period_rev as $pr)
                                                    <th>{{$pr->month_year}}</th>
                                                @endforeach
                                                <th>Total</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($type_job as $tj)
                                                <tr>
                                                    <td>{{$tj->name}}</td>
                                                    @php
                                                        $totalByType = 0; // Total sesuai tipe pekerjaan
                                                    @endphp
                                                    @foreach($period_rev as $pr)
                                                        <td>
                                                            @php
                                                                $total = 0;
                                                            @endphp
                                                            @foreach($tj->po_achiev as $po)
                                                                @if ($po->pdash_id == $pr->id)
                                                                    Rp. {{ number_format($po->value, 0, ',', '.') }}
                                                                    @php
                                                                        $total += $po->value;
                                                                    @endphp
                                                                @endif
                                                            @endforeach
                                                            @php
                                                                $totalByType += $total;
                                                            @endphp
                                                        </td>
                                                    @endforeach
                                                    <td>Rp. {{ number_format($totalByType, 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th>Grand Total</th>
                                                @foreach($period_rev as $pr)
                                                    <th>
                                                        <?php
                                                        $total = 0;
                                                        foreach ($type_job as $tj) {
                                                            foreach ($tj->po_achiev as $po) {
                                                                if ($po->pdash_id == $pr->id) {
                                                                    $total += $po->value;
                                                                }
                                                            }
                                                        }
                                                        echo 'Rp. '.number_format($total, 0, ',', '.');
                                                        ?>
                                                    </th>
                                                @endforeach
                                                <th>
                                                    @php
                                                        $grandTotal = 0;
                                                        foreach ($type_job as $tj) {
                                                            foreach ($tj->po_achiev as $po) {
                                                                $grandTotal += $po->value;
                                                            }
                                                        }
                                                        echo 'Rp. '.number_format($grandTotal, 0, ',', '.');
                                                    @endphp
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>


                                    </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Target</b></th>
                                                    <th>Selisih</b></th>
                                                    <th>Tercapai</b></th>
                                                    <th>Action</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>

                                            @foreach($target_po as $tpo)
                                            <tr>
                                                    <td>Rp. <?php
                                                    echo number_format("$tpo->target"); ?></td>
                                                    <td>Rp. <?php
                                                    echo number_format("$tpo->selisih"); ?></td>
                                                    <td>Rp. <?php
                                                    echo number_format("$tpo->grand_total"); ?></td>
                                                    <td>
                                                    <a href="https://docs.google.com/spreadsheets/d/1bmd0AkGF0V-KrZOP5yNxgcK7R1JoCMkY/edit?usp=sharing&ouid=110546107101493557324&rtpof=true&sd=true" class="btn btn-danger btn-sm"> Excel Link</a>
                                                    <a href="#" class="btn btn-success btn-sm"> Grafik</a>
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
        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <table class="table table-striped">
                <tbody>      
                        <tr>
                            <th>Project</th>
                            <td><span id="project"></span></td>
                        </tr>
                        <tr>
                            <th>Jumlah Site :</th>
                            <td><span id="jumlah_site"></span></td>
                        </tr>
                        <tr>
                            <th>Tercapai :</th>
                            <td><span id="tercapai"></span></td>
                        </tr>
                        <tr>
                            <th>Tidak Tercapai :</th>
                            <td><span id="site_name"></span></td>
                        </tr>
                </tbody>
            </table>

        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>
</div>


@endsection


@section('script')
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
 <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide');
            var bar = splide.root.querySelector('.my-slider-progress-bar');
            
            // Updates the bar width whenever the carousel moves:
            splide.on('mounted move', function () {
                var end = splide.Components.Controller.getEnd() + 1;
                var rate = Math.min((splide.index + 1) / end, 1);
                bar.style.width = String(100 * rate) + '%';
            });
            
            splide.mount();
        });
    </script>


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

<!-- FIxed Column -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>
<script>
$(document).ready(function() {
    var table = $('#revenue').DataTable( {
        "ordering": false,
        fixedColumns:   {
                                leftColumns: 1
                            },

    } );
} );
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var totalSeluruhnyaElement = document.getElementById("totalSeluruhnya");
        var totalElements = document.querySelectorAll("tbody tr td:nth-last-child(2)"); // Mengambil semua elemen total di kolom "Total"

        function hitungTotalSeluruhnya() {
            var grandTotal = 0;
            totalElements.forEach(function(totalElement) {
                grandTotal += parseFloat(totalElement.textContent);
            });
            totalSeluruhnyaElement.textContent = grandTotal;
        }

        // Hitung total seluruhnya saat halaman dimuat
        hitungTotalSeluruhnya();
    });
</script>

@endsection



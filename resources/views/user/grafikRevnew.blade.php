@extends('layouts.users.main') 

@section("title") Grafik Reveneu 2024 @endsection

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

@section("content")
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Grafik Reveneu 2024</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Grafik Reveneu
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
 <!-- Switchery Switch start -->
                <section class="switchery-toggle" id="switchery-toggle">
                    <div class="row match-height">
                        <div class="col-xl-8 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Reveneu Prasetia Dwidharma</h4>
                                    <a class="heading-elements-toggle">
                                        <i class="la la-ellipsis-v font-medium-3"></i>
                                    </a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse">
                                                    <i class="ft-minus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="reload">
                                                    <i class="ft-rotate-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="expand">
                                                    <i class="ft-maximize"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="close">
                                                    <i class="ft-x"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <h3 class="card-title"></h3>

                                        <div id="container"></div>
                                            <script>
                                            Highcharts.chart('container', {
                                                chart: {
                                                    type: 'pie',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 45,
                                                        beta: 0
                                                    }
                                                },
                                                title: {
                                                    text: 'Grafik Target Revenue',
                                                    align: 'center'
                                                },
                                                subtitle: {
                                                    text: 'Periode: ' +
                                                        '<a href="https://www.counterpointresearch.com/global-smartphone-share/"' +
                                                        'target="_blank">2023</a>',
                                                    align: 'center'
                                                },
                                                accessibility: {
                                                    point: {
                                                        valueSuffix: '%'
                                                    }
                                                },

                                                tooltip: {
                                                        formatter: function() {
                                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.y, 0, '.', '.');
                                                                                        }
                                                        },
                                            
                                                plotOptions: {
                                                    pie: {
                                                        allowPointSelect: true,
                                                        cursor: 'pointer',
                                                        depth: 35,
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.name}: Rp. {point.y:,.of}'
                                                        }
                                                    }
                                                },
                                                series: [{
                                                    type: 'pie',
                                                    name: 'Share',
                                                    data: [
                                                        {
                                                            name: 'Tercapai',
                                                            y: {{$tercapai}},
                                                        },
                                                        {
                                                            name: 'Selisih',
                                                            y: {{$selisih}},
                                                            
                                                        },

                                                    ]
                                                }]
                                            });
                                            </script>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Detail</h4>
                                    <a class="heading-elements-toggle">
                                        <i class="la la-ellipsis-v font-medium-3"></i>
                                    </a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse">
                                                    <i class="ft-minus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="reload">
                                                    <i class="ft-rotate-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="expand">
                                                    <i class="ft-maximize"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="close">
                                                    <i class="ft-x"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                        @foreach($target_rev as $tr)        
                                                <p><b><a href="#">Target</a> = </b>Rp. <?php
                                                    echo number_format("$tr->target")  ; ?></p>
                                                <p><b><a href="#">Tercapai</a> = </b>Rp. <?php
                                                    echo number_format("$tr->grand_total")  ; ?></p>
                                                <p><b><a href="#">Selisih</a> = </b>Rp. <?php
                                                    echo number_format("$tr->selisih")  ; ?></p>
                                                <p><b><a href="#">Persentase =  <span class="badge badge-pill bg-warning">{{$tr->persentase}}%</span></p>
                                        @endforeach
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Switchery Switch end -->

        
    </div>
</div>
    <!-- END: Content-->

@endsection




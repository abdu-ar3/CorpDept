@extends('layouts.users.main') 

@section("title") Target Grafik @endsection

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


@section("content")

<div class="app-content content">
        <div class="content-wrapper">
        <div class="content-body">

        <div class="row">
         <div class="col-sm-8">
        <div class="card">
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

        <footer class="card text-center">Revenue <cite title="Source Title">Prasetia Dwidharma</cite></footer>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
        <h5 class="card-title">Detail</h5>
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


@endsection
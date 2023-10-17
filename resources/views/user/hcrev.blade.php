@extends('layouts.users.main') 

@section("title") High Chart Revenue @endsection



@section("content")
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Grafik Value Revenue</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Grafik Value Revenue
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
                                <h4 class="card-title">Recenue</h4>
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

                                    <div class="row">
                                        <!-- Card Kiri -->
                                        <div class="col-md-8">
                                            <div id="what-is" class="card">
                                                <div id="tipe_pekerjaan"></div>
                                            </div>
                                        </div>
                                        <!-- Card Kiri -->
                                        <div class="col-md-4">
                                            <div id="what-is" class="card">
                                            @foreach($hcRev as $hr)        
                                                    <p><b><a href="#">{{ $hr->typeJob->name }}</a> = </b>Rp. <?php
                                                        echo number_format("$hr->value")  ; ?></p>
                                            @endforeach
                                            </div>
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
                                <h4 class="card-title">Reveneu Type Job Detail</h4>
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

                                    <div class="row">
                                        <!-- Card Kiri -->
                                        <div class="col-md-8">
                                            <div id="what-is" class="card">
                                                <div id="container"></div>
                                            </div>
                                        </div>
                                        <!-- Card Kiri -->
                                        <div class="col-md-4">
                                            <div id="what-is" class="card">
                                            @foreach ($data as $hc)   
                                                    <p><b><a href="#">{{ $hc->hcTypejob->name }} <br> Cust {{ $hc->cust }}</a> = </b>Rp. <?php
                                                        echo number_format("$hc->value")  ; ?></p>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gradient Donut Chart -->
                


                </div>
            </div>
        </div>
    </div>

   
</div>
    <!-- END: Content-->


    <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/highcharts-more.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    


        <script>
        // Set up the chart
        var categories = <?php echo json_encode($categories); ?>;
        var values = <?php echo json_encode($values); ?>.map(parseFloat);

        const chart = new Highcharts.Chart({
            chart: {
                renderTo: 'tipe_pekerjaan',
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 15,
                    beta: 15,
                    depth: 50,
                    viewDistance: 25
                }
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                title: {
                    enabled: false
                }
            },
            tooltip: {
                headerFormat: '<b>{point.key}</b><br>',
                pointFormat: 'Pendapatan: {point.y}%'
            },
            title: {
                text: 'Revenue Type Jobs',
                align: 'center'
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    depth: 25,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.2f}%',
                        outside: true
                    },
                    colorByPoint: true,
                    colors: ['#FF9642', '#FFE05D', '#FFF8CD'] // Ganti warna kolom sesuai kebutuhan Anda
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                data: values,
                colorByPoint: true
            }]
        });

        function showValues() {
            document.getElementById('alpha-value').innerHTML = chart.options.chart.options3d.alpha;
            document.getElementById('beta-value').innerHTML = chart.options.chart.options3d.beta;
            document.getElementById('depth-value').innerHTML = chart.options.chart.options3d.depth;
        }

        // Activate the sliders
        document.querySelectorAll('#sliders input').forEach(input => input.addEventListener('input', e => {
            chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
            showValues();
            chart.redraw(false);
        }));

    </script>

    <script>
        // Konversi data dari PHP ke JavaScript
        var data = @json($data);

        // Konfigurasi chart
        var chartOptions = {
            chart: {
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 15,
                    beta: 15,
                    depth: 50,
                    viewDistance: 25
                }
            },
            title: {
                text: 'Top 5 Customers by Value'
            },
            xAxis: {
                categories: data.map(function(item) {
                    return item.cust; // Kolom cust
                })
            },
            yAxis: {
                title: {
                    text: 'Value'
                }
            },
            series: [{
                name: 'Value',
                data: data.map(function(item) {
                    return item.value; // Kolom value
                })
            }],
            plotOptions: {
                column: {
                    depth: 25,
                    dataLabels: {
                        enabled: true,
                        outside: true
                    },
                    colorByPoint: true,
                    colors: ['#A05252', '#350E81', '#FFF8CD', '#165830'] // Ganti warna kolom sesuai kebutuhan Anda
                }
            }
        };

        // Membuat chart
        Highcharts.chart('container', chartOptions);
    </script>



@endsection




            
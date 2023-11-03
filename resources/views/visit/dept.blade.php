<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

     <style>
            .spinner-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.7);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999; /* Pastikan lebih tinggi dari elemen lain */
            }

            .spinner {
                width: 4rem;
                height: 4rem;
            }
        </style>

    @yield('style')

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Prasetia @yield("title")</title>  
    
    <link rel="apple-touch-icon" href="{{asset('visit-assets/images/ico/prasetia.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('visit-assets/images/ico/prasetia.png')}}
">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- CSS Status -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/status.css')}}">

    <!-- Tautan ke berkas CSS Slick Carousel dari CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/pages/chat-application.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/icon/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/pages/dashboard-analytics.css')}}">
    <!-- END: Page CSS-->

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

        <div class="spinner-overlay">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden"></span>
            </div>
        </div>

    <!-- BEGIN: Header-->
    <!-- fixed-top-->
    @include('layouts.users.sidebar')


    <!-- BEGIN: Main Menu-->
    @include('layouts.users.navbar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Department</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">KPI DEPT</a>
                                </li>
                                <li class="breadcrumb-item active">Content
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        <div class="content-body">
        <section class="row">
            <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="from-group col-sm-4">
                                    <form action="#" method="get">
                                        <div class="form-group" style="display: flex; align-items: center;">
                                            <select name="selectEvent" class="form-control" style="flex: 1;">
                                                <option value="">-- Selected Period --</option>
                                                @foreach ($events as $event)
                                                    <option value="{{ $event->id }}">{{ $event->start_event }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-sm btn-primary" style="margin-left: 10px;">Filter</button>
                                        </div>
                                    </form>
                                </div>


                            <!-- Card Kanan -->
                            <div class="col-sm-8">
                                <div id="what-is" class="card">
                                    <h5 class="text-right">Periode : {{ $selectedEvent->start_event }}</h5>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="single-item">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                            <!-- Card Kiri -->
                            <div class="col-md-4">
                                <div id="what-is" class="card">
                                    <div id="container"></div>
                                                </div>
                                </div>
                            
                            <!-- Card Kanan -->
                            <div class="col-md-8">
                                <div id="kick-start" class="card">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="font-weight: bold;">Company</th>
                                                <th scope="col" style="font-weight: bold;">Director</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Prasetia Dwidharma</th>
                                                <td>Arya Setiadharma</td>
                                            </tr>
                                            <tr >
                                                <td colspan="2">
                                                    <table class="table table-condensed" style="border-collapse:collapse;">
                                                        <thead>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th colspan="1" class="d-flex justify-content-center" style="font-weight: bold; font-size: 14px">Departement Rank</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-toggle="collapse" data-target="#rankDept" class="accordion-toggle">
                                                                <td><button class="btn btn-default btn-xs"><i class="fa fa-low-vision"></i></button></td>
                                                                <td style="font-weight: bold; font-size: 14px">Departement</td>
                                                                <td style="font-weight: bold; font-size: 14px">Persentase</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12" class="hiddenRow">
                                                                    <div class="accordian-body collapse" id="rankDept">
                                                                        <table class="table table-striped">
                                                                            <tbody>
                                                                                @foreach ($sumByDepartment as $departmentId => $totalPercentage)
                                                                                    @php $department = $pditemsByDepartment[$departmentId]->first()->department; @endphp
                                                                                    <tr>
                                                                                        <td> <a href="#item{{ $department->name }}">{{ $department->name }}</a></th>
                                                                                        <td>{{ number_format($totalPercentage, 2) . '%' }}</td>
                                                                                    </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            
                                                        </tfoot>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                            <!-- Card Kiri -->
                            <div class="col-md-4">
                                <div id="what-is" class="card">
                                    <div id="contSem2"></div>
                                                </div>
                                </div>
                            
                            <!-- Card Kanan -->
                            <div class="col-md-8">
                                <div id="kick-start" class="card">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="font-weight: bold;">Company</th>
                                                <th scope="col" style="font-weight: bold;">Director</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Prasetia Dwidharma</th>
                                                <td>Arya Setiadharma</td>
                                            </tr>
                                            <tr >
                                                <td colspan="2">
                                                    <table class="table table-condensed" style="border-collapse:collapse;">
                                                        <thead>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th colspan="1" class="d-flex justify-content-center" style="font-weight: bold; font-size: 14px">Departement Rank</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-toggle="collapse" data-target="#rankDept" class="accordion-toggle">
                                                                <td><button class="btn btn-default btn-xs"><i class="fa fa-low-vision"></i></button></td>
                                                                <td style="font-weight: bold; font-size: 14px">Departement</td>
                                                                <td style="font-weight: bold; font-size: 14px">Persentase</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12" class="hiddenRow">
                                                                    <div class="accordian-body collapse" id="rankDept">
                                                                        <table class="table table-striped">
                                                                            <tbody>
                                                                                @foreach ($sumByDepartment as $departmentId => $totalPercentage)
                                                                                    @php $department = $pditemsByDepartment[$departmentId]->first()->department; @endphp
                                                                                    <tr>
                                                                                        <td> <a href="#item{{ $department->name }}">{{ $department->name }}</a></th>
                                                                                        <td>{{ number_format($totalPercentage, 2) . '%' }}</td>
                                                                                    </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            
                                                        </tfoot>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Tambahkan lebih banyak slide sesuai kebutuhan -->
                    </div>

                <!-- Card Utama -->
                <!-- <div class="card">
                    <div class="card-body"> 
                    </div>
                </div> -->
 
    @forelse ($pditemsByDepartment as $departmentId => $pditems)
        @if ($pditems->count() > 0) 
    <div class="card" id="item{{ $pditemsByDepartment[$departmentId]->first()->department['name'] }}">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="d-flex justify-content-center mt-2"><h4></h4></div>
                    {{-- ini untuk grafik summry --}}
                    <div id="avg{{ $departmentId }}"></div>
                    {{-- <div id="chart" style="width: 300px; height: 300px;"></div> --}}
                    <canvas id="myChart"></canvas>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                {{-- Untuk Nama User --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="filteredItems">
                            <table class="table table-condensed" style="border-collapse:collapse;">
                                {{-- ini table untuk isi table kpi pd --}}
                                <thead>
                                    <tr>
                                        <th></th>
                                        {{-- <th>Periode</th> --}}
                                        <th style="font-weight: bold; font-size: 14px">KPI</th>
                                        <th style="font-weight: bold; font-size: 14px">Achievement</th>
                                        <th style="font-weight: bold; font-size: 14px">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="items">
                                    @forelse ($pditems as $pditem)
                                    {{-- @dd($pditem) --}}
                                    <tr data-toggle="collapse" data-target="#demo{{ $pditem->id }}" class="accordion-toggle">
                                        <td width="5%"><button class="btn btn-default btn-xs"><i class="ficon ft-eye"></i></i></button></td>
                                        {{-- <td>{{ $pditem->period['month'] }} {{ $pditem->period['year'] }}</td> --}}
                                        <td>{{ $pditem->kpi }}</td>
                                        <td>{{ number_format($pditem->percentage, 2) }}%</td>
                                        <td>
                                            @if ( $pditem->percentage < 60 )
                                                <div class="spinner-grow text-danger" role="status">
                                                    <span class="sr-only"></span>
                                                </div>
                                            @elseif ($pditem->percentage < 80 )
                                                <div class="spinner-grow text-warning" role="status">
                                                    <span class="sr-only"></span>
                                                </div>
                                            @else
                                                <div class="spinner-grow text-success" role="status">
                                                    <span class="sr-only"></span>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="12" class="hiddenRow">
                                            <div class="accordian-body collapse" id="demo{{ $pditem->id }}">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <td>{{ $pditem->kpi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="6">
                                                                <div id="chartContainerr{{ $pditem->id }}"></div>
                                                                
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Periode</td>
                                                            <td>Weight</td>
                                                            <td>Target</td>
                                                            <td>Realization</td>
                                                            <td>Nilai</td>
                                                            <td>Nilai Akhir</td>
                                                        </tr>
                                                        <tr>
                                                        <tr>
                                                            <td></td>
 
                                                                        <td>{{ $pditem->weight }}</td>
                                                                        <td>{{ number_format($pditem->target) }}</td>
                                                                        <td>{{ number_format($pditem->realization) }}</td>
                                                                        <td>{{ number_format($pditem->percentage, 2) .'%' }}</td>
                                                                        <td>{{ number_format($pditem->weight_percentage, 2) .'%' }}</td>
                                                                    </tr>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No user found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @break --}}
    @endif
    @empty
    <div>Data Not Found</div>
@endforelse
 
            </div>
        </section>
</div>
 
 
        
</div>
 
 

 
        
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Footer-->
    @include('layouts.users.footer')
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('visit-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="{{asset('visit-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <script src="{{asset('visit-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
    <script src=" {{asset('visit-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('visit-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('visit-assets/js/core/app.js')}}" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('visit-assets/js/scripts/pages/dashboard-analytics.js')}}" type="text/javascript"></script>
    <!-- END: Page JS-->
    <script type="text/javascript" src="{{asset('visit-assets/vendors/charts/chart.js')}}"></script>



    <!-- Script Js-->
    <!-- Chart Js-->
    <script src="https://code.highcharts.com/highcharts.js"></script><script src="https://code.highcharts.com/highcharts-more.js"></script><script src="https://code.highcharts.com/highcharts-3d.js"></script><script src="https://code.highcharts.com/modules/stock.js"></script><script src="https://code.highcharts.com/maps/modules/map.js"></script><script src="https://code.highcharts.com/modules/gantt.js"></script><script src="https://code.highcharts.com/modules/exporting.js"></script><script src="https://code.highcharts.com/modules/parallel-coordinates.js"></script><script src="https://code.highcharts.com/modules/accessibility.js"></script><script src="https://code.highcharts.com/modules/annotations-advanced.js"></script><script src="https://code.highcharts.com/modules/data.js"></script><script src="https://code.highcharts.com/modules/draggable-points.js"></script><script src="https://code.highcharts.com/modules/static-scale.js"></script><script src="https://code.highcharts.com/modules/broken-axis.js"></script><script src="https://code.highcharts.com/modules/heatmap.js"></script><script src="https://code.highcharts.com/modules/tilemap.js"></script><script src="https://code.highcharts.com/modules/timeline.js"></script><script src="https://code.highcharts.com/modules/treemap.js"></script><script src="https://code.highcharts.com/modules/treegraph.js"></script><script src="https://code.highcharts.com/modules/item-series.js"></script><script src="https://code.highcharts.com/modules/drilldown.js"></script><script src="https://code.highcharts.com/modules/histogram-bellcurve.js"></script><script src="https://code.highcharts.com/modules/bullet.js"></script><script src="https://code.highcharts.com/modules/funnel.js"></script><script src="https://code.highcharts.com/modules/funnel3d.js"></script><script src="https://code.highcharts.com/modules/pyramid3d.js"></script><script src="https://code.highcharts.com/modules/networkgraph.js"></script><script src="https://code.highcharts.com/modules/pareto.js"></script><script src="https://code.highcharts.com/modules/pattern-fill.js"></script><script src="https://code.highcharts.com/modules/price-indicator.js"></script><script src="https://code.highcharts.com/modules/sankey.js"></script><script src="https://code.highcharts.com/modules/arc-diagram.js"></script><script src="https://code.highcharts.com/modules/dependency-wheel.js"></script><script src="https://code.highcharts.com/modules/series-label.js"></script><script src="https://code.highcharts.com/modules/solid-gauge.js"></script><script src="https://code.highcharts.com/modules/sonification.js"></script><script src="https://code.highcharts.com/modules/stock-tools.js"></script><script src="https://code.highcharts.com/modules/streamgraph.js"></script><script src="https://code.highcharts.com/modules/sunburst.js"></script><script src="https://code.highcharts.com/modules/variable-pie.js"></script><script src="https://code.highcharts.com/modules/variwide.js"></script><script src="https://code.highcharts.com/modules/vector.js"></script><script src="https://code.highcharts.com/modules/venn.js"></script><script src="https://code.highcharts.com/modules/windbarb.js"></script><script src="https://code.highcharts.com/modules/wordcloud.js"></script><script src="https://code.highcharts.com/modules/xrange.js"></script><script src="https://code.highcharts.com/modules/no-data-to-display.js"></script><script src="https://code.highcharts.com/modules/drag-panes.js"></script><script src="https://code.highcharts.com/modules/debugger.js"></script><script src="https://code.highcharts.com/modules/dumbbell.js"></script><script src="https://code.highcharts.com/modules/lollipop.js"></script><script src="https://code.highcharts.com/modules/cylinder.js"></script><script src="https://code.highcharts.com/modules/organization.js"></script><script src="https://code.highcharts.com/modules/dotplot.js"></script><script src="https://code.highcharts.com/modules/marker-clusters.js"></script><script src="https://code.highcharts.com/modules/hollowcandlestick.js"></script><script src="https://code.highcharts.com/modules/heikinashi.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- End Chart Js-->

    <!-- Add Bootstrap JS and jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <!-- Tautan ke berkas JavaScript Slick Carousel dari CDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    @yield('script')

    

    <script>
            // Di dalam berkas JavaScript Anda
        $(document).ready(function(){
            $('.single-item').slick();
        });

    </script>
    <script>
      // Data target dan pencapaian
      const labels = ["Target", "Pencapaian"];
      const data = [80, 60]; // Sesuaikan dengan nilai target dan pencapaian Anda
      const colors = ["blue", "red"]; // Warna biru dan merah
 
      // Inisialisasi grafik
      const ctx = document.getElementById("barChart").getContext("2d");
      const myBarChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: labels,
          datasets: [
            {
              data: data,
              backgroundColor: colors, // Warna batang
              borderColor: colors, // Warna garis batas batang
              borderWidth: 1, // Lebar garis batas
            },
          ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
              max: 100, // Sesuaikan dengan rentang nilai yang sesuai
            },
          },
        },
      });
    </script>
    
    
@forelse ($pditemsByDepartment as $departmentId => $pditems)   
    @foreach ($pditems as $pditem)
    
        <script>
            Highcharts.chart('avg{{ $departmentId }}', {
 
                chart: {
                    type: 'gauge',
                    plotBackgroundColor: null,
                    plotBackgroundImage: null,
                    plotBorderWidth: 0,
                    plotShadow: false,
                    height: '80%'
                },
 
                title: {
                    text: '{{ $pditem->department['name'] }}'
                },
 
                pane: {
                    startAngle: -90,
                    endAngle: 89.9,
                    background: null,
                    center: ['50%', '75%'],
                    size: '110%'
                },
 
                // the value axis
                yAxis: {
                    min: 0,
                    max: 100,
                    tickPixelInterval: 72,
                    tickPosition: 'inside',
                    tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
                    tickLength: 20,
                    tickWidth: 2,
                    minorTickInterval: null,
                    labels: {
                        distance: 20,
                        style: {
                            fontSize: '14px'
                        }
                    },
                    lineWidth: 0,
                    plotBands: [{
                        from: 0,
                        to: 59,
                        color: '#DF5353', // red
                        thickness: 20
                    }, {
                        from: 60,
                        to: 79,
                        color: '#DDDF0D', // yellow
                        thickness: 20
                    }, {
                        from: 80,
                        to: 100,
                        color: '#55BF3B', // green
                        thickness: 20
                    }]
                },
 
                series: [{
                    name: 'Speed',
                    data:  [{{ number_format($sumByDepartment[$departmentId],2) }}],
                    tooltip: {
                        valueSuffix: '%'
                    },
                    dataLabels: {
                        format: '{y} %',
                        borderWidth: 0,
                        color: (
                            Highcharts.defaultOptions.title &&
                            Highcharts.defaultOptions.title.style &&
                            Highcharts.defaultOptions.title.style.color
                        ) || '#333333',
                        style: {
                            fontSize: '16px'
                        }
                    },
                    dial: {
                        radius: '80%',
                        backgroundColor: 'gray',
                        baseWidth: 12,
                        baseLength: '0%',
                        rearLength: '0%'
                    },
                    pivot: {
                        backgroundColor: 'gray',
                        radius: 6
                    }
                }],
                credits: {
                    enabled: false
                }
            });
        </script>
    @endforeach
@empty
@endforelse
 
 
@forelse ($pditemsByDepartment as $departmentId => $pditems)
    @foreach ($pditems as $pditem)
        <script>
            Highcharts.chart('chartContainerr{{ $pditem->id }}', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: ''
                },
                xAxis: {
                    categories: ['Target', 'Realization']
                },
                yAxis: {
                    title: {
                        text: 'Value'
                    },
                    labels: {
                        formatter: function() {
                            return '' + Highcharts.numberFormat(Math.abs(this.value), 0);
                        }
                    }
                },
                plotOptions: {
                    column: {
                        dataLabels: {
                            enabled: true,
                            formatter: function() {
                                return '' + Highcharts.numberFormat(Math.abs(this.y), 0);
                            }
                        },
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Target',
                    data: [{{ $pditem->target }}]
                }, {
                    name: 'Realization',
                    data: [{{ $pditem->realization }}]
                }]
            });
        </script>
    @endforeach
@empty
@endforelse
 
 
 
@forelse ($pditemsByDepartment as $departmentId => $pditems)
    @foreach ($pditems as $pditem)
        <script>
            const ctx = document.getElementById("chartCanvas{{ $pditem->id }}").getContext("2d");
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Target', 'Realization'],
                    datasets: [{
                        label: 'Value',
                        backgroundColor: ['blue', 'red'],
                        data: [{{ $pditem->target }}, {{ $pditem->realization }}],
                    }],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                max: 100, // Sesuaikan dengan rentang nilai yang sesuai
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Name Value', // Label di sumbu Y
                            },
                        }],
                    },
                },
            });
        </script>
    @endforeach
@empty
@endforelse


 <script>
 
                                            Highcharts.setOptions({
                                    chart: {
                                        type: 'gauge',
                                        plotBackgroundColor: null,
                                        plotBackgroundImage: null,
                                        plotBorderWidth: 0,
                                        plotShadow: false,
                                        height: '80%'
                                    },
                                    title: {
                                        text: 'Semester 1'
                                    },
                                    pane: {
                                        startAngle: -90,
                                        endAngle: 89.9,
                                        background: null,
                                        center: ['50%', '75%'],
                                        size: '110%'
                                    },
                                    yAxis: {
                                        min: 0,
                                        max: 100,
                                        tickPixelInterval: 72,
                                        tickPosition: 'inside',
                                        tickColor: Highcharts.getOptions().chart.backgroundColor || '#FFFFFF',
                                        tickLength: 20,
                                        tickWidth: 2,
                                        minorTickInterval: null,
                                        labels: {
                                            distance: 20,
                                            style: {
                                                fontSize: '14px'
                                            }
                                        },
                                        lineWidth: 0,
                                        plotBands: [{
                                            from: 0,
                                            to: 59,
                                            color: '#DF5353', // red
                                            thickness: 20
                                        }, {
                                            from: 60,
                                            to: 79,
                                            color: '#DDDF0D', // yellow
                                            thickness: 20
                                        }, {
                                            from: 80,
                                            to: 100,
                                            color: '#55BF3B', // green
                                            thickness: 20
                                        }]
                                    },
                                    series: [{
                                        name: 'Speed',
                                        data: [50], // Nilai default diatur ke 50
                                        tooltip: {
                                            valueSuffix: '%'
                                        },
                                        dataLabels: {
                                            format: '{y} %',
                                            borderWidth: 0,
                                            color: (
                                                Highcharts.getOptions().title &&
                                                Highcharts.getOptions().title.style &&
                                                Highcharts.getOptions().title.style.color
                                            ) || '#333333',
                                            style: {
                                                fontSize: '16px'
                                            }
                                        },
                                        dial: {
                                            radius: '80%',
                                            backgroundColor: 'gray',
                                            baseWidth: 12,
                                            baseLength: '0%',
                                            rearLength: '0%'
                                        },
                                        pivot: {
                                            backgroundColor: 'gray',
                                            radius: 6
                                        }
                                    }]
                                });

                                Highcharts.chart('container', {});
                                                </script>

<script>
     Highcharts.setOptions({
                                    chart: {
                                        type: 'gauge',
                                        plotBackgroundColor: null,
                                        plotBackgroundImage: null,
                                        plotBorderWidth: 0,
                                        plotShadow: false,
                                        height: '80%'
                                    },
                                    title: {
                                        text: 'Semester 2'
                                    },
                                    pane: {
                                        startAngle: -90,
                                        endAngle: 89.9,
                                        background: null,
                                        center: ['50%', '75%'],
                                        size: '110%'
                                    },
                                    yAxis: {
                                        min: 0,
                                        max: 100,
                                        tickPixelInterval: 72,
                                        tickPosition: 'inside',
                                        tickColor: Highcharts.getOptions().chart.backgroundColor || '#FFFFFF',
                                        tickLength: 20,
                                        tickWidth: 2,
                                        minorTickInterval: null,
                                        labels: {
                                            distance: 20,
                                            style: {
                                                fontSize: '14px'
                                            }
                                        },
                                        lineWidth: 0,
                                        plotBands: [{
                                            from: 0,
                                            to: 59,
                                            color: '#DF5353', // red
                                            thickness: 20
                                        }, {
                                            from: 60,
                                            to: 79,
                                            color: '#DDDF0D', // yellow
                                            thickness: 20
                                        }, {
                                            from: 80,
                                            to: 100,
                                            color: '#55BF3B', // green
                                            thickness: 20
                                        }]
                                    },
                                    series: [{
                                        name: 'Speed',
                                        data: [50], // Nilai default diatur ke 50
                                        tooltip: {
                                            valueSuffix: '%'
                                        },
                                        dataLabels: {
                                            format: '{y} %',
                                            borderWidth: 0,
                                            color: (
                                                Highcharts.getOptions().title &&
                                                Highcharts.getOptions().title.style &&
                                                Highcharts.getOptions().title.style.color
                                            ) || '#333333',
                                            style: {
                                                fontSize: '16px'
                                            }
                                        },
                                        dial: {
                                            radius: '80%',
                                            backgroundColor: 'gray',
                                            baseWidth: 12,
                                            baseLength: '0%',
                                            rearLength: '0%'
                                        },
                                        pivot: {
                                            backgroundColor: 'gray',
                                            radius: 6
                                        }
                                    }]
                                });

                                Highcharts.chart('contSem2', {});
</script>

    <script>
        document.onreadystatechange = function () {
            if (document.readyState === "complete") {
                // Sembunyikan spinner saat halaman selesai dimuat
                document.querySelector(".spinner-overlay").style.display = "none";
            }
        };
    </script>




</body>
<!-- END: Body-->

</html>
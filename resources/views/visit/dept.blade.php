<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

        <script src="https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.js"></script>
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
                width: 100px; /* Sesuaikan lebar spinner sesuai kebutuhan */
                height: 20px; /* Sesuaikan tinggi spinner sesuai kebutuhan */
                background-color: #007bff; /* Warna latar belakang spinner */
                border-radius: 5px;
                animation: spin 1s linear infinite; /* Animasi pergerakan horizontal */
            }

            @keyframes spin {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(100%);
                }
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
            <img src="{{asset('visit-assets/images/logo/prasetia 2.png')}}">
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
                                                @foreach ($latestEvents as $event)
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
                                    <div id="tester" style="height: 400px;"></div>
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
                                                        
                                                                <td><button class="btn btn-default btn-xs"><i class="fa ft-eye-off toggle-eyes"></i></button></td>
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
                
                    </div>

 
    @forelse ($pditemsByDepartment as $departmentId => $pditems)
        @if ($pditems->count() > 0) 
    <div class="card" id="item{{ $pditemsByDepartment[$departmentId]->first()->department['name'] }}">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="d-flex justify-content-center mt-2"><h4></h4></div>
                    <div id="avg{{ $departmentId }}" style="height: 400px;"></div>
                    <table class="table table-hover">
                        <tbody>
                            <tr>

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
                                    <tr data-toggle="collapse" data-target="#demo{{ $pditem->id }}" class="accordion-toggle" aria-expanded="false">
                                        <td width="5%">
                                            <button class="btn btn-default btn-xs toggle-button">
                                                <i class="ficon ft-eye-off toggle-icon"></i>
                                            </button>
                                        </td>

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


    <script>
    // Inisialisasi chart pada container dengan ID 'tester'
    var myChart = echarts.init(document.getElementById('tester'));

    // Konfigurasi gauge chart
    var semesterValue = {!! json_encode($semesterValue) !!};
    var dataValue = {!! json_encode($data) !!};

    var option = {
        title: {
                show: true,
                text: 'Semester ' + semesterValue,  // Ganti dengan judul yang diinginkan
                textStyle: {
                    color: '#333',  // Ganti dengan warna teks yang diinginkan
                    fontSize: 24,   // Ganti dengan ukuran font yang diinginkan
                    fontWeight: 'bold'  // Sesuaikan dengan kebutuhan Anda
                },
                padding: 10,  // Sesuaikan dengan kebutuhan Anda
                left: 'center'
            },
        series: [
            {
                type: 'gauge',
                startAngle: 180,
                endAngle: 0,
                min: 0,
                max: 100,
                splitNumber: 4,
                pointer: {
                    icon: 'path://M2090.36389,615.30999 L2090.36389,615.30999 C2091.48372,615.30999 2092.40383,616.194028 2092.44859,617.312956 L2096.90698,728.755929 C2097.05155,732.369577 2094.2393,735.416212 2090.62566,735.56078 C2090.53845,735.564269 2090.45117,735.566014 2090.36389,735.566014 L2090.36389,735.566014 C2086.74736,735.566014 2083.81557,732.63423 2083.81557,729.017692 C2083.81557,728.930412 2083.81732,728.84314 2083.82081,728.755929 L2088.2792,617.312956 C2088.32396,616.194028 2089.24407,615.30999 2090.36389,615.30999 Z',
                    length: '75%',
                    width: 16,
                    offsetCenter: [0, '5%']
                },
                axisLine: {
                    roundCap: true,
                    lineStyle: {
                        width: 18,
                        color: [
                            [0.59, '#DF5353'],   // Merah
                            [0.79, '#FFA500'], // Orange
                            [1, '#55BF3B']     // Hijau
                        ]
                    }
                },
                axisTick: {
                    splitNumber: 2,
                    lineStyle: {
                        width: 2,
                        color: '#999'
                    }
                },
                splitLine: {
                    length: 12,
                    lineStyle: {
                        width: 3,
                        color: [
                            [0, '#DF5353'],   // Merah
                            [0.5, '#FFA500'], // Orange
                            [1, '#55BF3B']     // Hijau
                        ]
                    }
                },
                axisLabel: {
                    distance: 30,
                    color: '#999',
                    fontSize: 20
                },
                detail: {
                    backgroundColor: '#fff',
                    borderColor: '#999',
                    borderWidth: 2,
                    width: '50%',
                    lineHeight: 40,
                    height: 40,
                    borderRadius: 25,
                    offsetCenter: [0, '35%'],
                    valueAnimation: true,
                    formatter: function (value) {
                        return '{value|' + value.toFixed(1) + '%}';
                    },
                    rich: {
                        value: {
                            fontSize: 28,
                            fontWeight: 'bolder',
                            color: '#777'
                        },
                        unit: {
                            fontSize: 20,
                            color: '#999',
                        }
                    }
                },
                data: [
                    {
                        value: dataValue
                    }
                ]
            }
        ]
    };

    // Terapkan konfigurasi pada chart
    myChart.setOption(option);
</script>


<!-- Dept -->
@forelse ($pditemsByDepartment as $departmentId => $pditems)
    @php
        $chartId = 'avg' . $departmentId;
        $chartData = number_format($sumByDepartment[$departmentId], 2);
        $departmentName = $pditems->first()->department['name'];
    @endphp

    <!-- Letakkan ini di dalam tag <script> untuk memasukkan nilai PHP ke dalam skrip JavaScript -->
    <script>
        // Inisialisasi chart pada container dengan ID dinamis 'avg{{ $departmentId }}'
        var myChart_{{ $chartId }} = echarts.init(document.getElementById('{{ $chartId }}'));

        // Konfigurasi gauge chart
        var option_{{ $chartId }} = {
            title: {
                show: true,
                text: '{{ $departmentName }}',  // Ganti dengan judul yang diinginkan
                textStyle: {
                    color: '#333',  // Ganti dengan warna teks yang diinginkan
                    fontSize: 24,   // Ganti dengan ukuran font yang diinginkan
                    fontWeight: 'bold'  // Sesuaikan dengan kebutuhan Anda
                },
                padding: 10,  // Sesuaikan dengan kebutuhan Anda
                left: 'center'
            },
          
            series: [
                {
                    type: 'gauge',
                    startAngle: 180,
                    endAngle: 0,
                    min: 0,
                    max: 100,
                    splitNumber: 4,
                    pointer: {
                        icon: 'path://M2090.36389,615.30999 L2090.36389,615.30999 C2091.48372,615.30999 2092.40383,616.194028 2092.44859,617.312956 L2096.90698,728.755929 C2097.05155,732.369577 2094.2393,735.416212 2090.62566,735.56078 C2090.53845,735.564269 2090.45117,735.566014 2090.36389,735.566014 L2090.36389,735.566014 C2086.74736,735.566014 2083.81557,732.63423 2083.81557,729.017692 C2083.81557,728.930412 2083.81732,728.84314 2083.82081,728.755929 L2088.2792,617.312956 C2088.32396,616.194028 2089.24407,615.30999 2090.36389,615.30999 Z',
                        length: '75%',
                        width: 16,
                        offsetCenter: [0, '5%']
                    },
                    axisLine: {
                        roundCap: true,
                        lineStyle: {
                            width: 18,
                            color: [
                                [0.59, '#DF5353'],   // Merah
                                [0.79, '#FFA500'], // Orange
                                [1, '#55BF3B']     // Hijau
                            ]
                        }
                    },
                    axisTick: {
                        splitNumber: 2,
                        lineStyle: {
                            width: 2,
                            color: '#999'
                        }
                    },
                    splitLine: {
                        length: 12,
                        lineStyle: {
                            width: 3,
                            color: [
                                [0, '#DF5353'],   // Merah
                                [0.5, '#FFA500'], // Orange
                                [1, '#55BF3B']     // Hijau
                            ]
                        }
                    },
                    axisLabel: {
                        distance: 30,
                        color: '#999',
                        fontSize: 20
                    },
                    title: {
                        show: false
                    },
                    detail: {
                        backgroundColor: '#fff',
                        borderColor: '#999',
                        borderWidth: 2,
                        width: '50%',
                        lineHeight: 40,
                        height: 40,
                        borderRadius: 25,
                        offsetCenter: [0, '35%'],
                        valueAnimation: true,
                        formatter: function (value) {
                            return '{value|' + value.toFixed(1) + '%}';
                        },
                        rich: {
                            value: {
                                fontSize: 28,
                                fontWeight: 'bolder',
                                color: '#777'
                            },
                            unit: {
                                fontSize: 20,
                                color: '#999',
                            }
                        }
                    },
                    data: [
                        {
                            value: {{ $chartData }}
                        }
                    ]
                }
            ]
        };

        // Terapkan konfigurasi pada chart
        myChart_{{ $chartId }}.setOption(option_{{ $chartId }});
    </script>
@empty
    <!-- Handle jika tidak ada data -->
    No data available.
@endforelse






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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- End Chart Js-->

    <!-- Add Bootstrap JS and jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <!-- Tautan ke berkas JavaScript Slick Carousel dari CDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    @yield('script')

    <script>
        // Inisialisasi chart pada container dengan ID 'chart-container'
        var myChart = echarts.init(document.getElementById('chart-container'));

        // Konfigurasi gauge chart
        var option = {
            series: [
                    {
                    type: 'gauge',
                    startAngle: 180,
                    endAngle: 0,
                    min: 0,
                    max: 240,
                    splitNumber: 12,
                    itemStyle: {
                        color: '#58D9F9',
                        shadowColor: 'rgba(0,138,255,0.45)',
                        shadowBlur: 10,
                        shadowOffsetX: 2,
                        shadowOffsetY: 2
                    },
                    progress: {
                        show: true,
                        roundCap: true,
                        width: 18
                    },
                    pointer: {
                        icon: 'path://M2090.36389,615.30999 L2090.36389,615.30999 C2091.48372,615.30999 2092.40383,616.194028 2092.44859,617.312956 L2096.90698,728.755929 C2097.05155,732.369577 2094.2393,735.416212 2090.62566,735.56078 C2090.53845,735.564269 2090.45117,735.566014 2090.36389,735.566014 L2090.36389,735.566014 C2086.74736,735.566014 2083.81557,732.63423 2083.81557,729.017692 C2083.81557,728.930412 2083.81732,728.84314 2083.82081,728.755929 L2088.2792,617.312956 C2088.32396,616.194028 2089.24407,615.30999 2090.36389,615.30999 Z',
                        length: '75%',
                        width: 16,
                        offsetCenter: [0, '5%']
                    },
                    axisLine: {
                        roundCap: true,
                        lineStyle: {
                        width: 18
                        }
                    },
                    axisTick: {
                        splitNumber: 2,
                        lineStyle: {
                        width: 2,
                        color: '#999'
                        }
                    },
                    splitLine: {
                        length: 12,
                        lineStyle: {
                        width: 3,
                        color: '#999'
                        }
                    },
                    axisLabel: {
                        distance: 30,
                        color: '#999',
                        fontSize: 20
                    },
                    title: {
                        show: false
                    },
                    detail: {
                        backgroundColor: '#fff',
                        borderColor: '#999',
                        borderWidth: 2,
                        width: '60%',
                        lineHeight: 40,
                        height: 40,
                        borderRadius: 8,
                        offsetCenter: [0, '35%'],
                        valueAnimation: true,
                        formatter: function (value) {
                        return '{value|' + value.toFixed(0) + '}{unit|km/h}';
                        },
                        rich: {
                        value: {
                            fontSize: 50,
                            fontWeight: 'bolder',
                            color: '#777'
                        },
                        unit: {
                            fontSize: 20,
                            color: '#999',
                            padding: [0, 0, -20, 10]
                        }
                        }
                    },
                    data: [
                        {
                        value: 100
                        }
                    ]
                    }
                ]
        };

        // Terapkan konfigurasi pada chart
        myChart.setOption(option);
    </script>
    

    <script>
            // Di dalam berkas JavaScript Anda
        $(document).ready(function(){
            $('.single-item').slick();
        });

    </script>
    
    
    

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


    <script>
        document.onreadystatechange = function () {
            if (document.readyState === "complete") {
                // Sembunyikan spinner saat halaman selesai dimuat
                document.querySelector(".spinner-overlay").style.display = "none";
            }
        };
    </script>


    <script>
        $(document).ready(function() {
            $('.accordion-toggle').click(function() {
                // Cari elemen i dengan kelas "toggle-icon" di dalam baris yang diklik
                var $icon = $(this).find('.toggle-icon');
                
                // Periksa nilai atribut "aria-expanded"
                var expanded = $(this).attr('aria-expanded');
                
                if (expanded === "true") {
                    // Jika collapse sedang terbuka, ubah ikon menjadi "ft-eye"
                    $icon.removeClass('ft-eye').addClass('ft-eye-off');
                } else {
                    // Jika collapse sedang tertutup, ubah ikon menjadi "ft-eye-off"
                    $icon.removeClass('ft-eye-off').addClass('ft-eye');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.accordion-toggle').click(function() {
                // Cari elemen i dengan kelas "toggle-icon" di dalam baris yang diklik
                var $icon = $(this).find('.toggle-eyes');
                
                // Periksa nilai atribut "aria-expanded"
                var expanded = $(this).attr('aria-expanded');
                
                if (expanded === "true") {
                    // Jika collapse sedang terbuka, ubah ikon menjadi "ft-eye"
                    $icon.removeClass('ft-eye').addClass('ft-eye-off');
                } else {
                    // Jika collapse sedang tertutup, ubah ikon menjadi "ft-eye-off"
                    $icon.removeClass('ft-eye-off').addClass('ft-eye');
                }
            });
        });
    </script>



</body>
<!-- END: Body-->

</html>
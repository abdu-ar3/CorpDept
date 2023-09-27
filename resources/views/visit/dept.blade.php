@extends('layouts.users.main') 

@section('title') BIODATA @endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script><script src="https://code.highcharts.com/highcharts-more.js"></script><script src="https://code.highcharts.com/highcharts-3d.js"></script><script src="https://code.highcharts.com/modules/stock.js"></script><script src="https://code.highcharts.com/maps/modules/map.js"></script><script src="https://code.highcharts.com/modules/gantt.js"></script><script src="https://code.highcharts.com/modules/exporting.js"></script><script src="https://code.highcharts.com/modules/parallel-coordinates.js"></script><script src="https://code.highcharts.com/modules/accessibility.js"></script><script src="https://code.highcharts.com/modules/annotations-advanced.js"></script><script src="https://code.highcharts.com/modules/data.js"></script><script src="https://code.highcharts.com/modules/draggable-points.js"></script><script src="https://code.highcharts.com/modules/static-scale.js"></script><script src="https://code.highcharts.com/modules/broken-axis.js"></script><script src="https://code.highcharts.com/modules/heatmap.js"></script><script src="https://code.highcharts.com/modules/tilemap.js"></script><script src="https://code.highcharts.com/modules/timeline.js"></script><script src="https://code.highcharts.com/modules/treemap.js"></script><script src="https://code.highcharts.com/modules/treegraph.js"></script><script src="https://code.highcharts.com/modules/item-series.js"></script><script src="https://code.highcharts.com/modules/drilldown.js"></script><script src="https://code.highcharts.com/modules/histogram-bellcurve.js"></script><script src="https://code.highcharts.com/modules/bullet.js"></script><script src="https://code.highcharts.com/modules/funnel.js"></script><script src="https://code.highcharts.com/modules/funnel3d.js"></script><script src="https://code.highcharts.com/modules/pyramid3d.js"></script><script src="https://code.highcharts.com/modules/networkgraph.js"></script><script src="https://code.highcharts.com/modules/pareto.js"></script><script src="https://code.highcharts.com/modules/pattern-fill.js"></script><script src="https://code.highcharts.com/modules/price-indicator.js"></script><script src="https://code.highcharts.com/modules/sankey.js"></script><script src="https://code.highcharts.com/modules/arc-diagram.js"></script><script src="https://code.highcharts.com/modules/dependency-wheel.js"></script><script src="https://code.highcharts.com/modules/series-label.js"></script><script src="https://code.highcharts.com/modules/solid-gauge.js"></script><script src="https://code.highcharts.com/modules/sonification.js"></script><script src="https://code.highcharts.com/modules/stock-tools.js"></script><script src="https://code.highcharts.com/modules/streamgraph.js"></script><script src="https://code.highcharts.com/modules/sunburst.js"></script><script src="https://code.highcharts.com/modules/variable-pie.js"></script><script src="https://code.highcharts.com/modules/variwide.js"></script><script src="https://code.highcharts.com/modules/vector.js"></script><script src="https://code.highcharts.com/modules/venn.js"></script><script src="https://code.highcharts.com/modules/windbarb.js"></script><script src="https://code.highcharts.com/modules/wordcloud.js"></script><script src="https://code.highcharts.com/modules/xrange.js"></script><script src="https://code.highcharts.com/modules/no-data-to-display.js"></script><script src="https://code.highcharts.com/modules/drag-panes.js"></script><script src="https://code.highcharts.com/modules/debugger.js"></script><script src="https://code.highcharts.com/modules/dumbbell.js"></script><script src="https://code.highcharts.com/modules/lollipop.js"></script><script src="https://code.highcharts.com/modules/cylinder.js"></script><script src="https://code.highcharts.com/modules/organization.js"></script><script src="https://code.highcharts.com/modules/dotplot.js"></script><script src="https://code.highcharts.com/modules/marker-clusters.js"></script><script src="https://code.highcharts.com/modules/hollowcandlestick.js"></script><script src="https://code.highcharts.com/modules/heikinashi.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@section('content')

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
                <!-- Card Utama -->
                <div class="card">
                    <div class="card-body">

                            <div class="from-group mb-2 ml-2 col-sm-4">
                                        <form action="{{ route('admin.itemkpi.filter') }}" method="get">
                                            <div class="form-group">
                                                <label for="user">Selected Dept</label>
                                                <select name="selectDept" class="form-control">
                                                  
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                                        </form>
                                        <hr>
                    
                                        </div>
                        <div class="row">
                            <!-- Card Kiri -->
                            <div class="col-md-4">
                                <div id="what-is" class="card">
                                    <div id="container"></div>

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
                                        text: 'Summary'
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
                                                </div>
                                </div>
                            
                            <!-- Card Kanan -->
                            <div class="col-md-8">
                                <div id="kick-start" class="card">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Company</th>
                                            <th scope="col" width="35%">Director</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Prasetia</td>
                                                <td>Arya Setiadharma</td>
                                            </tr>
                                            <tr> 
                                                <td colspan="2" class="text-center">Department Rank</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Larry the Bird</td>
                                                
                                            </tr>
                                            <tr>
                                            <td>
                                    
                                                <!-- Tabel dengan Collapse -->
                                                <table class="table">
                                                   <tr>
                                                        <th>#</th>
                                                        <th>
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseA1" aria-expanded="true" aria-controls="collapseA1">
                                                                Department
                                                            </button>
                                                        </th>
                                                        <th>
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseA2" aria-expanded="true" aria-controls="collapseA2">
                                                                Persentase
                                                            </button>
                                                        </th>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div id="collapseA1" class="collapse">
                                                                <!-- Konten yang akan muncul saat collapse terbuka -->
                                                                <p>test</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- Akhir Tabel dengan Collapse -->
                                                </td>
                                            </tr>

                                        </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    @forelse($pditemsByDepartment as $departmentId => $pditems)
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
                                        <th>&nbsp;</th>
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
                                        <td><button class="btn btn-default btn-xs"><i class="fa fa-low-vision"></i></button></td>
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
    @empty
    <div>Data Not Found</div>
@endforelse

            </div>
        </section>
</div>


        
</div>


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
                        color: 'white' // Atur warna latar belakang patch fill menjadi putih
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




@endsection
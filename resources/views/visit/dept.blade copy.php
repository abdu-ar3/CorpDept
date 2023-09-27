@extends('layouts.users.main') 

@section('title') BIODATA @endsection

<script src="https://code.highcharts.com/highcharts.js"></script><script src="https://code.highcharts.com/highcharts-more.js"></script><script src="https://code.highcharts.com/highcharts-3d.js"></script><script src="https://code.highcharts.com/modules/stock.js"></script><script src="https://code.highcharts.com/maps/modules/map.js"></script><script src="https://code.highcharts.com/modules/gantt.js"></script><script src="https://code.highcharts.com/modules/exporting.js"></script><script src="https://code.highcharts.com/modules/parallel-coordinates.js"></script><script src="https://code.highcharts.com/modules/accessibility.js"></script><script src="https://code.highcharts.com/modules/annotations-advanced.js"></script><script src="https://code.highcharts.com/modules/data.js"></script><script src="https://code.highcharts.com/modules/draggable-points.js"></script><script src="https://code.highcharts.com/modules/static-scale.js"></script><script src="https://code.highcharts.com/modules/broken-axis.js"></script><script src="https://code.highcharts.com/modules/heatmap.js"></script><script src="https://code.highcharts.com/modules/tilemap.js"></script><script src="https://code.highcharts.com/modules/timeline.js"></script><script src="https://code.highcharts.com/modules/treemap.js"></script><script src="https://code.highcharts.com/modules/treegraph.js"></script><script src="https://code.highcharts.com/modules/item-series.js"></script><script src="https://code.highcharts.com/modules/drilldown.js"></script><script src="https://code.highcharts.com/modules/histogram-bellcurve.js"></script><script src="https://code.highcharts.com/modules/bullet.js"></script><script src="https://code.highcharts.com/modules/funnel.js"></script><script src="https://code.highcharts.com/modules/funnel3d.js"></script><script src="https://code.highcharts.com/modules/pyramid3d.js"></script><script src="https://code.highcharts.com/modules/networkgraph.js"></script><script src="https://code.highcharts.com/modules/pareto.js"></script><script src="https://code.highcharts.com/modules/pattern-fill.js"></script><script src="https://code.highcharts.com/modules/price-indicator.js"></script><script src="https://code.highcharts.com/modules/sankey.js"></script><script src="https://code.highcharts.com/modules/arc-diagram.js"></script><script src="https://code.highcharts.com/modules/dependency-wheel.js"></script><script src="https://code.highcharts.com/modules/series-label.js"></script><script src="https://code.highcharts.com/modules/solid-gauge.js"></script><script src="https://code.highcharts.com/modules/sonification.js"></script><script src="https://code.highcharts.com/modules/stock-tools.js"></script><script src="https://code.highcharts.com/modules/streamgraph.js"></script><script src="https://code.highcharts.com/modules/sunburst.js"></script><script src="https://code.highcharts.com/modules/variable-pie.js"></script><script src="https://code.highcharts.com/modules/variwide.js"></script><script src="https://code.highcharts.com/modules/vector.js"></script><script src="https://code.highcharts.com/modules/venn.js"></script><script src="https://code.highcharts.com/modules/windbarb.js"></script><script src="https://code.highcharts.com/modules/wordcloud.js"></script><script src="https://code.highcharts.com/modules/xrange.js"></script><script src="https://code.highcharts.com/modules/no-data-to-display.js"></script><script src="https://code.highcharts.com/modules/drag-panes.js"></script><script src="https://code.highcharts.com/modules/debugger.js"></script><script src="https://code.highcharts.com/modules/dumbbell.js"></script><script src="https://code.highcharts.com/modules/lollipop.js"></script><script src="https://code.highcharts.com/modules/cylinder.js"></script><script src="https://code.highcharts.com/modules/organization.js"></script><script src="https://code.highcharts.com/modules/dotplot.js"></script><script src="https://code.highcharts.com/modules/marker-clusters.js"></script><script src="https://code.highcharts.com/modules/hollowcandlestick.js"></script><script src="https://code.highcharts.com/modules/heikinashi.js"></script>

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
            <div class="content-detached content-left">
                <div class="content-body">
                    <section class="row">

                        <div class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        

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

                </div>
            </div>
        
        </div>
@endsection
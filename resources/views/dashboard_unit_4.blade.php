@extends('layouts.dashboard')

@section('dashboard')

    <!--begin::Body Dashboard-->
    <div id="dashboard-body" class="mt-3">

        <!--begin::Card Diagram 3 Column-->
        <div class="row mx-3">
            <!--begin::Card column-->
            <div class="col-4">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::PIE CHART-->
                    <div id="pie-chart-1"></div>
                    <!-- data table is inserted here -->
                    <!--end::PIE CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end-begin::Card column-->
            <div class="col-4">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::STack CHART-->
                    <figure class="highcharts-figure">
                        <div id="donut-chart"></div>
                        <!-- data table is inserted here -->
                    </figure>
                    <!--end::STack CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end-begin::Card column-->
            <div class="col-4">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::STack CHART-->
                    <figure class="highcharts-figure">
                        <div id="pie-chart-3"></div>
                        <!-- data table is inserted here -->
                    </figure>
                    <!--end::STack CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card column-->
        </div>
        <!--end::Card Diagram 3 Column-->

        <!--begin::Card Diagram 2 Column-->
        <div class="row mx-3">
            <!--begin::Card column-->
            <div class="col-6">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::COLUMN CHART-->
                    <div id="column-chart"></div>
                    <!-- data table is inserted here -->
                    <!--end::COLUMN CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end-begin::Card column-->
            <div class="col-6">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::PIE CHART-->
                    <figure class="highcharts-figure">
                        <div id="chart-line"></div>
                        <!-- data table is inserted here -->
                    </figure>
                    <!--end::PIE CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card column-->
        </div>
        <!--end::Card Diagram 2 Column-->

    </div>
    <!--end::Body Dashboard-->

@endsection

@section('js-script')
    <!--begin::Highchart Pie-->
    <script>
        Highcharts.chart('pie-chart-1', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 5
                }
            },
            title: {
                text: 'Status',
                style: {
                    fontWeight: 'bold',
                    fontSize: '25px'
                }
            },
            subtitle: {
                // text: '3D donut in Highcharts'
            },
            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>&nbsp;{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                pie: {
                    innerSize: 0,
                    depth: 5,
                    showInLegend: true,
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                format : '<b>{point.key}</b><br>',
                itemStyle: {
                    fontSize:'15px',
                    // font: '20pt Trebuchet MS, Verdana, sans-serif',
                },
            },
            credits: {
                enabled: false
            },
            exporting: {
                showTable: true,
                allowHTML: true
            },
            series: [{
                name: 'Medals',
                data: [
                    ['Berjalan', 4],
                    ['Inisiatif', 12],
                    ['Penyelidikan', 13],
                    ['DKA', 10],
                    ['Berhenti', 14]
                ]
            }]
        });
    </script>
    <!--end::Highchart Pie-->

    <!--begin::Highchart Donut-->
    <script>
        Highcharts.chart('donut-chart', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 5
                }
            },
            title: {
                text: 'Jenis',
                style: {
                    fontWeight: 'bold',
                    fontSize: '25px'
                }
            },
            subtitle: {
                // text: '3D donut in Highcharts'
            },
            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>&nbsp;{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                pie: {
                    innerSize: 150,
                    depth: 5,
                    showInLegend: true,
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                format : '<b>{point.key}</b><br>',
                itemStyle: {
                    fontSize:'15px',
                    // font: '20pt Trebuchet MS, Verdana, sans-serif',
                },
            },
            credits: {
                enabled: false
            },
            exporting: {
                showTable: true,
                allowHTML: true
            },
            series: [{
                name: 'Medals',
                data: [
                    ['Tender', 18],
                    ['Non-Tender', 14]
                ]
            }]
        });
    </script>
    <!--end::Highchart Donut-->
    
    <!--begin::Highchart Pie-->
    <script>
        Highcharts.chart('pie-chart-3', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 5
                }
            },
            title: {
                text: 'Klasifikasi Nilai Tender',
                style: {
                    fontWeight: 'bold',
                    fontSize: '25px'
                }
            },
            subtitle: {
                // text: '3D donut in Highcharts'
            },
            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>&nbsp;{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                pie: {
                    innerSize: 0,
                    depth: 5,
                    showInLegend: true,
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                format : '<b>{point.key}</b><br>',
                itemStyle: {
                    fontSize:'15px',
                    // font: '20pt Trebuchet MS, Verdana, sans-serif',
                },
            },
            credits: {
                enabled: false
            },
            exporting: {
                showTable: true,
                allowHTML: true
            },
            series: [{
                name: 'Medals',
                data: [
                    ['< 10M', 4],
                    ['10-30M', 8],
                    ['30-50M', 13],
                    ['50-100M', 12],
                    ['> 100M', 10]
                ]
            }]
        });
    </script>
    <!--end::Highchart Pie-->

    <!--begin::Highchart Column-->
    <script>
        Highcharts.chart('column-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Register',
                style: {
                    fontWeight: 'bold',
                    fontSize: '25px'
                }
            },
            subtitle: {
                // text: 'Source: '
            },
            xAxis: {
                categories: [
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                ],
                crosshair: true,
                // visible: false,
            },
            yAxis: {
                title: {
                    useHTML: true,
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>&nbsp;{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.1,
                    borderWidth: 0,
                    // borderRadius: 5,
                    borderRadiusTopLeft: 5,
                    borderRadiusTopRight: 5,
                    showInLegend: false
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                format : '<b>{point.key}</b><br>',
                itemStyle: {
                    fontSize:'15px',
                    // font: '20pt Trebuchet MS, Verdana, sans-serif',
                },
            },
            credits: {
                enabled: false
            },
            exporting: {
                showTable: true,
                allowHTML: true
            },
            series: [{
                name: 'Input',
                data: [11, 13, 12, 8, 10, 18, 12, 9, 15, 17, 12, 9]
            }]
        });
    </script>
    <!--end::Highchart Column-->

    <!--begin::Highchart Line-->
    <script>
        Highcharts.chart('chart-line', {
            title: {
                text: 'Wilayah Laporan Tingkat Provinsi',
                style: {
                    fontWeight: 'bold',
                    fontSize: '25px'
                }
            },

            subtitle: {
                // text: ''
            },

            yAxis: {
                title: {
                    text: ''
                }
            },

            xAxis: {
                accessibility: {
                    // rangeDescription: 'Range: 2010 to 2020'
                },
                categories: [
                        "Sumatera", "Jawa", "DKI Jakarta", "Bali", "NTT/NTB", "Kalimantan", "Sulawesi", "Maluku", "Papua"
                    ],
            },

            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>&nbsp;{point.y:.0f}</b></td></tr>',
                footerFormat: '</table>',
                // shared: true,
                useHTML: true
            },
            
            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    // pointStart: 1
                }
            },

            credits: {
                enabled: false
            },
            exporting: {
                showTable: true,
                allowHTML: true
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                format : '<b>{point.key}</b><br>',
                itemStyle: {
                    fontSize:'20px',
                },
            },

            series: [{
                name: 'Wilayah Pelapor',
                data: [11908, 5548, 8105, 11248, 8989, 11816, 28274,
                    27300, 39053]
            }, {
                name: 'Objek Pelaporan',
                data: [23934, 28656, 35165, 41827, 52143, 62383,
                    71533, 75174, 95157]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

            });
    </script>
    <!--end::Highchart Line-->


@endsection
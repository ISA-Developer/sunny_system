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
                        <div id="pie-chart-2"></div>
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
                        <div id="stack-chart"></div>
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
                text: 'Jumlah Kerja Sama',
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
                showTable: false,
                allowHTML: true
            },
            series: [{
                name: 'Medals',
                data: [
                    ['Kementrian/Lembaga', 11],
                    ['Universitas-Perguruan Tinggi', 18],
                    ['Organisasi dan LSM', 6],
                    ['Penegak Hukum', 7],
                    ['Pemerintah Daerah', 13]
                ]
            }]
        });
    </script>
    <!--end::Highchart Pie-->

    <!--begin::Highchart Pie-->
    <script>
        Highcharts.chart('pie-chart-2', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 5
                }
            },
            title: {
                text: 'Jumlah Jenis Kegiatan',
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
                showTable: false,
                allowHTML: true
            },
            series: [{
                name: 'Medals',
                data: [
                    ['Kajian/Penelitian', 7],
                    ['Kegiatan Lainnya', 20],
                    ['Magang', 4],
                    ['Narasumber Ahli', 18],
                    ['Pertukaran Informasi/Konsultasi', 16],
                    ['Workship/Seminar/Konferensi GEO', 12],
                    ['Pelatihan', 2]
                ]
            }]
        });
    </script>
    <!--end::Highchart Pie-->
    
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
                text: 'Jumlah Kategori Mitra',
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
                showTable: false,
                allowHTML: true
            },
            series: [{
                name: 'Medals',
                data: [
                    ['Kementrian/Lembaga', 11],
                    ['Universitas-Perguruan Tinggi', 24],
                    ['Organisasi dan LSM', 3],
                    ['Penegak Hukum', 6],
                    ['Pemerintah Daerah', 13],
                    ['Lembaga/Otoritas Internasional', 1]
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
                text: 'Jumlah Pemohon Informasi Publik',
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
                    '2019',
                    '2020',
                    '2021',
                    '2022'
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
                    showInLegend: true
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
                data: [11.5, 13.9, 12.6, 14]

            }, {
                name: 'Output',
                data: [5.8, 8.3, 6.32, 9.3]

            }]
        });
    </script>
    <!--end::Highchart Column-->

    <!--begin::Highchart Stack-->
    <script>
        Highcharts.chart('stack-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Pemohon Informasi Yang Diproses',
                style: {
                    fontWeight: 'bold',
                    fontSize: '25px'
                }
            },
            xAxis: {
                categories: ['2019', '2020', '2021', '2022']
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: ( // theme
                            Highcharts.defaultOptions.title.style &&
                            Highcharts.defaultOptions.title.style.color
                        ) || 'gray',
                        textOutline: 'none'
                    }
                }
            },
            legend: {
                align: 'left',
                x: 70,
                verticalAlign: 'top',
                y: 70,
                floating: true,
                // backgroundColor:
                //     Highcharts.defaultOptions.legend.backgroundColor || 'white',
                borderColor: '#CCC',
                borderWidth: 0,
                shadow: false
            },
            tooltip: {
                headerFormat: '<b>{point.x}</b><br/>',
                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.1,
                    borderWidth: 0,
                    // borderRadius: 5,
                    stacking: 'normal',
                    // dataLabels: {
                    //     enabled: true
                    // }
                }
            },
            credits: {
                enabled: false
            },
            exporting: {
                showTable: true,
                allowHTML: true
            },
            series: [{
                name: 'Piutang',
                data: [3, 5, 1, 6]
            }, {
                name: 'Laba',
                data: [11, 8, 8, 12]
            }, {
                name: 'Rugi',
                data: [1, 2, 6, 3]
            }]
        });
    </script>
    <!--begin::Highchart Stack-->


@endsection
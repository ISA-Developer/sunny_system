@extends('layouts.dashboard')

@section('dashboard')

    <!--begin::Body Dashboard-->
    <div id="dashboard-body" class="mt-3">

        <!--begin::Card Diagram 2 Column-->
        <div class="row mx-3">
            <!--begin::Card column-->
            <div class="col-6">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::COLUMN CHART-->
                    <div id="chart-line"></div>
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
                        <div id="column-chart"></div>
                        <!-- data table is inserted here -->
                    </figure>
                    <!--end::PIE CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card column-->
        </div>
        <!--end::Card Diagram 2 Column-->

        <!--begin::Card Line col-12-->
        <div class="row mx-3">
            <!--begin::Card column-->
            <div class="col-12">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::LINE CHART-->
                    <figure class="highcharts-figure">
                        <div class="chart-outer" id="table-line">
                            <div id="chart-line-perkara" style="width: 70%; padding-right: 10px; overflow: unset;"></div>
                            <!-- data table is inserted here -->
                        </div>
                    </figure>
                    <!--end::LINE CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card column-->
        </div>
        <!--end::Card Line col-12-->

    </div>
    <!--end::Body Dashboard-->

@endsection

@section('js-script')
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
                        "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"
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
                showTable: false,
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
                name: 'Inisiatif',
                data: [5, 6, 3, 6, 4, 5, 7, 4, 8, 8, 6, 4, 5]
            }, {
                name: 'Laporan',
                data: [5, 12, 9, 19, 15, 29, 47, 34, 38, 28, 16, 24, 15]
            }, {
                name: 'Kemitraan',
                data: [1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0]
            }, {
                name: 'Keterlambatan Pemberitahuan',
                data: [3, 4, 1, 4, 5, 6, 5, 7, 8, 9, 5, 3, 7]
            }],

            responsive: {
                rules: [{
                    condition: {
                        // maxWidth: 500
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

    <!--begin::Highchart Column-->
    <script>
        Highcharts.chart('column-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Perbandingan Output Perkara Per Tahun',
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
                        "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"
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
                    borderRadiusTopLeft: 2.5,
                    borderRadiusTopRight: 2.5,
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
                name: 'Penetapan',
                data: [5, 6, 3, 6, 4, 5, 7, 4, 8, 8, 6, 4, 5]
            }, {
                name: 'Putusan',
                data: [5, 12, 9, 19, 15, 29, 47, 34, 38, 28, 16, 24, 15]
            }]
        });
    </script>
    <!--end::Highchart Column-->

    <!--begin::Highchart Line-->
    <script>
        Highcharts.chart('chart-line-perkara', {
            title: {
                text: 'Tren Tahunan Perkara',
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
                        "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"
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
                name: 'Perkara',
                data: [5, 12, 9, 19, 15, 29, 47, 34, 38, 28, 16, 24, 15]
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
    @extends('layouts.main')

    @section('title', 'Layout Builder')


    @php
        if (isset($active)){
            $styleHover = $active."!important";
        } else {
            $styleHover = "#ffa800";
        }
    @endphp
    <style>
        .colorpick-eyedropper-input-trigger{
            display: none;
        }
        .aside-dark .menu .menu-item .menu-link:hover:not(.disabled):not(.active){
            background-color: {{ $styleHover }};
        }
        .chart-outer {
        display: flex;
        }
    
        .highcharts-data-table {
        background: white;
        min-width: 30%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        font-size: 15px;
        }
    
        .highcharts-data-table th {
        pointer-events: none; 
        }
    
        #highcharts-data-table-0,
        #highcharts-data-table-1 {
        margin: 0;
        }
    
        .highcharts-data-table table {
        border-collapse: collapse;
        border-spacing: 0;
        background: white;
        min-width: 100%;
        margin-top: 10px;
        font-family: sans-serif;
        font-size: 0.9em;
        }
    
        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
        border: 0px solid silver;
        padding: 0.5em;
        }
    
        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
        }
    
        .highcharts-data-table tr:hover {
        background: #eff;
        }
    
        .highcharts-data-table caption {
        border-bottom: none;
        font-size: 1.1em;
        font-weight: bold;
        }
    
    </style>

    @section('container')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Layout Builder
                        <!--begin::Separator-->
                        {{-- <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span> --}}
                        <!--end::Separator-->
                        <!--begin::Description-->
                        {{-- <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small> --}}
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                {{-- <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <div class="me-4">
                        <!--begin::Menu-->
                        <a href="#"
                            class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter
                        </a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                            data-kt-menu="true" id="kt_menu_6155ac804a1c2">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid"
                                            data-kt-select2="true" data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_6155ac804a1c2"
                                            data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox"
                                                value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox"
                                                value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" id="kt_toolbar_primary_button">Create</a>
                    <!--end::Button-->
                </div> --}}
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        @php
            if (isset($color) && isset($active)) {
                $sideColor = $color;
                $activeColor = $active;
            } else {
                $sideColor = "#535353";
            }
        @endphp

        <!--begin::Card Diagram Column dan Donut-->
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
                        <div id="donut-chart"></div>
                        <!-- data table is inserted here -->
                    </figure>
                    <!--end::PIE CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card column-->
        </div>
        <!--end::Card Diagram Column dan Donut-->
        <!--begin::Post-->
        <div class="card mx-6" Id="List-vv" style="position: relative; overflow: hidden;">
            <!--begin::Card body-->
            <div class="card-body pt-6">
                <form action="/setting/cookie" method="post">
                    @csrf
                    <!--begin::Aside Setting-->
                    <div class="row">
                        <h1>Diagram Chart Color</h1>
                    </div>
                    <!--begin::Options-->
                    <br>
                    <div class="d-flex" style="flex-direction: row">
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-6 ms-4 align-middle">
                            <input class="form-check-input" type="radio" value="['#017EB8', '#28B3AC', '#F7AD1A', '#9FE7F5', '#E86340', '#063F5C']" id="chart-color" name="chart-color" {{ $chartColor == "['#017EB8', '#28B3AC', '#F7AD1A', '#9FE7F5', '#E86340', '#063F5C']" ? 'checked' : '' }}/>
                            <span class="form-check-label px-3 py-3"><b>Alt Color 1 :</b></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #017EB8"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #28B3AC"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #F7AD1A"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #9FE7F5"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #E86340"></span>
                            <span class="form-check-label me-4 px-3 py-3" style="background: #063F5C"></span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-6">
                            <input class="form-check-input" type="radio" value="['#239DB5', '#71B383', '#EE8E52', '#EBC44F', '#8D5690', '#E85170',  '#4282A6']" id="chart-color" name="chart-color" {{ $chartColor == "['#239DB5', '#71B383', '#EE8E52', '#EBC44F', '#8D5690', '#E85170',  '#4282A6']" ? 'checked' : '' }}/>
                            <span class="form-check-label px-3 py-3"><b>Alt Color 2 :</b></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #239DB5"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #71B383"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #EE8E52"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #EBC44F"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #8D5690"></span>
                            <span class="form-check-label me-4 px-3 py-3" style="background: #E85170"></span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-6">
                            <input class="form-check-input" type="radio" value="['#009EF7', '#50CD89', '#F1416C', '#FFC700', '#7239EA', '#43CED7', '#FA8B28']" id="chart-color" name="chart-color" {{ $chartColor == "['#009EF7', '#50CD89', '#F1416C', '#FFC700', '#7239EA', '#43CED7', '#FA8B28']" ? 'checked' : '' }}/>
                            <span class="form-check-label px-3 py-3"><b>Alt Color 3 :</b></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #009EF7"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #50CD89"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #F1416C"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #FFC700"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #7239EA"></span>
                            <span class="form-check-label me-4 px-3 py-3" style="background: #43CED7"></span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-6">
                            <input class="form-check-input" type="radio" value="['#003A6B', '#1B5886', '#3776A1', '#5293BB', '#6EB1D6', '#89CFF1']" id="chart-color" name="chart-color" {{ $chartColor == "['#003A6B', '#1B5886', '#3776A1', '#5293BB', '#6EB1D6', '#89CFF1']" ? 'checked' : '' }}/>
                            <span class="form-check-label px-3 py-3"><b>Monochrome :</b></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #009EF7"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #1B5886"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #3776A1"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #5293BB"></span>
                            <span class="form-check-label me-0 px-3 py-3" style="background: #6EB1D6"></span>
                            <span class="form-check-label me-4 px-3 py-3" style="background: #89CFF1"></span>
                        </label>
                        <!--end::Options-->
                        {{-- <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-6">
                            <input class="form-check-input" type="radio" value="" id="chart-color" name="chart-color" {{ $chartColor == "" ? 'checked' : '' }}/>
                            <span class="form-check-label px-3 py-3"><b>Default</b></span>
                        </label>
                        <!--end::Options--> --}}
                    </div>
                    <br>
                    <br>
                    <!--end::Options-->
                    <br>

                    <div class="row">
                        <h1>Side Bar Color</h1>
                        <input class="form-control mt-3 col-6" type="color" id="aside-color" name="aside-color" value="{{ $sideColor ?? "#535353" }}">
                    </div>
                    <br>
                    
                    <div class="row">
                        <h1>Active Page</h1>
                        <input class="form-control mt-3 col-6" type="color" id="active-color" name="active-color" value="{{ $activeColor ?? "#FFA800" }}">
                    </div>
                    <br>
                    <!--begin::Options-->
                    <div class="row">
                        {{-- <h1>Active Page</h1>
                        <input class="form-control mt-3 col-6" type="color" id="active-color" name="active-color" value="{{ $activeColor ?? "#FFA800" }}"> --}}
                        <label class="form-check form-check-sm form-check-custom form-check-solid ms-2 me-4">
                            <input class="form-check-input" type="checkbox" value="true" id="default" name="default" {{ $default == "true" ? 'checked' : '' }}/>
                            <span class="form-check-label px-3 py-3"><b>Default</b></span>
                        </label>
                    </div>
                    <br>
                    <!--end::Options-->
                    <div>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                    <!--end::Aside Setting-->
                </form>
            </div>
        
            <!--end::Card body-->
        </div>
        <!--end::Post-->
    </div>


    @endsection

    @section('js-script')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://rawgit.com/highcharts/rounded-corners/master/rounded-corners.js"></script>
    <script>
        let chartColor = {!! $chartColor !!} ?? [];
        console.log(chartColor);
        Highcharts.setOptions({
            chart: {
                style: {
                    fontFamily: 'Poppins'
                }
            },
            colors: chartColor,
            // colors: ["#017EB8", "#28B3AC", "#F7AD1A", "#9FE7F5", "#E86340", "#063F5C"],
            // colors: ["#239DB5", "#71B383", "#EE8E52", "#EBC44F", "#8D5690", "#E85170",  "#4282A6"],
            // colors: ["#009EF7", "#50CD89", "#F1416C", "#FFC700", "#7239EA", "#43CED7", "#FA8B28"],
        });
    </script>

    <!--begin::Highchart Column-->
    <script>
        Highcharts.chart('column-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Sunny Column Chart',
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
                data: [5, 13, 12, 10]
            }, {
                name: 'Proses',
                data: [8, 9, 6, 14]
            }, {
                name: 'Output',
                data: [5, 8, 13, 9]
            }]
        });
    </script>
    <!--end::Highchart Column-->

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
                text: 'Sunny Donut Chart',
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
                    ['2019', 8],
                    ['2020', 16],
                    ['2021', 12],
                    ['2022', 8],
                    ['Others', 4]
                ]
            }]
        });
    </script>
    <!--end::Highchart Donut-->
    
    @endsection
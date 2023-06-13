@extends('layouts.dashboard')

@section('dashboard')

    <!--begin::Body Dashboard-->
    <div id="dashboard-body" class="mt-3">

        <!--begin::Card Diagram 2 Column-->
        <div class="row mx-3">
            <!--begin::Card column-->
            <div class="col-12">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::COLUMN CHART-->
                    <div id="stack-chart"></div>
                    <!-- data table is inserted here -->
                    <!--end::COLUMN CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end-begin::Card column-->
            {{-- <div class="col-6">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::PIE CHART-->
                    <figure class="highcharts-figure">
                        <div id="col-chart-2"></div>
                        <!-- data table is inserted here -->
                    </figure>
                    <!--end::PIE CHART-->
                </div>
                <!--end::Card body-->
            </div> --}}
            <!--end::Card column-->
        </div>
        <!--end::Card Diagram 2 Column-->

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
                        <div id="column-chart-2"></div>
                        <!-- data table is inserted here -->
                    </figure>
                    <!--end::PIE CHART-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card column-->
        </div>
        <!--end::Card Diagram 2 Column-->

        <!--begin::Card Table-->
        <div class="row mx-6">
            <!--begin::Col-->
            <div class="col-12">
                <!--begin::Table Widget 4-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Peminjaman Ruangan, Peminjaman BMN, Jumlah BMN Rusak</span>
                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Destination-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <div class="text-gray-400 fs-7 me-2">Cateogry</div>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                        <option></option>
                                        <option value="Show All" selected="selected">Show All</option>
                                        <option value="a">Category A</option>
                                        <option value="b">Category A</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Destination-->
                                <!--begin::Status-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <div class="text-gray-400 fs-7 me-2">Status</div>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                        <option></option>
                                        <option value="Show All" selected="selected">Show All</option>
                                        <option value="Shipped">Shipped</option>
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Status-->
                                <!--begin::Search-->
                                <div class="position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Filters-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-2">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">Order ID</th>
                                    <th class="text-end min-w-100px">Created</th>
                                    <th class="text-end min-w-125px">Customer</th>
                                    <th class="text-end min-w-100px">Total</th>
                                    <th class="text-end min-w-100px">Profit</th>
                                    <th class="text-end min-w-50px">Status</th>
                                    <th class="text-end"></th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                    <td colspan="2">
                                        <div class="d-flex align-items-center gap-3">
                                            <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                <img src="" data-kt-src-path="/metronic8/demo1/assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
                                            </a>
                                            <div class="d-flex flex-column text-muted">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold" data-kt-table-widget-4="template_name">Product name</a>
                                                <div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <div class="text-gray-800 fs-7">Cost</div>
                                        <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_cost">1</div>
                                    </td>
                                    <td class="text-end">
                                        <div class="text-gray-800 fs-7">Qty</div>
                                        <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_qty">1</div>
                                    </td>
                                    <td class="text-end">
                                        <div class="text-gray-800 fs-7">Total</div>
                                        <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_total">name</div>
                                    </td>
                                    <td class="text-end">
                                        <div class="text-gray-800 fs-7 me-3">On hand</div>
                                        <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_stock">32</div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
                                    </td>
                                    <td class="text-end">7 min ago</td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
                                    </td>
                                    <td class="text-end">630.00</td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bolder">86.70</span>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
                                    </td>
                                    <td class="text-end">52 min ago</td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
                                    </td>
                                    <td class="text-end">25.00</td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bolder">4.20</span>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
                                    </td>
                                    <td class="text-end">1 hour ago</td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
                                    </td>
                                    <td class="text-end">1,630.00</td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bolder">203.90</span>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
                                    </td>
                                    <td class="text-end">3 hour ago</td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
                                    </td>
                                    <td class="text-end">119.00</td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bolder">12.00</span>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
                                    </td>
                                    <td class="text-end">2 day ago</td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
                                    </td>
                                    <td class="text-end">660.00</td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bolder">52.26</span>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
                                    </td>
                                    <td class="text-end">2 day ago</td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
                                    </td>
                                    <td class="text-end">290.00</td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bolder">29.00</span>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
                                    </td>
                                    <td class="text-end">7 min ago</td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
                                    </td>
                                    <td class="text-end">590.00</td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bolder">50.00</span>
                                    </td>
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 4-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Card Table-->

    </div>
    <!--end::Body Dashboard-->

@endsection

@section('js-script')
    <!--begin::Highchart Stack-->
    <script>
        Highcharts.chart('stack-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Pengadaan Tiap Tahun',
                style: {
                    fontWeight: 'bold',
                    fontSize: '25px'
                }
            },
            xAxis: {
                categories: ['Rumah Tangga', 'Sarana dan Prasarana', 'Lainnya']
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
                name: 'Selesai',
                data: [3, 5, 6]
            }, {
                name: 'Proses',
                data: [11, 8, 12]
            }, {
                name: 'Tunda',
                data: [4, 2, 3]
            }]
        });
    </script>
    <!--begin::Highchart Stack-->

    <!--begin::Highchart Column-->
    <script>
        Highcharts.chart('column-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Layanan Rumah Tangga',
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
                    'Berhasil',
                    'On-Going'
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
                name: 'Rumah Tangga',
                data: [12000000,18000000]
            }, {
                name: 'Kurir',
                data: [9000000,12000000]
            }, {
                name: 'Supir',
                data: [8000000,6000000]

            }]
        });
    </script>
    <!--end::Highchart Column-->

    <!--begin::Highchart Column-->
    <script>
        Highcharts.chart('column-chart-2', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Per Tahun',
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
                name: 'Pengadaan BMN',
                data: [32]
            }, {
                name: 'Penghapusan BMN',
                data: [22]

            }]
        });
    </script>
    <!--end::Highchart Column-->

@endsection

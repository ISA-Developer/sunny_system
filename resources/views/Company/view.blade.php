@extends('layouts.main')

@section('title', 'Company Detail')

@section('container')

@php
    $chart = Illuminate\Support\Facades\Cookie::get('chart');
@endphp


<!--End :: Customer Menu-->
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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Company Detail</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="content" class="mt-1 px-5">
        <div class="card">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-80px symbol-fixed position-relative">
                            <img src="/assets/media/avatars/150-26.jpg" alt="image">
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div>
                    </div>
                    <!--end::Pic-->
        
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Indonesia Power, PT.</a>
                                </div>
                                <!--end::Name-->
        
                                <!--begin::Info-->                        
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <p href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <span class="svg-icon svg-icon-4 me-1"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"></path>
                                        <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"></path>
                                        <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"></rect>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        Customer
                                    </p>
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-4 me-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"></path>
                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"></path>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        SF, Bay Area
                                    </a>
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                        <span class="svg-icon svg-icon-4 me-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
                                        <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        max@kt.com
                                    </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
        
                            <!--begin::Actions-->
                            <div class="d-flex my-4">                                
                                <a href="#" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_profile">Edit Profile</a>        
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->   
        
                <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a href="#" class="nav-link text-active-primary ms-0 me-10 py-5 active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">
                                Overview
                            </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a href="#" class="nav-link text-active-primary ms-0 me-10 py-5" id="information-tab" data-bs-toggle="tab" data-bs-target="#company-information" type="button" role="tab" aria-controls="company-information" aria-selected="true">
                                Company Information
                            </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a href="#" class="nav-link text-active-primary ms-0 me-10 py-5" id="contacts-tab" data-bs-toggle="tab" data-bs-target="#contacts-structure" type="button" role="tab" aria-controls="contacts-structure" aria-selected="true">
                                Contacts and Structure
                            </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a href="#" class="nav-link text-active-primary ms-0 me-10 py-5" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="true">
                                History
                            </a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                <!--begin::Navs-->

            </div>
            <!--Begin::Card Body-->
        </div>
        <!--Begin::Card-->
    </div>
    <!--end::Content-->

    <!--Begin::Content-->
    <div class="content mt-3 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--Begin::Tab Panel-->
        <div class="tab-content">
            <!--Begin :: Tab Pane Overview-->
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div id="content" class="mt-1 px-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-5 mb-7">
                                <h2>Overview</h2>
                            </div>
                            <div class="row mx-3">
                                <!--begin::Card body-->
                                <div class="col-4">
                                    <div class="card-body pt-0">
                                        <!--begin::Card widget 20-->
                                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10" style="background-color: rgb(36, 194, 189) ;background-image:url('/assets/media/patterns/vector-1.png');background-repeat: no-repeat;background-size: auto;">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                                    <!--end::Amount-->
                                                    <!--begin::Subtitle-->
                                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                    <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                                        <span>43 Pending</span>
                                                        <span>72%</span>
                                                    </div>
                                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                                        <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 20-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card body-->
                                <div class="col-4">
                                    <div class="card-body pt-0">
                                        <!--begin::Card widget 20-->
                                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10" style="background-color: rgb(214, 153, 49) ;background-image:url('/assets/media/patterns/vector-1.png');background-repeat: no-repeat;background-size: auto;">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                                    <!--end::Amount-->
                                                    <!--begin::Subtitle-->
                                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                    <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                                        <span>43 Pending</span>
                                                        <span>72%</span>
                                                    </div>
                                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                                        <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 20-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card body-->
                                <div class="col-4">
                                    <div class="card-body pt-0">
                                        <!--begin::Card widget 20-->
                                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10" style="background-color: rgb(36, 99, 194) ;background-image:url('/assets/media/patterns/vector-1.png');background-repeat: no-repeat;background-size: auto;">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                                    <!--end::Amount-->
                                                    <!--begin::Subtitle-->
                                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                    <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                                        <span>43 Pending</span>
                                                        <span>72%</span>
                                                    </div>
                                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                                        <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 20-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <div class="row mx-3">
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
                        </div>
                    </div>
                </div>
            </div>
            <!--End :: Tab Pane Overview-->

            <!--Begin :: Tab Pane Company Information-->
            <div class="tab-pane fade" id="company-information" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div id="content" class="mt-1 px-5">
                    <div class="card">
                        <div class="card-body m-7">
                            <!--begin::Segmentation-->
                            <div id="collaps-1" class="mb-7">
                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Segmentation
                                    <i onclick="hideColumn(this, '#Segmentation')" id="hide-button" style="display: none" class="bi bi-arrows-collapse"></i>
                                    <i onclick="showColumn(this, '#Segmentation')" id="show-button" class="bi bi-arrows-expand"></i>
                                </h2>
                                <form action="post">
                                    @csrf
                                    <div id="Segmentation" class="m-2" style="display:none">
                                        <!--Begin::Row-->
                                        <div class="row fv-row my-5">
                                            <!--Begin::Coloumn-->
                                            <div class="col-6">
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span class="">No. of Employees</span>
                                                </label>
                                                <!--Begin::Select-->
                                                <div id="employees">
                                                    <input name="employees" id="employees" class="form-control form-control-solid" value="" placeholder="Input No Employees" />
                                                </div>
                                                <!--End::Select-->
                                            </div>
                                            <!--End::Coloumn-->
        
                                            <!--Begin::Coloumn-->
                                            <div class="col-6">
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span class="">Business Entity</span>
                                                </label>
                                                <!--Begin::Select-->
                                                <div id="business-entity">
                                                    <input name="business-entity" id="business-entity" class="form-control form-control-solid" value="" placeholder="Input Buseiness Entity" />
                                                </div>
                                                <!--End::Select-->
                                            </div>
                                            <!--End::Coloumn-->
                                        </div>
                                        <!--End::Row-->
        
                                        <!--Begin::Row-->
                                        <div class="row fv-row my-7">
                                            <div class="col-6">
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span class="">Annual Revenue</span>
                                                </label>
                                                <!--Begin::Select-->
                                                <div id="annual-revenue">
                                                    <select name="annual-revenue" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select Annual Revenue" style="padding: 50px">
                                                        <option value=""></option>
                                                        <option value="10 milion or less">10 milion or less</option>
                                                        <option value="11 - 15 milion">10 - 15 milion</option>
                                                        <option value="16 - 20 milion">16 - 20 milion</option>
                                                        <option value="21 - 30 milion">21 - 30 milion</option>
                                                        <option value="30 milion or more">30 milion or more</option>
                                                    </select>
                                                </div>
                                                <!--End::Select-->
                                            </div>
                                        </div>
                                        <!--End::Row-->
                                        <hr>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <!--End::Segmentation-->
                            <!--begin::Communication Option-->
                            <div id="collaps-2" class="mb-7">
                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Communication Option
                                    <i onclick="hideColumn(this, '#Communication')" id="hide-button" style="display: none" class="bi bi-arrows-collapse"></i>
                                    <i onclick="showColumn(this, '#Communication')" id="show-button" class="bi bi-arrows-expand"></i>
                                </h2>
                                {{-- <form action="post"> --}}
                                    @csrf
                                    <div id="Communication" class="m-2" style="display:none">
                                        <!--Begin::Row-->
                                        <div class="row fv-row my-5">
                                            <!--Begin::Coloumn-->
                                            <div class="col-6">
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span class="">Website</span>
                                                </label>
                                                <!--Begin::Select-->
                                                <div id="web">
                                                    <input name="website" id="website" class="form-control form-control-solid" value="maxSmith.com" disabled/>
                                                </div>
                                                <!--End::Select-->
                                            </div>
                                            <!--End::Coloumn-->
        
                                            <!--Begin::Coloumn-->
                                            <div class="col-6">
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span class="">Primary Phone</span>
                                                </label>
                                                <!--Begin::Select-->
                                                <div id="primary-phone">
                                                    <input name="primary-phone" id="primary-phone" class="form-control form-control-solid" value="6258212345678" disabled/>
                                                </div>
                                                <!--End::Select-->
                                            </div>
                                            <!--End::Coloumn-->
                                        </div>
                                        <!--End::Row-->
        
                                        <!--Begin::Row-->
                                        <div class="row fv-row my-7">
                                            <div class="col-6">
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span class="">Email</span>
                                                </label>
                                                <!--Begin::Select-->
                                                <div id="annual-revenue">
                                                    <input name="primary-phone" id="primary-phone" class="form-control form-control-solid" value="max@kt.com" disabled/>
                                                </div>
                                                <!--End::Select-->
                                            </div>
                                        </div>
                                        <!--End::Row-->
                                        {{-- <div class="row fv-row my-7">
                                            <div class="d-block text-end">
                                                <button class="btn btn-primary btn-sm" type="submit"> Save </button>
                                            </div>
                                        </div> --}}
                                        <hr>
                                    </div>
                                {{-- </form> --}}
                            </div>
                            <!--End::Communication Option-->
                            <br>
                            <!--Begin::Address-->
                            <div id="collaps-3" class="mb-7">
                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Address
                                    <a href="#" Id="Plus" data-bs-toggle="modal" data-bs-target="#kt_modal_address"><i class="bi bi-plus-lg ms-2"></i></a>
                                </h2>
                                <br>
                                <table class="table align-middle table-row-dashed fs-6 gy-2" id="table-address">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-auto text-align-center">No</th>
                                            <th class="min-w-50">Address Type</th>
                                            <th class="min-w-auto">Address</th>
                                            <th class="min-w-auto">City</th>
                                            <th class="min-w-auto">Country</th>
                                            <th class="min-w-auto">ZIP / Postal Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bussiness</td>
                                            <td>Jl. Sungai Brantas Raya No. 266 JAK-UT</td>
                                            <td>Jakarta</td>
                                            <td>Indonesia</td>
                                            <td>14045</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--End::Address-->
                            <br>
                            <!--Begin::Bank Details-->
                            <div id="collaps-3" class="mb-7">
                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Bank Details
                                    <a href="#" Id="Plus" data-bs-toggle="modal" data-bs-target="#kt_modal_banking"><i class="bi bi-plus-lg ms-2"></i></a>
                                </h2>
                                <br>
                                <table class="table align-middle table-row-dashed fs-6 gy-2" id="table-address">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-auto text-align-center">No</th>
                                            <th class="min-w-50">Name</th>
                                            <th class="min-w-auto">Manager</th>
                                            <th class="min-w-auto">Country</th>
                                            <th class="min-w-auto">Chief Accountant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bank Indonesia</td>
                                            <td>Max Smith</td>
                                            <td>Indonesia</td>
                                            <td>Max Smith</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--End::Bank Details-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End :: Tab Pane Company Information-->

            <!--Begin :: Tab Pane Contacts and Structure-->
            <div class="tab-pane fade" id="contacts-structure" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div id="content" class="mt-1 px-5">
                    <div class="card">
                        <div class="card-body m-7">
                            <!--begin::Segmentation-->
                            <div id="collaps-1" class="mb-7">
                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Organization Structure
                                    <a href="#" Id="Plus" data-bs-toggle="modal" data-bs-target="#kt_modal_organization"><i class="bi bi-plus-lg ms-2"></i></a>
                                </h2>
                                <br>
                                <table class="table align-middle table-row-dashed fs-6 gy-2" id="table-address">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-auto text-align-center">No</th>
                                            <th class="min-w-50">Divison</th>
                                            <th class="min-w-auto">Departement</th>
                                            <th class="min-w-auto">Manager</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>IT</td>
                                            <td>Development</td>
                                            <td>Manager</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <!--End::Segmentation-->

                            <!--Begin::Address-->
                            <div id="collaps-2" class="mb-7">
                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Contacts
                                    <a href="/customer" Id="Plus"><i class="bi bi-plus-lg ms-2"></i></a>
                                </h2>
                                <br>
                                <table class="table align-middle table-row-dashed fs-6 gy-2" id="table-contacts">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-auto text-align-center">No</th>
                                            <th class="min-w-50">Contact Name</th>
                                            <th class="min-w-auto">Job Title</th>
                                            <th class="min-w-auto">Mobile Phone</th>
                                            <th class="min-w-auto">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Alexander Pierto</td>
                                            <td>Supervisor</td>
                                            <td>6258123456</td>
                                            <td>pierto.alex@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--End::Address-->

                        </div>
                    </div>
                </div>
            </div>
            <!--End :: Tab Pane Company Information-->

            <!--Begin :: Tab Pane Contacts and Structure-->
            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div id="content" class="mt-1 px-5">
                    <div class="card">
                        <div class="card-body m-7">
                            <!--begin::Segmentation-->
                            <div id="collaps-1" class="mb-7">
                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Organization Structure
                                    <a href="#" Id="Plus" data-bs-toggle="modal" data-bs-target="#kt_modal_organization"><i class="bi bi-plus-lg ms-2"></i></a>
                                </h2>
                                <br>
                                <table class="table align-middle table-row-dashed fs-6 gy-2" id="table-address">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-auto text-align-center">No</th>
                                            <th class="min-w-50">Divison</th>
                                            <th class="min-w-auto">Departement</th>
                                            <th class="min-w-auto">Manager</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>IT</td>
                                            <td>Development</td>
                                            <td>Manager</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <!--End::Segmentation-->

                            <!--Begin::Address-->
                            <div id="collaps-2" class="mb-7">
                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Contacts
                                    <a href="/customer" Id="Plus"><i class="bi bi-plus-lg ms-2"></i></a>
                                </h2>
                                <br>
                                <table class="table align-middle table-row-dashed fs-6 gy-2" id="table-contacts">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-auto text-align-center">No</th>
                                            <th class="min-w-50">Contact Name</th>
                                            <th class="min-w-auto">Job Title</th>
                                            <th class="min-w-auto">Mobile Phone</th>
                                            <th class="min-w-auto">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Alexander Pierto</td>
                                            <td>Supervisor</td>
                                            <td>6258123456</td>
                                            <td>pierto.alex@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--End::Address-->

                        </div>
                    </div>
                </div>
            </div>
            <!--End :: Tab Pane Company Information-->

        </div>
        <!--End::Tab Panel-->


        <!--begin::Modal Address-->
        <form action="/company/address/save" method="post" enctype="multipart/form-data" id="form">
            @csrf
            
            <!--begin::Modal - Create Customer-->
            <div class="modal fade" id="kt_modal_address" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-800px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Add Address</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <i class="bi bi-x-lg"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-6 px-lg-6">
                            
                            <!--begin::Get Modal JS-->
                            <input type="hidden" class="modal-name" name="modal-name">
                            <!--end::Get Modal JS-->

                            <!--Begin::Row-->
                            <div class="row fv-row mb-7">
                                <!--Begin::Column Kanan + Kiri-->
                                <div class="col-6">
                                    <!--begin::Input group Country-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">Country</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="country" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select Country">
                                            <option value=""></option>
                                        </select>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input country is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group Country-->
                                </div>
                                <div class="col-6">
                                    <!--begin::Input group Type-->

                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="required">Type</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <!--Begin::Select-->
                                        <div id="annual-revenue">
                                            <select name="annual-revenue" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Annual Revenue">
                                                <option value=""></option>
                                                <option value="Actual">Actual</option>
                                                <option value="Legal">Legal</option>
                                                <option value="Shipping">Shipping</option>
                                            </select>
                                        </div>
                                        <!--End::Select-->
                                        <div class="invalid-feedback m-0" id="message1" style="visibility: hidden">
                                            Input name is invalid
                                        </div>
                                        <!--end::Input-->

                                    <!--end::Input group Type-->
                                </div>
                                <!--End::Column Kanan + Kiri-->
                            </div>
                            <!--End::Row-->
                            
                            <!--Begin::Row-->
                            <div class="row fv-row mb-7">
                                <!--Begin::Column Kanan + Kiri-->
                                <div class="col-6">
                                    <!--begin::Input group Province-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">State / Province</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="province" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select State / Province">
                                            <option value=""></option>
                                        </select>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input state/province is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group Province-->
                                </div>
                                <div class="col-6">
                                    <!--begin::Input group City-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">City</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="city" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select City">
                                            <option value=""></option>
                                        </select>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input city is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group City-->
                                </div>
                                <!--End::Column Kanan + Kiri-->
                            </div>
                            <!--End::Row-->
                            
                            <!--Begin::Row-->
                            <div class="row fv-row mb-7">
                                <!--Begin::Column Kanan + Kiri-->
                                <div class="col-6">
                                    <!--begin::Input group ZIP/Postal Code-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">ZIP / Postal Code</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="postal-code" class="form-control form-control-solid" value="" placeholder="Input ZIP / Postal Code">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input city is invalid
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group ZIP/Postal Code-->
                                <!--End::Column Kanan + Kiri-->
                            </div>
                            <!--End::Row-->
                            
                            <!--begin::Input group Address-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Address</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="address" id="address" rows="4" class="form-control form-control-solid"></textarea>
                                <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                    Input city is invalid
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group Address-->

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-light btn-active-primary text-white btn-primary" id="proyek_new_save">Save</button>
                            </div>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create App-->
        </form>
        <!--end::Modal Address-->
        
        <!--begin::Modal Bank Details-->
        <form action="/company/bank/save" method="post" enctype="multipart/form-data" id="form">
            @csrf
            
            <!--begin::Modal - Create Customer-->
            <div class="modal fade" id="kt_modal_banking" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-800px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Add Banking Details</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <i class="bi bi-x-lg"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-6 px-lg-6">
                            
                            <!--begin::Get Modal JS-->
                            <input type="hidden" class="modal-name" name="modal-name">
                            <!--end::Get Modal JS-->

                            <!--Begin::Row-->
                            <div class="row fv-row mb-7">
                                <!--Begin::Column Kanan + Kiri-->
                                <div class="col-6">
                                    <!--begin::Input group Country-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">Name</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="bank-name" name="bank-name" class="form-control form-control-solid" value="" placeholder="Input Banking Name">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input name is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group Country-->
                                </div>
                                <div class="col-6">
                                    <!--begin::Input group Type-->

                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="required">Manager</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <!--Begin::Select-->
                                        <div id="manager">
                                            <select name="manager" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Manager">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <!--End::Select-->
                                        <div class="invalid-feedback m-0" id="message1" style="visibility: hidden">
                                            Input manager is invalid
                                        </div>
                                        <!--end::Input-->

                                    <!--end::Input group Type-->
                                </div>
                                <!--End::Column Kanan + Kiri-->
                            </div>
                            <!--End::Row-->
                                                        
                            <!--Begin::Row-->
                            <div class="row fv-row mb-7">
                                <!--Begin::Column Kanan + Kiri-->
                                <div class="col-6">
                                    <!--begin::Input group Province-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">Chief Accountant</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="chief-accountant" id="chief-accountant" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select Chief Accountant">
                                            <option value=""></option>
                                        </select>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input chief-accountant is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group Province-->
                                </div>
                                <div class="col-6">
                                    <!--begin::Input group City-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">Country</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="country" id="country" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select Country">
                                            <option value=""></option>
                                        </select>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input country is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group City-->
                                </div>
                                <!--End::Column Kanan + Kiri-->
                            </div>
                            <!--End::Row-->
                            
                            <!--Begin::Row-->
                            <div class="row fv-row mb-7">
                                <!--Begin::Column Kanan + Kiri-->
                                <div class="col-6">
                                    <!--begin::Input group ZIP/Postal Code-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">Legal Entity</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="legal-entity" class="form-control form-control-solid" value="" placeholder="Input Legal Entity">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input legal entity is invalid
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group ZIP/Postal Code-->
                                <!--End::Column Kanan + Kiri-->
                            </div>
                            <!--End::Row-->
                            
                            <!--begin::Input group Address-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Description</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="description" id="description" rows="4" class="form-control form-control-solid"></textarea>
                                <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                    Input description is invalid
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group Address-->

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-light btn-active-primary text-white btn-primary" id="proyek_new_save">Save</button>
                            </div>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create App-->
        </form>
        <!--end::Modal Bank Details-->

        <!--begin::Modal Organization and Structure-->
        <form action="/company/organization/save" method="post" enctype="multipart/form-data" id="form">
            @csrf
            
            <!--begin::Modal - Create Customer-->
            <div class="modal fade" id="kt_modal_organization" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-800px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Add Organization</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <i class="bi bi-x-lg"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-6 px-lg-6">
                            
                            <!--begin::Get Modal JS-->
                            <input type="hidden" class="modal-name" name="modal-name">
                            <!--end::Get Modal JS-->

                            <!--Begin::Row-->
                            <div class="row fv-row mb-7">
                                <!--Begin::Column Kanan + Kiri-->
                                <div class="col-6">
                                    <!--begin::Input group Country-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">Company</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="bank-name" name="bank-name" class="form-control form-control-solid" value="" placeholder="Input Company Name" disabled>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input name is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group Country-->
                                </div>
                                <div class="col-6">
                                    <!--begin::Input group Type-->

                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">Departement</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <!--Begin::Select-->
                                        <div id="departement">
                                            <select name="departement" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select Departement">
                                                <option value=""></option>
                                                <option value="Administration">Administration</option>
                                                <option value="Development">Development</option>
                                                <option value="Logistics">Logistics</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Oportunities">Oportunities</option>
                                                <option value="Production">Production</option>
                                            </select>
                                        </div>
                                        <!--End::Select-->
                                        <div class="invalid-feedback m-0" id="message1" style="visibility: hidden">
                                            Input departement is invalid
                                        </div>
                                        <!--end::Input-->

                                    <!--end::Input group Type-->
                                </div>
                                <!--End::Column Kanan + Kiri-->
                            </div>
                            <!--End::Row-->
                                                        
                            <!--Begin::Row-->
                            <div class="row fv-row mb-7">
                                <!--Begin::Column Kanan + Kiri-->
                                <div class="col-6">
                                    <!--begin::Input group Province-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="required">Division</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="division" name="division" class="form-control form-control-solid" value="" placeholder="Input Division">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input division is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group Province-->
                                </div>
                                <div class="col-6">
                                    <!--begin::Input group City-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="">Manager</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="manager" id="manager" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select Manager">
                                            <option value=""></option>
                                        </select>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input manager is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input group City-->
                                </div>
                                <!--End::Column Kanan + Kiri-->
                            </div>
                            <!--End::Row-->
                            
                            <!--begin::Input group Address-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Description</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="description" id="description" rows="4" class="form-control form-control-solid"></textarea>
                                <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                    Input description is invalid
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group Address-->

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-light btn-active-primary text-white btn-primary" id="proyek_new_save">Save</button>
                            </div>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create App-->
        </form>
        <!--end::Modal Organization and Structure-->

        <!--begin::Modal Edit Company-->
        <form action="/company/edit" method="post" enctype="multipart/form-data" id="form">
            @csrf
            
            <!--begin::Modal - Create Customer-->
            <div class="modal fade" id="kt_modal_edit_profile" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-600px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Edit Company</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <i class="bi bi-x-lg"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-6 px-lg-6">
                            
                            <!--begin::Get Modal JS-->
                            <input type="hidden" class="modal-name" name="modal-name">
                            <!--end::Get Modal JS-->

                            <!--begin::Input group Website-->
                            <div class="fv-row mb-7">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('/metronic8/demo1/assets/media/svg/avatars/blank.svg')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/150-26.jpg)"></div>
                                    <!--end::Preview existing avatar-->
        
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="bi bi-pencil-fill fs-7"></i>
        
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
        
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
        
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="required">Company Name</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="name-company" name="name-company" class="form-control form-control-solid" 
                                value="{{ old('name-company') }}" placeholder="Company Name" onfocusout="validation(this, message1)" />
                                <div class="invalid-feedback m-0" id="message1" style="visibility: hidden">
                                    Input name is invalid
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group Website-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Company Email</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="email" class="form-control form-control-solid" 
                                id="email" name="email" value="{{ old('email') }}" placeholder="Email Company" onfocusout="validation(this, message2)"/>
                                <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                    Input email is invalid
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group Website-->
                            <div class="fv-row mb-6">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Primary Phone</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" class="form-control form-control-solid" 
                                id="primary-number" name="phone-number" value="{{ old('phone-number') }}" placeholder="Primary Phone" onfocusout="validation(this, message3)"/>
                                <div class="invalid-feedback m-0" id="message3" style="visibility: hidden">
                                    Input primary-number is invalid
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group Website-->
                            <div class="fv-row mb-6">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                <span>Website</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" 
                                id="website" name="website" value="" placeholder="Website" onfocusout="validation(this, message4)"/>
                                <div class="invalid-feedback m-0" id="message4" style="visibility: hidden">
                                    Input website is invalid
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-light btn-active-primary text-white btn-primary" id="proyek_new_save">Save</button>
                            </div>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create App-->
        </form>
        <!--end::Modal Edit Company-->


    </div>
    <!--Begin::Content-->

</div>
<!--End :: Customer Menu-->



@endsection

@section('js-script')  
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://rawgit.com/highcharts/rounded-corners/master/rounded-corners.js"></script>

{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
<script>
    let chart = {{!! $chart !!}};
    Highcharts.setOptions({
        chart: {
            style: {
                fontFamily: 'Poppins'
            }
        },
        colors: chart,
        // colors: ["#017EB8", "#28B3AC", "#F7AD1A", "#9FE7F5", "#E86340", "#063F5C"],
        // colors: ["#239DB5", "#71B383", "#EE8E52", "#EBC44F", "#8D5690", "#E85170",  "#4282A6"],
        // colors: ["#009EF7", "#50CD89", "#F1416C", "#FFC700", "#7239EA", "#43CED7", "#FA8B28"],
    });
</script>

<script>
    $(document).ready(function () {
        $('table-address').DataTable({
            dom: 'lrt'
        });
    });
</script>

<!--Begin:: show / hide element-->
<script>
    function hideColumn(e, elt) {
        e.parentElement.parentElement.querySelector(elt).style.display = "none";
        e.parentElement.querySelector("#hide-button").style.display = "none";
        e.parentElement.querySelector("#show-button").style.display = "";
    }

    function showColumn(e, elt) {
        e.parentElement.parentElement.querySelector(elt).style.display = "";
        e.parentElement.querySelector("#hide-button").style.display = "";
        e.parentElement.querySelector("#show-button").style.display = "none";
    }
</script>
<!--End:: show / hide element-->

<script>
    const validation = (e, m) => {
        
        // if(e.getAttribute("type") == "email" && e.value.includes("@")){
        //     e.classList.remove("is-invalid");
        //     m.style.visibility = "hidden"
        // }else{
        //     e.classList.add("is-invalid");
        //     m.style.visibility = "visible"
        // }

        if (e.value.length > 0) {
            e.classList.remove("is-invalid");
            m.style.visibility = "hidden"
        }else{
            e.classList.add("is-invalid");
            m.style.visibility = "visible"
        }
        
    }
</script>
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
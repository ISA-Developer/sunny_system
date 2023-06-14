@extends('layouts.main')

@section('title', 'Contact Details')

@section('container')

@php
    $chart = Illuminate\Support\Facades\Cookie::get('chart');
    if ($chart == '') {
        $chart = ["#017EB8", "#28B3AC", "#F7AD1A", "#9FE7F5", "#E86340", "#063F5C"];
    } else {
        $chart = explode(',', preg_replace("/['|[|]| |]/", "",$chart));
    }
@endphp

<!--Begin :: Customer Menu-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack justify-content-beetwen">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <div class="d-flex flex-row justify-content-beetwen">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ $contact->nama_customer }}</h1>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            
            <div class="action">
                <button class="btn btn-success btn-sm me-2" form="form-1">Save</button>
                <a href="/contact" class="btn btn-sm btn-secondary">Cencel</a>
            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div class="row g-7">
                <!--Begin::Content Kanan-->
                <div class="col-lg-6 col-xl-3">
                    <div class="row">
                        <div id="content" class="mt-1 px-5">
                            <div class="card card-flush">
                                <div class="card-body pt-9 pb-4">
                                    <form action="/contact/detail/update" method="post" id="form-1" onsubmit="return validateInputs(this)">
                                        @csrf
                                        <input type="hidden" name="id-contact" value="{{ $contact->id_customer }}">
                                        <!--begin::Input group Name-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3 required">
                                                <span class="">Full Name</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="full-name" name="full-name"
                                                class="form-control rounded-0 border-bottom-dashed border-top-0 border-left-0 border-right-0 p-0 required" value="{{ $contact->nama_customer }}"
                                                placeholder="" />
                                            @error('name-customer')
                                                <h6 class="text-danger">{{ $message }}eror</h6>
                                            @enderror
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group Name-->
        
                                        <!--begin::Input group Email-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="">Email</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control rounded-0 border-bottom-dashed border-top-0 border-left-0 border-right-0 p-0" id="email" name="email"
                                                value="{{ $contact->email }}" placeholder="" />
                                            @error('email')
                                                <h6 class="text-danger">{{ $message }}eror</h6>
                                            @enderror
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
        
                                        <!--begin::Input group Phone-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3 ">
                                                <span class="">Mobile Phone</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control rounded-0 border-bottom-dashed border-top-0 border-left-0 border-right-0 p-0" id="mobile-phone"
                                                name="mobile-phone" value="{{ $contact->phone_number }}" placeholder="" />
                                            @error('phone-number')
                                                <h6 class="text-danger">{{ $message }}eror</h6>
                                            @enderror
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div id="content" class="mt-1 px-5">
                            <div class="card card-flush">
                                <div class="card-body pt-9 pb-7">
                                    <h5>Company</h5>
                                    <a href="/company#modal" class="">
                                        <p class="fs-6 fw-bold form-label mt-5 p-0 mb-0 btn btn-secondary p-2"> New Company </p>
                                    </a>
                                    <br>
                                    <div id="select-account" style="display:none">
                                        <label class="fs-6 fw-bold form-label mt-2">Search</label>
                                        <div id="search">
                                            <select name="account-id" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Search Account">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::Content Kanan-->

                <!--Begin::Content Kiri-->
                <div class="col-xl-9">
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card-->
                        <div class="card-body pt-5">
                             <!--begin:::Tabs-->
                             <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                                <!--begin:::Tab Overview-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_contact_overview"
                                        style="font-size:12px;">OVERVIEW</a>
                                </li>
                                <!--end:::Tab Overview-->

                                <!--begin:::Tab item Informasi Perusahaan-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_contact_information" style="font-size:12px;">CONTACT
                                        INFORMATION</a>
                                </li>
                                <!--end:::Tab item Informasi Perusahaan-->


                                {{-- <!--begin:::Tab item History-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_flight"
                                        style="font-size:12px;">FLIGHT INFO</a>
                                </li>
                                <!--end:::Tab item History--> --}}

                                <!--begin:::Tab item History-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_contact_history"
                                        style="font-size:12px;">HISTORY</a>
                                </li>
                                <!--end:::Tab item History-->

                            </ul>
                            <!--end:::Tabs-->
                            
                            <!--Begin::Tab Panel-->
                            <div class="tab-content">
                                <!--Begin::Tab Overview-->
                                <div class="tab-pane fade" id="kt_contact_overview" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="container">
                                        <div class="row fv-row">
                                            <!--begin::All-About-Flight-->
                                            <div id="collaps-1" class="mb-7 mt-5">
                                                <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Overview
                                                    <i onclick="hideColumn(this, '#Flight')" id="hide-button" class="bi bi-arrows-collapse"></i>
                                                    <i onclick="showColumn(this, '#Flight')" id="show-button" class="bi bi-arrows-expand" style="display: none"></i>
                                                </h2>
        
                                                <div id="Flight" class="m-2 my-6" style="display:">
                                                    <!--begin::Card Status-->
                                                    <div class="row mx-3">
                                                        <!--begin::Card column-->
                                                        <div class="col-4">
                                                            <!--begin::Card body-->
                                                            <div class="card-body p-0">
                                                                <!--begin::Card widget 20-->
                                                                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10 d-flex flex-column align-items-center" style="background-color: {{ $chart[0] }} ;background-image:url('/assets/media/patterns/vector-1.png');background-repeat: no-repeat;background-size: auto;">
                                                                    <!--begin::Header-->
                                                                    <div class="card-header pt-5">
                                                                        <!--begin::Title-->
                                                                        <div class="card-title d-flex align-items-center m-0">
                                                                            <!--begin::Amount-->
                                                                            <span class="fs-3 fw-bold text-white">Tier Miles</span>
                                                                            <!--end::Amount-->
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Header-->
                                                                    <!--begin::Card body-->
                                                                    <div class="card-body d-flex align-items-end pt-0">
                                                                        <!--begin::Progress-->
                                                                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                                            <h3 class="text-white opacity-75 fs-2hx">0.00</h3>
                                                                        </div>
                                                                        <!--end::Progress-->
                                                                    </div>
                                                                    <!--end::Card body-->
                                                                </div>
                                                                <!--end::Card widget 20-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end-begin::Card column-->
                                                        
                                                        <!--begin::Card column-->
                                                        <div class="col-4">
                                                            <!--begin::Card body-->
                                                            <div class="card-body p-0">
                                                                <!--begin::Card widget 20-->
                                                                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10 d-flex flex-column align-items-center" style="background-color: {{ $chart[1] }};background-image:url('/assets/media/patterns/vector-1.png');background-repeat: no-repeat;background-size: auto;">
                                                                    <!--begin::Header-->
                                                                    <div class="card-header pt-5">
                                                                        <!--begin::Title-->
                                                                        <div class="card-title d-flex align-items-center m-0">
                                                                            <!--begin::Amount-->
                                                                            <span class="fs-3 fw-bold text-white">Award Point</span>
                                                                            <!--end::Amount-->
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Header-->
                                                                    <!--begin::Card body-->
                                                                    <div class="card-body d-flex align-items-end pt-0">
                                                                        <!--begin::Progress-->
                                                                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                                            <h3 class="text-white opacity-75 fs-2hx">0.00</h3>
                                                                        </div>
                                                                        <!--end::Progress-->
                                                                    </div>
                                                                    <!--end::Card body-->
                                                                </div>
                                                                <!--end::Card widget 20-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end-begin::Card column-->
    
                                                        <!--begin::Card column-->
                                                        <div class="col-4">
                                                            <!--begin::Card body-->
                                                            <div class="card-body p-0">
                                                                <!--begin::Card widget 20-->
                                                                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10 d-flex flex-column align-items-center" style="background-color: {{ $chart[2] }};background-image:url('/assets/media/patterns/vector-1.png');background-repeat: no-repeat;background-size: auto;">
                                                                    <!--begin::Header-->
                                                                    <div class="card-header pt-5">
                                                                        <!--begin::Title-->
                                                                        <div class="card-title d-flex align-items-center text-center m-0">
                                                                            <!--begin::Amount-->
                                                                            <span class="fs-3 fw-bold text-white">Amount Spend for Ticket</span>
                                                                            <!--end::Amount-->
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Header-->
                                                                    <!--begin::Card body-->
                                                                    <div class="card-body d-flex align-items-end pt-0">
                                                                        <!--begin::Progress-->
                                                                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                                            <h3 class="text-white opacity-75 fs-2hx">Rp.0.00</h3>
                                                                        </div>
                                                                        <!--end::Progress-->
                                                                    </div>
                                                                    <!--end::Card body-->
                                                                </div>
                                                                <!--end::Card widget 20-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end-begin::Card column-->
                                                    </div>
                                                    <!--end::Card Status-->
                                                    <!--begin::Line Chart-->
                                                    <div class="row mx-3">
                                                        <!--begin::Card column-->
                                                        <div class="col-12">
                                                            <!--begin::Card body-->
                                                            <div class="card-body pt-0">
                                                                <!--begin::LINE CHART-->
                                                                <figure class="highcharts-figure">
                                                                    <div class="chart-outer" id="table-line">
                                                                        <div id="chart-line" style="overflow: unset;" class="m-0"></div>
                                                                        <!-- data table is inserted here -->
                                                                    </div>
                                                                </figure>
                                                                <!--end::LINE CHART-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end::Card column-->
                                                    </div>
                                                    <!--end::Line Chart-->
                                                </div>
                                            </div>
                                            <br>
                                            <!--End::All-About-Flight-->
                                        </div>
                                    </div>
                                </div>
                                <!--End::Tab Overview-->

                                <!--Begin::Tab Contact Information-->
                                <div class="tab-pane fade show active" id="kt_contact_information" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
                                        <div class="row fv-row">
                                            <div class="container">
                                                <!--Begin::Row-->
                                                <div class="row fv-row mb-7">
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">Title</label>
                                                        <div id="title">
                                                            <select name="title" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Title">
                                                                <option value=""></option>
                                                                    <option value="#N/A">#N/A</option>
                                                                    <option value="Bapak">Bapak</option>
                                                                    <option value="Ibu">Ibu</option>
                                                                    <option value="Miss.">Mrs.</option>
                                                                    <option value="Mr.">Mr.</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">Full Name</label>
                                                        <input type="text" class="form-control form-control-solid" value="{{ $contact->full_name }}" placeholder="" id="full-name" name="full-name" disabled>
                                                    </div>
                                                </div>
                                                <!--End::Row-->
                                                <!--Begin::Row-->
                                                <div class="row fv-row mb-7">
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">First Name</label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="" id="first-name" name="first-name">
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">Last Name</label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="" id="last-name" name="last-name">
                                                    </div>
                                                </div>
                                                <!--End::Row-->
                                                <!--Begin::Row-->
                                                <div class="row fv-row mb-7">
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">Date of Birth</label>
                                                        <input type="date" class="form-control form-control-solid" placeholder="" id="birthday" name="birthday" onfocusout="getAge(this)">
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">Age</label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="" id="age" name="age-contact">
                                                    </div>
                                                </div>
                                                <!--End::Row-->
                                                <!--Begin::Row-->
                                                <div class="row fv-row mb-7">
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">Email</label>
                                                        <input type="email" class="form-control form-control-solid"  placeholder="" id="email" name="email" disabled>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">Type</label>
                                                        <div id="type">
                                                            <select name="type" id="type-contact" class="form-select form-select-solid" data-control="select2" data-hide-search="true" onchange="selectAccount(this.value)" data-placeholder="Select Type">
                                                                <option value=""></option>
                                                                <option value="Customer">Customer</option>
                                                                <option value="Employee">Employee</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End::Row-->
                                                <!--Begin::Row-->
                                                <div class="row fv-row mb-7">
                                                    <div class="col-6">
                                                        <label class="fs-6 fw-bold form-label mt-3">Mobile Phone</label>
                                                        <input type="number" class="form-control form-control-solid" value="{{ $contact->phone_number }}" placeholder="" id="mobile-phone" name="mobile-phone" disabled>
                                                    </div>
                                                </div>
                                                <!--End::Row-->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End::Tab Contact Information-->

                                {{-- <!--Begin::Tab Flight Information-->
                                <div class="tab-pane fade" id="kt_user_view_flight" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
                                    <div class="row fv-row">
                                        <div class="container">

                                            <!--Begin::Flight With Equal Email-->
                                            <div class="row mt-3">
                                                <div id="collaps-1" class="mb-7 mt-5">
                                                    <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Flight With Equal Email
                                                        <a href="#" Id="Plus" style="display:" class="Plus10" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_flight_email"><i class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                        <i onclick="hideColumn(this, '#FlightEmail')" id="hide-button" class="bi bi-arrows-collapse"></i>
                                                        <i onclick="showColumn(this, '#FlightEmail')" id="show-button" class="bi bi-arrows-expand" style="display: none"></i>
                                                    </h2>
            
                                                    <div id="FlightEmail" class="m-2 my-6" style="display:">
                                                        <table class="table align-middle table-row-dashed fs-6 gy-2" id="table">
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-auto text-align-center">No</th>
                                                                    <th class="min-w-50">Contact Name</th>
                                                                    <th class="min-w-auto">Voucher</th>
                                                                    <th class="min-w-auto">Created on</th>
                                                                    <th class="min-w-auto">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Alexander Pierto</td>
                                                                    <td>Flight Voucher Free</td>
                                                                    <td>{{date('d F Y')}}</td>
                                                                    <td><small class="badge badge-light-success">Active</small></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Flight With Equal Email-->

                                            <!--Begin::Voucher Detail-->
                                            <div class="row mt-3">
                                                <div id="collaps-1" class="mb-7 mt-5">
                                                    <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Voucher Detail
                                                        <a href="#" Id="Plus" style="display:" class="Plus10" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_voucher"><i class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                        <i onclick="hideColumn(this, '#VoucherDetail')" id="hide-button" class="bi bi-arrows-collapse"></i>
                                                        <i onclick="showColumn(this, '#VoucherDetail')" id="show-button" class="bi bi-arrows-expand" style="display: none"></i>
                                                    </h2>
            
                                                    <div id="VoucherDetail" class="m-2 my-6" style="display:">
                                                        <table class="table align-middle table-row-dashed fs-6 gy-2" id="table">
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-auto text-align-center">No</th>
                                                                    <th class="min-w-50">Contact Name</th>
                                                                    <th class="min-w-auto">Voucher</th>
                                                                    <th class="min-w-auto">Created on</th>
                                                                    <th class="min-w-auto">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Alexander Pierto</td>
                                                                    <td>Flight Voucher Free</td>
                                                                    <td>{{date('d F Y')}}</td>
                                                                    <td><small class="badge badge-light-success">Active</small></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Voucher Detail-->
                                        </div>
                                    </div>
                                </div>
                                <!--End::Tab Flight Information--> --}}

                                <!--Begin::Tab Flight Information-->
                                <div class="tab-pane fade" id="kt_contact_history" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
                                    <div class="row fv-row">
                                        <div class="container">

                                            <!--Begin::Cases-->
                                            <div class="row mt-7">
                                                <div id="collaps-1" class="mt-5">
                                                    <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Cases
                                                        <a href="/cases#modal" Id="Plus" style="display:" class="Plus10" type="button"><i class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                        <i onclick="hideColumn(this, '#Cases')" id="hide-button" class="bi bi-arrows-collapse"></i>
                                                        <i onclick="showColumn(this, '#Cases')" id="show-button" class="bi bi-arrows-expand" style="display: none"></i>
                                                    </h2>
            
                                                    <div id="Cases" class="m-2 my-6" style="display:">
                                                        <table class="table align-middle table-row-dashed fs-6" id="table-cases">
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-50">Number</th>
                                                                    <th class="min-w-auto">Subject</th>
                                                                    <th class="min-w-auto">Registration Date</th>
                                                                    <th class="min-w-auto">Status</th>
                                                                    <th class="min-w-auto">Closed on</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- <tr>
                                                                    <td>
                                                                        <a href="/">RSV4814112</a>
                                                                    </td>
                                                                    <td>Mohon Untuk Mengirimkan E-Ticket</td>
                                                                    <td>{{date('d F Y')}}</td>
                                                                    <td><small class="badge badge-light-success">Resolved</small></td>
                                                                    <td>{{date('d F Y')}}</td>
                                                                </tr> --}}
                                                                {{-- @dd($contact->cases_management) --}}
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Cases-->

                                            <!--Begin::Leads-->
                                            <div class="row mt-7">
                                                <div id="collaps-1" class="mt-5">
                                                    <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Leads
                                                        <a href="#" Id="Plus" style="display:" class="Plus10" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_leads"><i class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                        <i onclick="hideColumn(this, '#Leads')" id="hide-button" class="bi bi-arrows-collapse"></i>
                                                        <i onclick="showColumn(this, '#Leads')" id="show-button" class="bi bi-arrows-expand" style="display: none"></i>
                                                    </h2>
            
                                                    <div id="Leads" class="m-2 my-6" style="display:">
                                                        <table class="table align-middle table-row-dashed fs-6" id="table-leads">
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-50">Lead</th>
                                                                    <th class="min-w-auto">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Leads-->

                                            <!--Begin::Opportunity-->
                                            <div class="row mt-7">
                                                <div id="collaps-1" class="mt-5">
                                                    <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Opportunity
                                                        <a href="#" Id="Plus" style="display:" class="Plus10" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_opportunity"><i class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                        <i onclick="hideColumn(this, '#Opportunity')" id="hide-button" class="bi bi-arrows-collapse"></i>
                                                        <i onclick="showColumn(this, '#Opportunity')" id="show-button" class="bi bi-arrows-expand" style="display: none"></i>
                                                    </h2>
            
                                                    <div id="Opportunity" class="m-2 my-6" style="display:">
                                                        <table class="table align-middle table-row-dashed fs-6" id="table-opportunity">
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-50">Name</th>
                                                                    <th class="min-w-auto">Stage</th>
                                                                    <th class="min-w-auto">Customer Need</th>
                                                                    <th class="min-w-auto">Budget</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Opportunity-->

                                        </div>
                                    </div>
                                </div>
                                <!--End::Tab Flight Information-->


                            </div>
                            <!--End::Tab Panel-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <!--End::Content Kiri-->
            </div>


            <!--begin::Modal Leads-->
            <form action="/contact/leads/create" method="post" enctype="multipart/form-data" id="form" onsubmit="return validateInputs(this)">
                @csrf
                
                <!--begin::Modal - Create Customer-->
                <div class="modal fade" id="kt_modal_leads" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-500px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Add Leads</h2>
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
                            <div class="modal-body py-lg-6 px-lg-6 mx-5">

                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Customer Need</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select id="customer-need" name="customer-need" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_leads" data-placeholder="Select Customer Need">
                                            <option value=""></option>
                                        </select>
                                        <!--end::Input-->
                                    <!--end::Input Contact Name-->
                                </div>
                                <!--End::Row-->
                                
                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Voucher-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Contact</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="contact" name="contact-name" class="form-control form-control-solid" placeholder="Input Contact" disabled>
                                        <input type="hidden" id="contact-id" name="contact-id" class="form-control form-control-solid" placeholder="Input Contact">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input Voucher is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input Voucher-->
                                </div>
                                <!--End::Row-->

                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Account</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div id="account-id">
                                            <select name="account-id" id="account-id" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_leads" data-placeholder="Select Account">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input created on is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input Contact Name-->
                                </div>
                                <!--End::Row-->

                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Email</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <input type="email" id="email" name="email" class="form-control form-control-solid" placeholder="Input Email">
                                        <!--end::Options-->
                                    <!--end::Input Contact Name-->
                                </div>
                                <!--End::Row-->

                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Mobile Phone</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <input type="number" id="mobile-phone" name="mobile-phone" value="" class="form-control form-control-solid" placeholder="Input Mobile Phone">
                                        <!--end::Options-->
                                    <!--end::Input Contact Name-->
                                </div>
                                <!--End::Row-->

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-sm btn-light btn-active-primary text-white btn-success" id="proyek_new_save">Save</button>
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
            <!--end::Modal Leads-->

            <!--begin::Modal Leads-->
            <form action="/contact/opportunity/create" method="post" enctype="multipart/form-data" id="form" onsubmit="return validateInputs(this)">
                @csrf
                
                <!--begin::Modal - Create Customer-->
                <div class="modal fade" id="kt_modal_opportunity" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-500px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Add Opportunity</h2>
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
                            <div class="modal-body py-lg-6 px-lg-6 mx-5">

                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Customer</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="contact" name="contact-id" class="form-control form-control-solid" placeholder="Input Name" disabled>
                                        <input type="hidden" id="contact-id" name="contact-id" class="form-control form-control-solid" placeholder="Input Name">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input contact name is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input Contact Name-->
                                </div>
                                <!--End::Row-->
                                
                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Voucher-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Name</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="contact-name" name="contact-name" value="" class="form-control form-control-solid" placeholder="Input Name">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input Voucher is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input Voucher-->
                                </div>
                                <!--End::Row-->

                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Customer Need</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="customer-need" id="customer-needs" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_opportunity" data-placeholder="Select Customer Need">
                                            <option value=""></option>
                                        </select>
                                        <!--end::Input-->
                                    <!--end::Input Contact Name-->
                                </div>
                                <!--End::Row-->

                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Stage</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="stage" id="stage" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_opportunity" data-placeholder="Select Stage">
                                            <option value=""></option>
                                        </select>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input created on is invalid
                                        </div>
                                        <!--end::Input-->
                                    <!--end::Input Contact Name-->
                                </div>
                                <!--End::Row-->

                                <!--Begin::Row-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Budget</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <input type="text" id="budget" name="budget" value="" class="form-control form-control-solid reformat" placeholder="Input Budget">
                                        <!--end::Options-->
                                    <!--end::Input Contact Name-->
                                </div>
                                <!--End::Row-->

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-sm btn-light btn-active-primary text-white btn-success" id="proyek_new_save">Save</button>
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
            <!--end::Modal Leads-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->

</div>
 <!--end::Customer Menu-->
@endsection

@section('js-script')

<!--Begin::DataTable-->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        const getValue = document.getElementById('type-contact').value;
        selectAccount(getValue);
        $('#table-cases, #table-voucher, #table-opportunity, #table-chat, #table-leads').DataTable({
            dom: 'rtip',
            "pagingType": "simple"
            // "searching": true
        });
    });
</script>
<!--End::DataTable-->

<!--Begin:: Get Age-->
<script>
    function getAge(e) {
        let age = new Date(e.value);
        let monthDiff = Date.now() - age.getTime();
        let age_dt = new Date(monthDiff);
        let year = age_dt.getUTCFullYear(); 
        let ageNow = Math.abs(year - 1970); 
        document.getElementById("age").setAttribute("value", ageNow);
    }
</script>
<!--End:: Get Age-->

<!--Begin:: Get Budget-->
<script>
    function selectAccount(val) {
        if(val == "Employee"){
            document.getElementById("select-account").style.display = ""
        }else{
            document.getElementById("select-account").style.display = "none";
        }
    }
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://rawgit.com/highcharts/rounded-corners/master/rounded-corners.js"></script>
{{-- let chart = {!! $chart !!}; --}}

<script>
    $("#customer-needs").select2({ dropdownParent: "#modal-container" });
</script>

<script>
    Highcharts.setOptions({
        chart: {
            style: {
                fontFamily: 'Poppins'
            }
        },
        // colors: chart,
        colors: ["#017EB8", "#28B3AC", "#F7AD1A", "#9FE7F5", "#E86340", "#063F5C"],
        // colors: ["#239DB5", "#71B383", "#EE8E52", "#EBC44F", "#8D5690", "#E85170",  "#4282A6"],
        // colors: ["#009EF7", "#50CD89", "#F1416C", "#FFC700", "#7239EA", "#43CED7", "#FA8B28"],
    });
</script>

<!--begin::Highchart Line-->
<script>
    Highcharts.chart('chart-line', {
        title: {
            text: 'Dashboard',
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
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember",
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
            name: '2020',
            data: [11908, 5548, 8105, 11248, 8989, 11816, 28274,
                27300, 39053, 42906, 65073, 60940]
        }, {
            name: '2021',
            data: [13934, 22234, 24657, 31827, 42143, 60087,
                64878, 65174, 68646, 79546, 88546, 90000]
        }, {
            name: '2022',
            data: [23934, 28656, 35165, 41827, 52143, 62383,
                71533, 75174, 95157, 91454, 94610, 100000]
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

        },);
</script>
<!--end::Highchart Line-->
    
@endsection
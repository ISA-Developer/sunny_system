@extends('layouts.main')

@section('title', 'Oportunity')

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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Oportunity
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
            <div class="d-flex align-items-center py-1">
                <!--begin::Button-->
                @if (auth()->user()->Role->is_supervisor || auth()->user()->Role->is_admin || str_contains(auth()->user()->email, 'rokum@kppu'))
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#add-peraturan" id="kt_toolbar_primary_button">Add</a>
                @endif
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::2 Column-->
    <div class="row mx-0 p-0">
        <!--begin::Card column-->
        <div class="col-10">
            <!--begin::Post-->
            <div class="card ms-3 me-3" Id="List-vv" style="position: relative; overflow: hidden;">
                <div class="row mb-6">
                    <!--begin::Card column-->
                    <div class="col-12">
                        <!--begin::Card body-->
                        <div class="card pt-0">
                            <!--begin:::Tabs Navigasi-->
                            {{-- <div class="card-header pt-6 pb-0 mb-0">
                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold">
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                            href="#kt_user_view_1"
                                            style="font-size:14px;">List Table SOP</a>
                                    </li>
        
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4"
                                            data-kt-countup-tabs="true" data-bs-toggle="tab"
                                            href="#kt_user_view_2"
                                            style="font-size:14px;">List Unit SOP</a>
                                    </li>
                                </ul>
                            </div> --}}
                            <!--end:::Tabs Navigasi-->
                            <!--begin:::Tab Content-->
                            <div class="tab-content">
                                <!--begin:::Panel 1-->
                                <div class="tab-pane fade show active" id="kt_user_view_1" role="tabpanel">
                                    <div class="card-body pt-0 my-6">
        
                                        <!--Begin :: Filter-->
                                        <form action="/peraturan-index" method="get">
                                            <div class="row">
                                                <div class="col-1">
                                                <p class="mt-3 text-center">Filter : </p>
                                                </div>
                                                <!--begin::Select Options-->
                                                <div class="col-2">
                                                    <select onchange="this.form.submit()" id="tahun-peraturan" name="tahun-peraturan"
                                                        class="form-select w-100 ms-2 "
                                                        style="margin-right: 2rem;" data-control="select2" data-hide-search="true"
                                                        data-placeholder="Pilih Tahun" data-select2-id="select2-data-unit" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value={{ (int) date("Y")-2 }}>{{ (int) date("Y")-2 }}</option>
                                                        <option value={{ (int) date("Y")-1 }}>{{ (int) date("Y")-1 }}</option>
                                                        <option value={{ (int) date("Y") }} selected>{{ (int) date("Y") }}</option>
                                                    </select>
                                                </div>
                                                <!--end::Select Options-->
                                                <!--begin::Select Options-->
                                                <div class="col-2">
                                                    <select onchange="this.form.submit()" id="unit-peraturan" name="unit-peraturan"
                                                        class="form-select w-100 ms-2 "
                                                        style="margin-right: 2rem;" data-control="select2" data-hide-search="true"
                                                        data-placeholder="Pilih Unit Peraturan" data-select2-id="select2-data-unit" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="" aria-readonly="true"></option>
                                                        
                                                        <option value=""></option>
                                                        
                                                    </select>
                                                </div>
                                                <!--end::Select Options-->
                                                <!--begin::Select Options-->
                                                <div class="col-2">
                                                    <select onchange="this.form.submit()" id="tahapan-peraturan" name="tahapan-peraturan"
                                                        class="form-select w-100 ms-2 "
                                                        style="margin-right: 2rem;" data-control="select2" data-hide-search="true"
                                                        data-placeholder="Pilih Tahapan" data-select2-id="select2-data-unit" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="" aria-readonly="true">Tahapan</option>
                                                        <option value="">Terdaftar</option>
                                                        <option value="">Penyusunan</option>
                                                        <option value="">Harmonisasi</option>
                                                        <option value="">Penetapan usul</option>
                                                        <option value="">Pembahsan</option>
                                                        <option value="">Keputusan</option>
                                                        <option value="">Selesai</option>
                                                    </select>
                                                </div>
                                                <!--end::Select Options-->
                                                <!--begin::Select Options-->
                                                <div class="col-2">
                                                    <select onchange="this.form.submit()" id="kategori-filter" name="kategori-filter"
                                                        class="form-select w-100 ms-2 "
                                                        style="margin-right: 2rem;" data-control="select2" data-hide-search="true"
                                                        data-placeholder="Pilih kategori" data-select2-id="select2-data-unit" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="" aria-readonly="true"></option>
                                                        <option value="Peraturan KPPU">Peraturan KPPU</option>
                                                        <option value="Peraturan Ketua KPPU">Peraturan Ketua KPPU</option>
                                                    </select>
                                                </div>
                                                <!--end::Select Options-->
                                                <div class="col-1">
                                                    <form action="" method="GET">
                                                        <button type="submit" class="btn btn-light btn-active-danger">Reset</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </form>
                                        <!--End :: Filter-->
        
                                        <br>
        
                                        <!--begin::Tabel 1-->
                                        <table id="table_1" class="table table-striped align-middle" style="width:100%">
                                            <thead >
                                                <tr>
                                                    <th style="text-align: center">No</th>
                                                    <th>Tahapan</th>
                                                    <th>Judul Peraturan</th>
                                                    <th>Pengusul</th>
                                                    <th>Penugasan</th>
                                                    <th>Kategori</th>
                                                    <th>Persentase</th>
                                                    <th>Created On</th>
                                                    @if (auth()->user()->Role->is_supervisor || auth()->user()->Role->is_admin || auth()->user()->Unit->check_hukum)
                                                    <th style="text-align: center">Action</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                <tr>
                                                    <td style="text-align:center">   </td>
                                                    <td>                             </td>
                                                    <td>                             </td>
                                                    <td>                             </td>
                                                    <td>                             </td>
                                                    <td>                             </td>
                                                    <td>                             </td>
                                                    <td>                             </td>
                                                    <td>                             </td>
                                                    <td>
                                                        <a href="#" class="text-hover-primary" data-bs-toggle="modal" data-bs-target="#modal-edit">&nbsp;<i class="bi bi-pencil-square"></i></a>
                                                        <a href="#" class="text-hover-danger" data-bs-toggle="modal" data-bs-target="#modaldelete">&nbsp;<i class="bi bi-trash"></i></a>
                                                    </td>  
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                        <!--end::Tabel 1-->
        
                                    </div>
                                </div>
                                <!--end:::Panel 1-->
                            </div>
                            <!--begin:::Tab Content-->  
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card column-->
                </div>
            </div>
            <!--end::Post-->
        </div>
        <!--end-begin::Card column-->
        <div class="col-2 p-0">
            
           
            </div>
            <!--end::Post-->
        </div>
        <!--end::Card column-->
    </div>
    <!--end::2 Column-->
    


@endsection
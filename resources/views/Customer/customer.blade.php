@extends('layouts.main')

@section('title', 'Account')

@section('container')

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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Customer
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
                                    <select class="form-select form-select-solid" id="status" name="status"
                                        data-kt-select2="true" data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_6155ac804a1c2"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="3">In Process</option>
                                        <option value="4">Rejected</option>
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
                @if (auth()->user()->Role->is_supervisor)
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_create_customer" id="kt_toolbar_primary_button">Create</a>
                @endif
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="content" class="mt-1 px-5">
        <div class="card">
            <div class="card-body">
                <table class="table align-middle table-row-dashed fs-6 gy-2">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-auto text-align-center">No</th>
                            <th class="min-w-50">Customer</th>
                            <th class="min-w-auto">Email</th>
                            <th class="min-w-auto">Customer</th>
                            <th class="min-w-auto">Partner</th>
                            <th class="min-w-auto">Competitor</th>
                            <th class="min-w-auto">Payment Methode</th>
                            <th class="min-w-auto text-align-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="d-flex flex-row align-items-center gap-5">
                                <div class="photo">
                                    <img src="/assets/media/avatars/150-26.jpg" width="50px" alt="" class="rounded-circle">
                                </div>
                                <div class="name">
                                    <h5 class="m-0">Max Smith</h5>
                                    <small>Software Engineer</small>
                                </div>
                            </td>
                            <td>smith.max@google.com</td>
                            <td><small class="badge badge-light-success">Yes</small></td>
                            <td><small class="badge badge-light-danger">No</small></td>
                            <td><small class="badge badge-light-danger">No</small></td>
                            <td><small class="badge badge-light-danger">Not Define</small></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Action
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><button class="dropdown-item" type="button">View</button></li>
                                      <li><button class="dropdown-item" type="button">Delete</button></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end::Content-->

</div>
<!--End :: Customer Menu-->

<!--begin::Modal New Customer-->
<form action="/customer/create" method="post" enctype="multipart/form-data">
    @csrf
    
    <!--begin::Modal - Create Customer-->
    <div class="modal fade" id="kt_modal_create_customer" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>New Customer</h2>
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

                    <!--begin::Row Kanan+Kiri-->
                    <div class="row fv-row">
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="required">Name</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="name-customer" name="nama-customer" class="form-control form-control-solid" 
                                value="{{ old('nama-customer') }}" placeholder="Name" />
                                @error('name-customer')
                                <h6 class="text-danger fw-normal">{{ $message }}</h6>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--End begin::Col-->
                        <div class="col-6">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Email</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="email" class="form-control form-control-solid" 
                                id="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                                @error('email')
                                <h6 class="text-danger fw-normal">{{ $message }}</h6>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--End::Col-->
                    </div>
                    <!--End::Row Kanan+Kiri-->

                    <!--begin::Row Kanan+Kiri-->
                    <div class="row fv-row">
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-6">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span class="">Phone Number</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" class="form-control form-control-solid" 
                                id="phone-number" name="phone-number" value="{{ old('phone-number') }}" placeholder="Phone Number" />
                                @error('phone-number')
                                <h6 class="text-danger fw-normal">{{ $message }}</h6>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--End begin::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-6">
                                 <!--begin::Label-->
                                 <label class="fs-6 fw-bold form-label mt-3">
                                    <span>Website</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" 
                                id="website" name="website" value="" placeholder="Website" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--End begin::Col-->
                    </div>
                    <!--End::Row Kanan+Kiri-->

                    <!--begin::Options-->
                    <br>
                    <label class="fs-6 fw-bold form-label">
                        <span>Roles</span>
                    </label>
                    <div class="d-flex" style="flex-direction: row">
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-6 ms-0 align-middle">
                            <input class="form-check-input" type="checkbox" value="" id="check-customer" name="check-customer" />
                            <span class="form-check-label me-8"><b>Customer</b></span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-6">
                            <input class="form-check-input" type="checkbox" value="" id="check-partner" name="check-partner" />
                            <span class="form-check-label me-8"><b>Partner</b></span>
                        </label>
                        <!--end::Options-->
                        <!--begin::Options-->
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-6">
                            <input class="form-check-input" type="checkbox" value="" id="check-competitor" name="check-competitor" />
                            <span class="form-check-label me-8"><b>Competitor</b></span>
                        </label>
                        <!--end::Options-->
                    </div>
                    <br>
                    <!--end::Options-->


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
<!--end::Modal New Customer-->


@endsection

@section('js-script')  
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('table').DataTable({
        });
    });
</script>
@endsection
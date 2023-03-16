@extends('layouts.main')

@section('title', 'Account')

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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Account
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
                @if (auth()->user()->role->is_supervisor)
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal" id="kt_toolbar_primary_button">Create</a>
                @endif
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="card mx-6" Id="List-vv" style="position: relative; overflow: hidden;">
        <!--begin::Card header-->
        {{-- <div class="card-header py-5">
            <h1>Account</h1>
        </div> --}}
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-6">
            <table id="example" class="table table-striped" style="width:100%">
                <thead >
                    <tr>
                        <th style="text-align: center">No</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Alamat</th>
                        <th>No. Hp</th> --}}
                        <th>Created On</th>
                        <th>Modified On</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($user as $item)
                        <tr>
                            <td style="text-align:center">{{ $no++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            {{-- <td>Jl. ABC, Jakarta Selatan</td>
                            <td>0812345678901</td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="/account/view/{{ $item->uuid }}" type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                @if (!$item->role->is_supervisor)
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modaldelete{{ $item->id }}"><i class="bi bi-trash"></i></button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                   

        
                </tbody>
                
            </table>
        </div>
       
        <!--end::Card body-->
    </div>
    <!--end::Post-->
</div>

 <!-- begin::modal add user-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Account</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/account/new" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="required form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="name" aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="email" class="required form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="password" class="required form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="password" aria-label="default input example">
            </div>
            <p class="text-danger" id="req-field" style="display: none">Mandatori Field Harus Diisi !</p>
          
        </div>
        <!--begin::Options-->
        {{-- <div class="ps-8 pb-8" style="display: grid; grid-template-rows: repeat(1, 1fr); grid-template-columns: repeat(3, 1fr); row-gap: 10px;">
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid me-5">
                <input class="form-check-input" name="check-humas" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">Humas</span>
            </label>
            <!--end::Option-->
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid">
                <input class="form-check-input" name="check-renkeu" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">Renkeu</span>
            </label>
            <!--end::Option-->
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid">
                <input class="form-check-input" name="check-spi" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">SPI</span>
            </label>
            <!--end::Option-->
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid">
                <input class="form-check-input" name="check-umum" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">Bag Umum</span>
            </label>
            <!--end::Option-->
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid">
                <input class="form-check-input" name="check-hukum" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">Biro Hukum</span>
            </label>
            <!--end::Option-->
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid">
                <input class="form-check-input" name="check-investigasi" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">Investigasi</span>
            </label>
            <!--end::Option-->
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid">
                <input class="form-check-input" name="check-kepaniteraan" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">Kepaniteraan</span>
            </label>
            <!--end::Option-->
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid">
                <input class="form-check-input" name="check-sdm" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">SDM</span>
            </label>
            <!--end::Option-->
            <!--begin::Option-->
            <label class="form-check form-check-inline form-check-solid">
                <input class="form-check-input" name="check-tu" type="checkbox" />
                <span class="fw-bold ps-2 fs-6">Tata Usaha</span>
            </label>
            <!--end::Option-->
        </div> --}}
        <!--end::Options-->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
            <p onclick="saveButton(this)" id="save-1" class="btn btn-warning btn-sm">Proccess Create</p>
            <div id="save-2" style="display: none"  class="px-4">
                <span class="spinner-border text-secondary" role="status"></span>
            </div>
            <button id="save-3" style="display: none" class="btn btn-primary btn-sm">Save</button>
        </div>

        <script>
            function saveButton(e) {
                let name = document.getElementById("name").value;
                let email = document.getElementById("email").value;
                let password = document.getElementById("password").value;
                
                if (!name) {
                    document.getElementById("req-field").style.display = "";   
                } else if (!email) {
                    document.getElementById("req-field").style.display = "";   
                } else if (!password) {
                    document.getElementById("req-field").style.display = "";   
                } else {
                    document.getElementById("req-field").style.display = "none";
                    document.getElementById("save-1").style.display = "none";
                    document.getElementById("save-2").style.display = "";
                    setTimeout( function() {
                        document.getElementById("save-2").style.display = "none";
                        document.getElementById("save-3").style.display = "";
                    }, 500);
                }
            }

        </script>
    
      </div>
    </div>
  </div>
</form>
 <!-- end::modal add user-->

 <!-- begin::modal delete user-->
@foreach ($user as $item)
<form action="/account/delete/{{ $item->id }}" method="post">
    @method('delete')
    @csrf    
<div class="modal fade" id="modaldelete{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Account</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2>Hapus Account {{ $item->name }}</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary btn-sm">Delete</button>
        </div>
    
      </div>
    </div>
  </div>
</form>
@endforeach
 <!-- end::modal edit user -->

@endsection

@section('js-script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    
        $(document).ready(function () {
            $('#example').DataTable();
        });

</script>
@endsection
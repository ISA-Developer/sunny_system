@extends('layouts.main')

@section('title', 'Detail Account')

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
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ $user->name }}</small>
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
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" id="kt_toolbar_primary_button">Create</a>
                <!--end::Button-->
            </div> --}}
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="card mx-6" Id="List-vv" style="position: relative; overflow: hidden;">
        <!--begin:::Tabs-->
        <div class=" border-bottom">
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold pt-8 mb-8 ms-8">
                <!--begin:::Tab item Informasi Perusahaan-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active"
                        data-bs-toggle="tab" href="#kt_user_view_bio"
                        style="font-size:14px;">Biodata</a>
                </li>
                <!--end:::Tab item Informasi Perusahaan-->
    
                <!--begin:::Tab item Informasi Perusahaan-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4"
                        data-bs-toggle="tab"
                        href="#kt_user_view_password"
                        style="font-size:14px;">Security</a>
                </li>
                <!--end:::Tab item Informasi Perusahaan-->
            </ul>
        </div>
        <!--end:::Tabs-->
        <!--begin::Card body-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kt_user_view_bio" role="tabpanel">
                <div id="kt_account_profile_details" class="collapse show">
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Form-->
                        <form action="/account/update" method="post">
                        @csrf
                            <!--begin:: id_customer selected-->
                            <input type="hidden" name="id" value="{{ $user->id }}" id="id">
                            <input type="hidden" name="uuid" value="{{ $user->uuid }}" id="id">
                            <!--end:: id_customerid-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Profile Picture</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/avatars/blank.png)">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/blank.png)"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        {{-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span> --}}
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row">
                                            <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{ $user->name }}" />
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        {{-- <div class="col-lg-6 fv-row">
                                            <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
                                        </div> --}}
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="required col-lg-4 col-form-label fw-bold fs-6">Username</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="email" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="{{ $user->email }}"/>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Company <i class="bi bi-lock"></i></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Komisi Pengawas Persaingan Usaha" readonly />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            {{-- <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Contact Phone</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
                                </div>
                                <!--end::Col-->
                            </div> --}}
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site <i class="bi bi-lock"></i></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="https://google.com" readonly/>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            {{-- <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="required col-lg-4 col-form-label fw-bold fs-6">Password</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="password" name="password" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="{{ $user->password }}"/>
                                </div>
                                <!--end::Col-->
                            </div> --}}
                            <!--begin::Input group-->
                            @if (!auth()->user()->Role->is_user)
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Unit Kerja</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Col-->
                                <div class="col fv-row">
                                    <!--begin::Options-->
                                    <div class="" style="display: grid; grid-template-rows: repeat(1, 1fr); grid-template-columns: repeat(5, 1fr); row-gap: 1rem;">
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid me-5">
                                                <input class="form-check-input" name="check-unit-1" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 1</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="check-unit-2" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 2</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="check-unit-3" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 3</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="check-unit-4" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 4</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="check-unit-5" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 5</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="check-unit-6" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 6</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="check-unit-7" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 7</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="check-unit-8" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 8</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="check-unit-9" type="checkbox"/>
                                            <span class="fw-bold ps-2 fs-6">Unit 9</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <br>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Role</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Col-->
                                <div class="col fv-row">
                                    <!--begin::Options-->
                                    <div class="" style="display: grid; grid-template-rows: repeat(1, 1fr); grid-template-columns: repeat(5, 1fr); row-gap: 1rem;">
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid me-5">
                                                <input class="form-check-input" name="role" value="is_supervisor" type="radio"/>
                                            <span class="fw-bold ps-2 fs-6">Supervisor</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="role" value="is_admin" type="radio"/>
                                            <span class="fw-bold ps-2 fs-6">Admin</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="role" value="is_user" type="radio"/>
                                            <span class="fw-bold ps-2 fs-6">User</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="role" value="non" type="radio"/>
                                            <span class="fw-bold ps-2 fs-6">Non Active</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Col-->
                            </div>
                            @endif
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            {{-- <div class="row mb-0">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
                                <!--begin::Label-->
                                <!--begin::Label-->
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="form-check form-check-solid form-switch fv-row">
                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
                                        <label class="form-check-label" for="allowmarketing"></label>
                                    </div>
                                </div>
                                <!--begin::Label-->
                            </div> --}}
                            <!--end::Input group-->
                            <!--end::Input group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                    </div>
                    <!--end::Actions-->
                </div>
            </div>
            <!--end::Content-->
            <!--end::Content-->
            <div class="p-12 tab-pane fade show" id="kt_user_view_password" role="tabpanel">
                <form action="/account/password/reset" autocomplete="off" method="post">
                    @csrf
                    <input type="hidden" value="{{ $user->id }}" name="id">
                    <input type="hidden" value="{{ $user->uuid }}" id="uuid" name="uuid">
                    <div class="" style="position: relative; width: max-content;" data-bs-toggle="tooltip" data-bs-title="Password Akan Di-Reset Menjadi = *User Name, Anda Yakin?">
                        <input type="submit" class="btn btn-sm btn-active-primary text-white"
                        style="background-color: #008CB4;" value="Reset Password"/>
                    </div>
                    <br>
                    <br>
                    <div class="input-group input-group-sm">
                        <label class="input-group-text required" for="old-password">Old Password:</label>
                        <input type="password" name="old-password" class="form-control" required disabled>
                        <button class="btn btn-sm btn-secondary input-group-text" type="button" onclick="seePassword(this)"><i class="bi bi-eye-slash-fill fs-3"></i></button>
                    </div>
                    <div class="input-group input-group-sm my-3">
                        <label class="input-group-text required" for="new-password">New Password:</label>
                        <input type="password" name="new-password" class="form-control" required disabled>
                        <button class="btn btn-sm btn-secondary input-group-text" type="button" onclick="seePassword(this)"><i class="bi bi-eye-slash-fill fs-3"></i></button>
                    </div>
                    <div class="input-group input-group-sm mb-4">
                        <label class="input-group-text required" for="confirm-password">Confirm Password:</label>
                        <input type="password" name="confirm-password" onkeyup="confirmPassword(this)" class="form-control" required disabled>
                        <button class="btn btn-sm btn-secondary input-group-text" type="button" onclick="seePassword(this)"><i class="bi bi-eye-slash-fill fs-3"></i></button>
                    </div>
                </form>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Post-->
</div>


@endsection
@section('js-script')
<script>
    function seePassword(e) {
        const input = e.parentElement.querySelector("input");
        const icon = e.querySelector("i");
        if (input.getAttribute("type") == "password") {
            input.setAttribute("type", "text");
            icon.classList.add("bi-eye-fill");
            icon.classList.remove("bi-eye-slash-fill");
        } else {
            input.setAttribute("type", "password");
            icon.classList.remove("bi-eye-fill");
            icon.classList.add("bi-eye-slash-fill");
        }
    }
</script>
@endsection

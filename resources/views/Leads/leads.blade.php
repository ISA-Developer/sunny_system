@extends('layouts.content')
@section('title-content', 'Leads')
@section('content')
    <style>
        #list-filter {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(1, 1fr);
            /* grid-column-gap: 10px; */
            grid-row-gap: 10px;
        }
    </style>
    <!--begin::Body Dashboard-->
    <div id="content" class="mt-1 px-5">
        <div class="card">
            <div class="card-body">
                <div id="header">
                    <div class="d-flex justify-content-between align-items-center mb-5 w-100">
                        <div class="col-1" id="filter">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-funnel-fill"></i>
                                    Filters
                                </button>
                                <ul class="dropdown-menu">
                                  <li><button class="dropdown-item" onclick="addFilter()"><i class="bi bi-plus-lg me-2"></i>Add Filter</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-sm btn-active-primary text-white" style="background-color: #f3a113">New</button>
                        </div>
                    </div>
                    <div class="row mb-3" id="form-filter" style="display: none;">
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="w-300px">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose what to filter</option>
                                        <option value="Company">Company</option>
                                        <option value="Account">Account</option>
                                        <option value="Amount">Amount</option>
                                        <option value="Activity">Activity</option>
                                    </select>
                                </div>
                                <div class="w-100px">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="=" selected>=</option>
                                        <option value="≠">≠</option>
                                        <option value=">">></option>
                                        <option value=">=">>=</option>
                                        <option value="<"><</option>
                                        <option value="<="><=</option>
                                        <option value=">=">>=</option>
                                        <option value="Contains">Contains</option>
                                        <option value="Not Contains">Not Contains</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                <button type="button" onclick="cancelFilters(this)" class="btn btn-danger" name="cancel" id="cancel" aria-label="Cancel">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                                <button type="button" onclick="applyFilters(this)" class="btn btn-success" name="apply" id="apply" aria-label="Apply">
                                    <i class="bi bi-check-lg"></i>
                                </button>
                              </div>
                        </div>
                    </div>
                    <div id="list-filter" class="overflow-scroll">
                    </div>
                    
                    <div class="list-card-leads mt-10">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h1><a href="#" class="text-hover-primary text-dark">01\2023\Leads</a></h1>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="detail-company d-flex">
                                                <div class="company me-10">
                                                    <i class="bi bi-building fs-1 text-primary"></i>
                                                    <small>PT. Company</small>
                                                </div>
                                                <div class="customer">
                                                    <i class="bi bi-people-fill fs-1 text-primary"></i>
                                                    <small>Clearsoft</small>
                                                </div>
                                            </div>
                                            <div class="button-action dropdown">
                                                <button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                                <ul class="dropdown-menu p-3">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row mb-4">
                                    <div class="col">
                                        Kompor
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="cust-telp d-flex align-items-center">
                                                <i class="bi bi-telephone-fill fs-5 text-success me-2"></i>    
                                                <small>085156341949</small>
                                            </div>
                                            <div class="cust-email d-flex align-items-center">
                                                <i class="bi bi-envelope-fill fs-5 text-success me-2"></i>    
                                                <small>clearsoft@gmail.com</small>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <i class="bi bi-cash fs-5 text-success me-2"></i>    
                                                <small>Rp. 100.000.000</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Body Dashboard-->

@endsection

@section('js-script')
    {{-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.3.1/js/dataTables.rowGroup.min.js"></script> --}}

    <script>
        let filters = [];
        let editFilterData = null;
        async function applyFilters(e) {
            // how to create random string in js?
            let id = e.getAttribute("data-id");
            const elementInput = e.parentElement.querySelectorAll("select, input");
            const listFilters = document.querySelector("#list-filter");
            let html = "";
            const filter1 = elementInput[0];
            const operator = elementInput[1];
            const value = elementInput[2];
            if(filter1.value == "Choose what to filter") {
                return;
            }
            if(!value.value.trim()) {
                return;
            }
            filters = filters.filter((filter) => filter.id != id);
            filters.push({id, kategori: filter1.value, operator: operator.value, value: value.value});
            filters.forEach(filter => {
                html += `
                    <div class="filter bg-secondary rounded p-2 me-3 d-flex align-items-center" style="width: max-content">
                        <div class="me-4" onclick="editFilter(this, '${filter.id}')">
                            <small>
                                <span id="kategori">${filter.kategori}</span>
                                <span id="operator" class="fw-bolder">${filter.operator}</span>
                                <span id="value">${filter.value.trim()}</span>
                            </small>
                        </div>
                        <button onclick="deleteFilter(this, '${filter.id}')" data-id='${filter.id}' class="delete btn btn-sm btn-link"><i class="bi bi-x-lg"></i></button>
                    </div>
                `;
            });
            listFilters.innerHTML = html;

            filter1.value = "Choose what to filter";
            operator.value = "=";
            value.value = "";
            e.parentElement.parentElement.parentElement.style.display = "none";
        }   

        async function addFilter(e) {
            const formFilter = document.querySelector("#form-filter");
            const applyBtn = formFilter.querySelector("#apply");
            const cancelBtn = formFilter.querySelector("#cancel");
            const id = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
            applyBtn.setAttribute("data-id", id);
            cancelBtn.setAttribute("data-id", id);
            formFilter.style.display = "";
        }

        async function editFilter(e, id) {
            const formFilter = document.querySelector("#form-filter");
            const elementInput = formFilter.querySelectorAll("select, input");
            const applyBtn = formFilter.querySelector("#apply");
            const filter = e.querySelector("#kategori");
            const operator = e.querySelector("#operator");
            const value = e.querySelector("#value");
            applyBtn.setAttribute("data-id", id);
            editFilterData = {filter: filter.innerText, operator: operator.innerText, value: value.innerText};
            elementInput[0].value = filter.innerText;
            elementInput[1].value = operator.innerText;
            elementInput[2].value = value.innerText;
            formFilter.style.display = "";
        }

        async function cancelFilters(e) {
            const elementInput = e.parentElement.querySelectorAll("select, input");
            const applyBtn = e.parentElement.querySelector("#apply");
            const id = applyBtn.getAttribute("data-id");
            const formFilter = document.querySelector("#form-filter");
            if(id) {
                const filteredData = filters.filter((filter) => filter.id == id);
                if(filteredData.length > 0) {
                    const filterElt = document.querySelector(`.delete[data-id='${id}']`);
                    deleteFilter(filterElt, id);
                    elementInput[0].value = editFilterData.filter;
                    elementInput[1].value = editFilterData.operator;
                    elementInput[2].value = editFilterData.value;
                    applyFilters(applyBtn);
                } else {
                    elementInput[0].value = "Choose what to filter";
                    elementInput[1].value = "=";
                    elementInput[2].value = "";
                    formFilter.style.display = "none";
                }
            } else {
                elementInput[0].value = "Choose what to filter";
                elementInput[1].value = "=";
                elementInput[2].value = "";
                formFilter.style.display = "none";
            }
        }

        async function deleteFilter(e, id) {
            const parentFilter = e.parentElement;
            const parentListFilter = parentFilter.parentElement;
            parentListFilter.removeChild(parentFilter);
            filters = filters.filter((filter) => filter.id != id);
        }
    </script>
@endsection

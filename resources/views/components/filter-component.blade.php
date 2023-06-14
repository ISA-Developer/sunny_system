<style>
    #list-filter {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(1, 1fr);
        /* grid-column-gap: 10px; */
    }
</style>
<div id="header" class="col pt-5">
    <div class="d-flex align-items-center">
        <div class="col-3" id="filter">
            <div class="dropdown d-flex justify-content-between">
                <button class="btn btn-sm btn-light dropdown-toggle me-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel-fill"></i>
                    Filters
                </button>
                <button class="btn btn-sm btn-light btn-active-success" onclick='exportTableToExcel()' type="button">
                    <i class="bi bi-file-excel-fill"></i>
                    Export Excel
                </button>
                <ul class="dropdown-menu">
                    <li><button class="dropdown-item" onclick="addFilter()"><i class="bi bi-plus-lg me-2"></i>Add Filter</button></li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="row mb-3" id="form-filter" style="display: none;">
        <div class="col">
            <div class="input-group mb-3">
                <div class="w-300px">
                    <select class="form-select" onchange="getValueFromColumn(this)" data-model="{{ $model_name }}" aria-label="Default select example">
                        <option selected>Choose what to filter</option>
                        @foreach ($kategori as $k)
                            <option value="{{ $k }}">{{ $k }}</option>
                        @endforeach
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

                <div class="dropdown col" id="dropdown-value">
                    <input type="text" class="form-control" autocomplete="off" onkeyup="getAutoComplete(this)" data-bs-toggle="dropdown" aria-label="Text input with dropdown button">
                    {{-- <button hidden type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown trigger
                    </button> --}}
                    <ul class="dropdown-menu col">
                    </ul>
                </div>

                <button type="button" onclick="cancelFilters(this)" class="btn btn-danger" name="cancel" id="cancel" aria-label="Cancel">
                    <i class="bi bi-x-lg"></i>
                </button>
                <button type="button" onclick="applyFilters(this)" data-url="{{ $link_filter }}" data-method="{{ $method }}" data-modal="{{ $is_modal }}" class="btn btn-success" name="apply" id="apply"
                aria-label="Apply">
                <i class="bi bi-check-lg"></i>
            </button>
        </div>
    </div>
</div>
<div id="list-filter" class="overflow-scroll">
    </div>
    <script></script>
</div>

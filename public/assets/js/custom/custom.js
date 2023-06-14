// Begin :: filters function
let filters = [];
let editFilterData = null;
let url = "";
let originalFilterValue;
let columns = null;
let firstSegmentUrl;

async function applyFilters(e) {
    // how to create random string in js?
    let id = e.getAttribute("data-id");
    const url = window.location.protocol + "//" + window.location.host + e.getAttribute("data-url");
    const method = e.getAttribute("data-method");
    const isModal = e.getAttribute("data-modal") ?? false;
    const elementInput = e.parentElement.querySelectorAll("select, input");
    const listFilters = document.querySelector("#list-filter");
    let html = "";
    const filter1 = elementInput[0];
    const operator = elementInput[1];
    const value = elementInput[2];
    if (filter1.value == "Choose what to filter") {
        Toast.fire({
            title: "Pastikan semua field filter sudah terisi!",
            icon: "error",
        });
        return;
    }
    if (!value.value.trim()) {
        Toast.fire({
            title: "Pastikan semua field filter sudah terisi!",
            icon: "error",
        });
        return;
    }
    filters = filters.filter((filter) => filter.id != id);
    filters.push({ id, kategori: filter1.value, operator: operator.value, value: value.value });
    filters.forEach(filter => {
        html += `
                    <div class="filter bg-secondary rounded px-4 d-flex align-items-center" style="width: max-content">
                        <div class="me-2" onclick="editFilter(this, '${filter.id}')" data-id='${filter.id}'>
                            <small>
                                <span id="kategori">${filter.kategori}</span>
                                <span id="operator" class="fw-bolder">${filter.operator}</span>
                                <span id="value">${filter.value.trim()}</span>
                            </small>
                        </div>
                        <button onclick="deleteFilter(this, '${filter.id}')" data-id='${filter.id}' data-url='${url}' data-method='${method}' data-modal='${isModal}' class="delete btn btn-sm btn-link"><i class="bi bi-x"></i></button>
                    </div>
                `;
    });
    listFilters.innerHTML = html;

    filter1.value = "Choose what to filter";
    operator.value = "=";
    value.value = "";
    e.parentElement.parentElement.parentElement.style.display = "none";
    // return getData(url, filters);
    eval(`${method}('${url}', ${JSON.stringify(filters)}, ${JSON.stringify(columns)}, ${isModal})`);
    // getDataService(filters)
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
    id = e.getAttribute("data-id");
    const filter = e.querySelector("#kategori");
    const operator = e.querySelector("#operator");
    const value = e.querySelector("#value");
    applyBtn.setAttribute("data-id", id);
    editFilterData = { filter: filter.innerText, operator: operator.innerText, value: value.innerText };
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
    if (id) {
        const filteredData = filters.filter((filter) => filter.id == id);
        if (filteredData.length > 0) {
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
    const url = e.getAttribute("data-url");
    const method = e.getAttribute("data-method");
    const isModal = e.getAttribute("data-modal") ?? false;
    parentListFilter.removeChild(parentFilter);
    filters = filters.filter((filter) => filter.id != id);
    console.log(id, filters);
    if(filters && filters.length > 0) {
        eval(`${method}('${url}', ${JSON.stringify(filters)}, ${JSON.stringify(columns)}, ${isModal})`);
    } else {
        eval(`${method}('${url}', [], ${JSON.stringify(columns)}, ${isModal})`);
    }
}

function setDataTable(destroy = false) {
    if(!destroy) {
        $("table").DataTable({
            dom: "Brti",
            searching:      false,
            ordering:       false,
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         false,
            fixedColumns:   {
                left: 1,
                rigth: 0,
            },
            buttons: [
                {
                    extend: "excelHtml5",
                    title: "Data Services",
                },
            ]
        });
    } else {
        $("table").DataTable().destroy();
    }
}

async function getAutoComplete(e) {
    const value = e.value;
    const dropdownValueElt = document.querySelector("#dropdown-value");
    let filteredDropdownContent = [];
    let html = "";

    originalFilterValue.forEach(item => {
        if (!Number.isFinite(item) && item.toLowerCase().includes(value)) {
            filteredDropdownContent.push(item);
        } else if(Number.isFinite(item) && Number(item).toString().includes(value)) {
            filteredDropdownContent.push(item);
        }
    });
    filteredDropdownContent.forEach(item => {
        html += `
                    <li onclick="applyAutoComplete(this)" class="bg-hover-primary p-3">${item}</li>
                `;
    });
    dropdownValueElt.querySelector(".dropdown-menu").innerHTML = html;
    const dropdownValueBoots = new bootstrap.Dropdown(dropdownValueElt);
    dropdownValueBoots.show();
}


function getValueFromAutocomplete(e, inputID, originalData, key, idKey = "") {
    const value = e.value;
    const dropdownElt = e.parentElement.querySelector(".dropdown-menu");
    const dropdownBoots = new bootstrap.Dropdown(dropdownElt);
    const resultFilter = [];
    let html = "";

    JSON.parse(atob(originalData)).forEach(item => {
        if (item[key].toLowerCase().includes(value)) {
            if(idKey) {
                resultFilter.push({
                    id: item[idKey],
                    name_type: item[key],
                });
            } else {
                resultFilter.push({
                    id: item.id,
                    name_type: item[key],
                });
            }
        } else if (Number(item[key]).toString().includes(value)) {
            if(idKey) {
                resultFilter.push({
                    id: item[idKey],
                    name_type: item[key],
                });
            } else {
                resultFilter.push({
                    id: item.id,
                    name_type: item[key],
                });
            }
        }
    });
    if(resultFilter.length > 0) {
        resultFilter.forEach(item => {
            html += `
                    <li onclick="applyAutoComplete(this, '${inputID}')" data-id='${item.id}' class="bg-hover-primary p-3"><small>${item.name_type}</small></li>
                `;
        });
    } else {
        html += `
                <li class="p-3"><small>Data tidak ditemukan!</small></li>
        `
    }
    dropdownElt.innerHTML = html;
    dropdownBoots.show();
}

function applyAutoComplete(e, inputID = "") {
    if(inputID) {
        const inputIDElt = document.querySelector(`#${inputID}`);
        inputIDElt.value = e.getAttribute("data-id");
        e.parentElement.parentElement.querySelectorAll("input")[1].value = e.innerText;
    } else {
        e.parentElement.parentElement.querySelector("input").value = e.innerText;
    }
}

function getValueFromColumn(e) {
    const value = e.value;
    const modelName = e.getAttribute("data-model");
    fetch(`/get-column-value/${btoa(modelName)}/${value}/${JSON.stringify(filters)}`)
    .then(res => res.json())
    .then(data => {
        originalFilterValue = data;
        const inputTextValue = document.querySelector("#dropdown-value .form-control");
        getAutoComplete(inputTextValue);
    });
}

async function exportTableToExcel() {
    const table = document.querySelector('table');
    let columns = Array.from(table.querySelectorAll("thead tr th"));
    let html = "";
    columns = columns.map(e => e.innerText);
    columns.forEach((e, i) => {
        html += `
            <div class="form-check my-3">
                <input class="form-check-input" data-id=${i} type="checkbox" value="${e}" id="checkbox${i}">
                <label class="form-check-label" for="checkbox${i}">
                    ${e}
                </label>
            </div>
        `
    });
    const {value} = await selectDialog.fire({
        html: html,
        preConfirm: () => {
            return new Promise((resolve, reject) => {
                let data = Array.from(document.querySelectorAll("input:checked"));
                data = data.map(e => Number(e.getAttribute("data-id")));
                resolve(data);
            })
        }
    });
    if(value && value.length > 0) {
        $("table").DataTable().destroy();
        $("table").DataTable({
            dom: "Brti",
            searching:      false,
            ordering:       false,
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         false,
            fixedColumns:   {
                left: 1,
                rigth: 0,
            },
            buttons: [
                {
                    extend: "excelHtml5",
                    title: "Data Services",
                    exportOptions: {
                        columns: value
                    }
                },
            ]
        });
        const btnExcel = document.querySelector('.buttons-excel');
        btnExcel.click();
        // $("table").DataTable().destroy();
    }
    return;
}
// End :: filters function

// Begin :: Services Function
function getDataService(filter = "") {
    $("table").DataTable().destroy();
    document.querySelector("#spinner-div").style.display = "none";
    let html = '';
    let getDataServiceRes;
    if(filter) {
        getDataServiceRes = getData("/services/get/" + JSON.stringify(filter));
    } else {
        getDataServiceRes = getData("/services/get/");
    }
    getDataServiceRes.then(data => {
        if(data && data.length > 0) {
            data.forEach(service => {
                html += `
                    <tr class="">
                        <td><a href="/services/view/${service.id}" class="text-hover-info">${service.name_case}</a></td>
                        <td>${service.status}</td>
                        <td>${service.id_response_time_unit}: ${service.response_time}</td>
                        <td>${service.id_resolution_time_unit}: ${service.resolution_time}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" onclick="confirmDelete(this)" data-id="${service.id}" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                `;
            });
        } else {
            html += `
                <tr class="text-center">
                    <td colspan="4">Data tidak ditemukan!</td>
                </tr>
            `;
        }
        document.querySelector("#spinner-div").style.display = "none";
        document.querySelector("#data-service").innerHTML = html;
    });

}

function confirmDelete(e, primaryKey = "id", isModal = false) {
    const id = e.getAttribute("data-id");
    const modelName = e.getAttribute("data-model-class");
    const currentURL = e.getAttribute("data-url") + `/${modelName}`;
    // const firstSegmentUrl = currentURL.trim().split("/")[1];
    const newURL = `/${firstSegmentUrl}/get/?model_name=${modelName}&primary_key=${primaryKey}`;
    return confirmDialog.fire({
        title: 'Apakah anda yakin ingin delete item tersebut?',
    }).then(async (result) => {
        /* Read more about isConfirmed, isDenied below */
        let deleteServiceRes
        if (result.isConfirmed) {
            deleteServiceRes = await fetch(currentURL).then(res => res.json());
            if(deleteServiceRes.success) {
                Toast.fire({
                    title: "Data berhasil dihapus",
                    icon: "success",
                })
            } else {
                Toast.fire({
                    title: "Data gagal dihapus",
                    icon: "error",
                })
            }

            try {
                getDataTable(newURL, filters, ["*"], isModal);
                // console.log(deleteServiceRes);
                return deleteServiceRes;
            } catch (error) {
                return deleteServiceRes;
            }
        }
    });
}
// End :: Services Function

// Begin :: Cases Function
async function getDataTable(url, filter = '', showColumn = ["*"], isModal = false) {
   try {
     // $("table").DataTable().destroy();
     if ( $.fn.DataTable.isDataTable( 'table' ) ) {
        setDataTable(true);
      }
    const dataTbody = document.querySelector("#data");
    dataTbody.innerHTML = "";
    document.querySelector("#spinner-div").style.display = "";
    if(!columns) {
        columns = showColumn;
    }
    let queryUrl = ""
    if(url.includes("http") || url.includes("https")) {
        queryUrl = new URL(url);
    } else {
        queryUrl = new URL(window.location.protocol + "//" + window.location.host + url);
    }
    const dataURL = new URLSearchParams(queryUrl.search);
    const modelName = dataURL.get("model_name");
    const primaryKey = dataURL.get("primary_key") ?? "id";
    let getDataTableRes;
    try {
        if(filter) {
            getDataTableRes = await getData(url + `&filters=${JSON.stringify(filter)}&show_columns=${JSON.stringify(columns)}`);
        } else {
            getDataTableRes = await getData(url);
        }
    } catch (error) {
        Toast.fire({
            title: 'Error occurred when fetching data!',
            icon: 'error',
        });
        document.querySelector("#apply").setAttribute("data-filters", JSON.stringify(filter));
        document.querySelector("#spinner-div").style.display = "none";
        // setDataTable()
        return;
    }
    await generateTable(getDataTableRes, url, modelName, columns, primaryKey, isModal);
    document.querySelector("#apply").setAttribute("data-filters", JSON.stringify(filter));
    document.querySelector("#spinner-div").style.display = "none";
    setDataTable()
   } catch (error) {
    return new Error();
   }
}
// End :: Cases Function

// Begin :: Helpers Function
/**
 * Get Data from link \ url
 * @param mixed url
 * @param mixed filter
 * 
 * @return array
 */
async function getData(url, filter) {
    let data;
    if (filter && filter.length > 0) {
        data = await fetch(url + JSON.stringify(filter)).then(res => res.json());
    } else {
        data = await fetch(url).then(res => res.json());
    }
    return data;
}

/**
 * Generating table view
 * @param Array data
 * @return void
 */
function generateTable(data, url, modelName = "", showColumns, primaryKey = "id", isModal = false) {
    return new Promise((resolve, reject) => {

        // const firstSegmentUrl = url.trim().split("/")[1];
        if(!firstSegmentUrl) {
            firstSegmentUrl = url.trim().split("/")[1]
        }
        let headers;
        if(data.length < 1) {
            headers = showColumns;
        } else {
            headers = Object.keys(data[0]).filter(item => showColumns.includes(item));
        }
        const headersFormatted = headers.filter(item => showColumns.includes(item)).map(item => {
            // remove white spaces in string and capitalize each first words
            item = item.replaceAll("id", "");
            item = capitalizeFirstWordsInSentence(item);
            return item;
        });
        const table = document.querySelector("table");
        const thead = document.createElement("thead");
        const tr = document.createElement("tr");
        const dataTbody = document.querySelector("#data");
        let html = "";
        const isThExists = document.querySelector("table th");
        if(!isThExists) {
            for (let i = 0; i < headersFormatted.length + 1; i++) {
                const header = headersFormatted[i];
                const th = document.createElement("th");
                if(header) {
                    if(i == 0) {
                        th.style.zIndex = 2;
                    }
                    th.classList.add("fs-8");
                    th.classList.add("fw-bolder");
                    th.classList.add("bg-white");
                    th.innerText = header;
                } else {
                    th.classList.add("fs-8");
                    th.classList.add("fw-bolder");
                    th.innerText = "Action";
                }
                tr.appendChild(th);
            }
            thead.appendChild(tr);
            table.appendChild(thead);
            // headersFormatted.forEach(item => {
            // });
        }
        if(data.length > 0) {
            const totalLengthData = data.length;
            data.forEach((item, i, t) => {
                html += '<tr>';
                for(let i = 0; i < headers.length + 1; i++) {
                    const header = headers[i];
                    if(header) {
                        if(i == 0) {
                            if(item[header] != null){
                                if(!isModal){
                                    html += `
                                    <td class="bg-white">
                                        <a href="${firstSegmentUrl}/view/${item[primaryKey]}" class="text-primary text-active-info">${item[header]}</a>
                                    </td>`;
                                }else{
                                    html += `
                                    <td>
                                        ${item[header]}
                                    </td>`;
                                }
                            }else{
                                html += `<td>-</td>`
                            }
                        } else {
                            if(item[header]) {
                                // validate if value is date
                                const date = new Date(item[header]);
                                if(typeof item[header] != "number" && isFinite(date.getTime())) {
                                    // set format date to dd-mm-yyyy
                                    html += `<td class="bg-white">${date.toLocaleDateString("id-ID", {day: "2-digit", month: "long", year: "numeric"})}</td>`;
                                } else {
                                    if(typeof item[header] == "object") {
                                        const keys = Object.keys(item[header]);
                                        html += `<td>${item[header][keys[1]]}</td>`;
                                    } else {
                                        html += `<td>${item[header]}</td>`;
                                    }
                                }
                            } else {
                                html += `<td>-</td>`;
                            }
                        }
                    } else {
                        if(!isModal){
                            html += `
                                <td class="text-center">
                                <a class="text-hover-danger" onclick="confirmDelete(this, '${primaryKey}')" data-url='/${firstSegmentUrl}/delete/${item[primaryKey]}' data-model-class="${modelName}" data-id="${item[primaryKey]}" href="#">&nbsp;<i class="bi bi-trash"></i></a>
                                </td>
                            `;
                        }else{
                            html += `
                            <td class="">
                                <a class="text-hover-primary" href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_update_${item[primaryKey]}"><i class="bi bi-pencil-square"></i></a>
                                <a class="text-hover-danger" onclick="confirmDelete(this, '${primaryKey}', true)" data-url='/${firstSegmentUrl}/delete/${item[primaryKey]}' data-model-class="${modelName}" data-id="${item[primaryKey]}" href="#">&nbsp;<i class="bi bi-trash"></i></a>
                            </td>
                        `;
                        }
                    }
                }
                html += '</tr>';
            });
        }
        dataTbody.innerHTML = html;
        resolve(html)
    });
}

function capitalizeFirstWordsInSentence(string) {
    string = string.replaceAll("_", " ");
    return string = string.split(" ").map(string => string.charAt(0).toUpperCase() + string.slice(1)).join(" ");
}

/**
 * Validate all inputs that required to fill
 * @param HTMLElement form
 * 
 * If any data is not filled 
 * @return {Boolean} false
 * 
 * Otherwise
 * @return {mixed} form submit
 */
function validateInputs(form) {
    let invalidCounter = 0;
    const inputElts = form.querySelectorAll("input");
    const selectElts = form.querySelectorAll("select");
    inputElts.forEach(item => {
        const requiredElt = item.parentElement.querySelector("label.required");
        if(requiredElt) {
            if(item.value) {
                item.classList.remove("is-invalid");
                item.classList.add("is-valid");
            } else {
                item.classList.remove("is-valid");
                item.classList.add("is-invalid");
                invalidCounter++;
            }
        }
    });
    selectElts.forEach(item => {
        const requiredElt = item.parentElement.querySelector("label.required");
        if(requiredElt) {
            if(item.options[item.selectedIndex].text !== ""){
                item.classList.remove("is-invalid");
                item.classList.add("is-valid");
            }else{
                item.classList.remove("is-valid");
                item.classList.add("is-invalid");
                invalidCounter++;
            }
        }
    });
    if(invalidCounter > 0) {
        if(typeof Toast !== "undefined") {
            Toast.fire({
                icon: "error",
                title: "Input tidak boleh kosong",
            });
        }
        return false;
    }
    return form.submit();
}

/**
 * Function for show the element
 * @param {HTMLElement} e Parrent of the element
 * @param {HTMLElement} elt Id of the element when element is clicked
 * @param  {HTMLElement} eltplus Class of the add button element (+)
 */
function hideColumn(e, elt, eltplus) {
    e.parentElement.parentElement.querySelector(elt).style.display = "none";
    e.parentElement.querySelector("#hide-button").style.display = "none";
    e.parentElement.querySelector("#show-button").style.display = "";
}

/**
 * Function for show the element
 * @param {HTMLElement} e Parrent of the element
 * @param {HTMLElement} elt Id of the element when element is clicked
 * @param  {HTMLElement} eltplus Class of the add button element (+)
 */
// Begin:: show / hide element
function showColumn(e, elt, eltplus) {
    e.parentElement.parentElement.querySelector(elt).style.display = "";
    e.parentElement.querySelector("#hide-button").style.display = "";
    e.parentElement.querySelector("#show-button").style.display = "none";
}
// End:: show / hide element


/**
 * Function for reformat currency string input by class element
 */
function reformat() {
    this.value = Intl.NumberFormat("id").format(this.value.replace(/[^0-9]/gi, ""));
    // this.value = Intl.NumberFormat("en-US").format(this.value.replace(/[^0-9]/gi, ""));
    // return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}
document.querySelectorAll('.reformat').forEach(inp => {
    inp.addEventListener('input', reformat);
});
// End :: Helpers Function
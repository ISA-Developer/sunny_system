@extends('layouts.content')
@section('title-content', 'Forecast')
@section('content')
    {{-- <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"> --}}
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
        tr.odd td:first-child,
        tr.even td:first-child {
            padding-left: 8em;
        }
        tr.odd,
        tr.even, .dtrg-group.dtrg-level-1  {
            display: none;
        }

        .dtrg-group.dtrg-level-1 {
            transition: all .3ms ease-in-out;
        }
        .dtrg-group.dtrg-level-0:hover {
            background: red;
        }

        .dtrg-group.dtrg-level-1 th {
            padding-left: 4em;
        }

        .card {
            overflow-x: scroll;
            scroll-behavior: smooth;
        }
    </style>
    <!--begin::Body Dashboard-->
    <div id="content" class="mt-1 px-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-row-bordered">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Departemen</th>
                            <th>Unit Kerja</th>
                            @foreach (range(1, 12) as $month)
                                <th>{{ Carbon\Carbon::createFromFormat('m', $month)->translatedFormat('F') }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Testing Produk</td>
                            <td>Departemen 1</td>
                            <td>Unit 1</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>Testing Produk</td>
                            <td>Departemen 1</td>
                            <td>Unit 1</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                        </tr>

                        <tr>
                            <td>Testing Produk</td>
                            <td>Departemen 1</td>
                            <td>Unit 3</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>Testing Produk</td>
                            <td>Departemen 1</td>
                            <td>Unit 3</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>Testing Produk</td>
                            <td>Departemen 1</td>
                            <td>Unit 3</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                        </tr>

                        <tr>
                            <td>Testing Produk</td>
                            <td>Departemen 2</td>
                            <td>Unit 2</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>Testing Produk</td>
                            <td>Departemen 2</td>
                            <td>Unit 2</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                            <td>90</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end::Body Dashboard-->

@endsection

@section('js-script')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.3.1/js/dataTables.rowGroup.min.js"></script>

    <script>
        $(document).ready(function() {
            const table = $('table').DataTable({
                dom: "Brti",
                order: [
                    [1, 'asc']
                ],
                rowGroup: {
                    dataSrc: [1, 2],
                },
                columnDefs: [{
                    targets: [2, 1],
                    visible: false
                }]
            });

            function toggleRowContent(sibling) {
                const nextElement = sibling.nextSibling;
                if(sibling && (sibling.classList.contains("odd") || sibling.classList.contains("even"))) {
                    if(sibling.style.display == "table-row") {
                        sibling.style.display = "none";
                    } else {
                        sibling.style.display = "table-row";
                    }
                    if(!nextElement.classList.contains(".dtrg-level-0") && nextElement) {
                        toggleRowContent(nextElement);
                    }
                }
            }

            function toggleRowHeader(sibling) {
                const nextElement = sibling.nextSibling;
                if(sibling && sibling.classList.contains("dtrg-level-1")) {
                    if(sibling.style.display == "table-row") {
                        sibling.style.display = "none";
                    } else {
                        sibling.style.display = "table-row";
                    }
                    sibling.addEventListener("click", function(e) {
                        toggleRowContent(nextElement);
                    });
                }
                if(nextElement && !nextElement.classList.contains("dtrg-level-0")) {
                    console.log({sibling, nextElement});
                    toggleRowHeader(nextElement);
                }
                return;
            }

            const tableHeader1 = document.querySelectorAll("tbody .dtrg-level-0");
            const tableHeader2 = document.querySelectorAll("tbody .dtrg-level-1");
            for (let i = 0; i < tableHeader1.length; i++) {
                const element = tableHeader1[i];
                element.addEventListener("click", function(e) {
                    
                    toggleRowHeader(element.nextSibling);
                });
                // if(element.classList.contains("dtrg-level-0")) {
                // }
            }
        });
    </script>
@endsection

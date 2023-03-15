@extends('layouts.content')
@section('title-content', "Forecast")
@section('content')
    {{-- <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"> --}}
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <!--begin::Body Dashboard-->
    <div id="content" class="mt-1 px-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-row-bordered">
                    <thead>
                        <tr>
                            <th>Proyek</th>
                            <th>Januari</th>
                            <th>Februari</th>
                            <th>Maret</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DOP 1</td>
                            <td>Infra 1</td>
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
<script>
    $(document).ready(function () {
        $('table').DataTable({
        });
    });
</script>
@endsection
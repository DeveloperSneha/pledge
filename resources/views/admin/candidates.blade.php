@extends('admin.layout')
@section('content')
<style>
    .navbar-default.navbar-fixed-top {
        padding: 10px 0;
        background-color: #1cb0b7;
        border-bottom: 2px solid #310090;
    }
    .navbar-default .nav li a {
        color: #ffffff;
    }
    .dataTables_length, .dt-buttons {
        float: left;
        margin-right: 10px;    
    }
</style>
<div class="panel panel-default">
    <div class="panel-heading"><strong>Candidates Lists</strong></div>
    <div class="panel-body">
        <table class="table table-bordered" id='table2'>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Test Taken</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Test Taken</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@stop
@section('script')
<script>
    $(document).ready(function () {
        $('#table2').DataTable({
       
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            'responsive': true,
            'lengthMenu': [[25,50,100, -1], [25,50,100, "All"]],
            dom: 'lBfrtip',
            buttons: [
                { extend: 'excelHtml5', text: 'Export to Excel' ,title: 'Pledges'}
                // { extend: 'pdfHtml5', text: 'PDF' }
                // 'excelHtml5', 'pdfHtml5'
            ],
            "processing": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "serverSide": true,
            "ajax": {
                "url": "{{ url('pledges') }}",
                "dataType": "json",
                "type": "get",
              //  "data": {_token: "{{csrf_token()}}"}
                "data": function (d) {
                    d._token = "{{csrf_token()}}"
                },
            },
            "columns": [
                { "data": "idCandidate" },
                { "data": "name" },
                { "data": "gender" },
                { "data": "email" },
                { "data": "mobile" },
                { "data": "state" },
                { "data": "district" },
                { "data": "isTestTaken" }
            ],
            // "initComplete": function( settings, json ) {
            // console.log('here');
            // },
            'searching'   : true
        });
    });
</script>
@stop

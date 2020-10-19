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
    <div class="panel-heading"><strong>District Wise Pledges</strong></div>
    <div class="panel-body">
        <table class="table table-bordered" id='table2'>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>State Name</th>
                    <th>District Name</th>
                    <th>Pledge Taken</th>
                    <th>Test Taken</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($districts as $key => $var)
                <tr>
                    <td>{{ $i }}</td>
                    <td>
                        <?php 
                        $dist =\App\District::where('idDistrict','=',$key)->pluck('idState'); 
                        $st =\App\State::where('idState','=',$dist)->first();
                        ?>{{ $st->stateName}}</td>
                    <td>{{ $var}}</td>
                    <td>{{ $pledges = \App\Candidate::where('district','=',$key)->get()->count()}}</td>
                    <td>{{ $pledges = \App\Candidate::where('district','=',$key)->where('isTestTaken','=','Yes')->get()->count()}}</td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
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
            dom: 'lBfrtip',
            buttons: [
              { extend: 'excelHtml5', text: 'Export to Excel' ,title: 'District wise Pledge'}
                //{ extend: 'pdfHtml5', text: 'PDF' }
                //'excelHtml5', 'pdfHtml5'
            ]
        });
    });
</script>
@stop

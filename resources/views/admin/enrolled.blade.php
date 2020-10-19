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
    <div class="panel-heading"><strong>Candidates Enrollment</strong></div>
    <div class="panel-body">
        <table class="table table-bordered" id='table2'>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>District</th>
                    <th>Scheme</th>
                    <th>Sector</th>
                    <th>Job Role</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($enrolled as $var)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{$var->candidate->name}}</td>
                    <td>{{$var->candidate->mobile}}</td>
                    <td>{{$var->candidate->email}}</td>
                    <td>{{$var->district->districtName or ''}}</td>
                    <td>{{$var->scheme->schemeName or ''}}</td>
                    <td>{{$var->sector->sectorName or ''}}</td>
                    <td>{{$var->jobrole->jobRoleName or ''}}</td>
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
            stateSave: true,
            "bDestroy": true,
            paging      : true,
            lengthChange: true,
            searching   : true,
            ordering    : true,
            info        : true,
            autoWidth   : false,
            responsive  : true,
             dom: 'lBfrtip',
              buttons: [
                  { extend: 'excelHtml5', text: 'Export to Excel' ,title: 'Candidates Enrolled',
                  exportOptions: {columns: ':visible'}
              }
      //            { extend: 'pdfHtml5', text: 'PDF' }
              //     'excelHtml5', 'pdfHtml5'
              ]
          });
    });
</script>
@stop

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
    <div class="panel-heading"><strong>State Wise Pledges</strong></div>
    <div class="panel-body">
        <table class="table table-bordered" id='table2'>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>State Name</th>
                    <th>Pledge Taken</th>
                    <th>Test Taken</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($states as $key => $var)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $var}}</td>
                    <td>{{ $pledges = \App\Candidate::where('state','=',$key)->get()->count()}}</td>
                    <td>{{ $pledges = \App\Candidate::where('state','=',$key)->where('isTestTaken','=','Yes')->get()->count()}}</td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">  
            <div class="panel panel-default panel-bd lobidrag">
                <div class="panel-heading" style="padding: 5px 15px 5px;">
                    <div class="panel-title">
                        <h4>Pledges Vs Test</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="lineChart" height="150"></canvas>
                </div>
            </div>
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
        var canvas = document.getElementById("lineChart");
        var ctx = canvas.getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [@foreach($states as $key => $var) "{{$var}}", @endforeach],
                datasets: [
                    {
                        label: "Pledges Taken",
                        borderColor: "rgba(0,0,0,.09)",
                        borderWidth: "1",
                        backgroundColor: "rgba(0,0,0,.07)",
                        data: [@foreach($states as $key => $var) 
                                {{ $pledges = \App\Candidate::where('state','=',$key)->get()->count()}},
                            @endforeach]
                    },
                    {
                        label: "Tests Taken",
                        borderColor: "#00b2b7",
                        borderWidth: "1",
                        backgroundColor: "#00b2b7",
                        pointHighlightStroke: "#00b2b7",
                        data: [@foreach($states as $key => $var) 
                                {{ $tests =\App\Candidate::where('state','=',$key)->where('isTestTaken','=','Yes')->get()->count()
                                        }},
                            @endforeach]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                tooltips: {},
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                legend: {
                    display: false
                }
            }
        });
    
        var canvas = document.getElementById("barChart");
        var ctx = canvas.getContext('2d');

        // Global Options:
        //Chart.defaults.global.defaultFontColor = 'dodgerblue';
        //Chart.defaults.global.defaultFontSize = 16;

        // Data with datasets options
        var data = {
            labels: [@foreach($states as $key => $var) "{{$var}}", @endforeach],
              datasets: [
                    {
                        label: "Pledges Taken",
                        borderColor: "rgba(0,0,0,.09)",
                        borderWidth: "1",
                        backgroundColor: "rgba(0,0,0,.07)",
                        data: [@foreach($states as $key => $var) 
                                {{ $pledges = 
                                    \App\Candidate::where('state','=',$key)->get()->count()
                                        }},
                            @endforeach]
                    },
                    {
                        label: "Tests Taken",
                        borderColor: "#00b2b7",
                        borderWidth: "1",
                        backgroundColor: "#00b2b7",
                        pointHighlightStroke: "#00b2b7",
                        data: [@foreach($states as $key => $var) 
                                {{ $tests = 
                                    \App\Candidate::where('state','=',$key)->where('isTestTaken','=','Yes')->get()->count()
                                        }},
                            @endforeach]
                    }
                ]
        };

        var options = {
            tooltips: {
                callbacks: {
                    //label: function(tooltipItem) {
                        //return "$" + Number(tooltipItem.yLabel) + " and so worth it !";
                    //}
                }
            },
            title: {
                      display: true,
                      text: 'Pledges vs Test Taken',
                      position: 'bottom'
                  },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        };

        // Chart declaration:
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    });
</script>
@stop
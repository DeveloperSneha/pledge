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
</style>
<div class="main_counter_area counter" id="counter">
    <!--<div class="overlay p-y-3">-->
        <div class="container">
            <div class="row">
                <div class="main_counter_content text-center wow fadeInUp">
                    <div class="col-md-3 col-md-offset-2">
                        <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-thumbs-up m-b-1"></i>
                            <?php $pledge = \App\Candidate::get()->count(); ?>
                            <h2 class="statistic-counter" style="margin-top: 5px;">{{$pledge}}</h2>
                            <p class="statistic">Total Pledges Taken</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-2">
                        <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-check m-b-1"></i>
                            <?php $test = \App\Candidate::where('isTestTaken', '=', 'Yes')->get()->count(); ?>
                            <h2 class="statistic-counter" style="margin-top: 5px;"> {{$test}}</h2>
                            <p class="statistic">Total Tests Taken</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</div>-->
</div>
<br><br>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">  
            <div class="panel panel-default panel-bd lobidrag">
                <div class="panel-heading" style="padding: 5px 15px 5px;">
                    <div class="panel-title">
                        <h4>Pledges Vs Test</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="barChart" height="150"></canvas>
                </div>
            </div>
        </div>
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
    var canvas = document.getElementById("lineChart");
    var ctx = canvas.getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [@foreach($districts as $key => $var) "{{$var}}", @endforeach],
            datasets: [
                {
                    label: "Pledges Taken",
                    borderColor: "rgba(0,0,0,.09)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    data: [@foreach($districts as $key => $var) 
                            {{ $pledges = 
                                \App\Candidate::where('district','=',$key)->get()->count()
                                    }},
                        @endforeach]
                },
                {
                    label: "Tests Taken",
                    borderColor: "#028084",
                    borderWidth: "1",
                    backgroundColor: "#00b2b7",
                    pointHighlightStroke: "#001529",
                    data: [@foreach($districts as $key => $var) 
                            {{ $tests = 
                                \App\Candidate::where('district','=',$key)->where('isTestTaken','=','Yes')->get()->count()
                                    }},
                        @endforeach]
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            tooltips: {
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            legend             : {
                display: true
            },

        }
    });
    
    var canvas = document.getElementById("barChart");
    var ctx = canvas.getContext('2d');

    // Global Options:
//     Chart.defaults.global.defaultFontColor = 'dodgerblue';
//     Chart.defaults.global.defaultFontSize = 16;

    // Data with datasets options
    var data = {
        labels: [@foreach($districts as $key => $var) "{{$var}}", @endforeach],
          datasets: [
                {
                    label: "Pledges Taken",
                    borderColor: "rgba(0,0,0,.09)",
                    borderWidth: "1",
                    backgroundColor: "#fd0202",
                    data: [@foreach($districts as $key => $var) 
                            {{ $pledges = 
                                \App\Candidate::where('district','=',$key)->get()->count()
                                    }},
                        @endforeach]
                },
                {
                    label: "Tests Taken",
                    borderColor: "#000d6b",
                    borderWidth: "1",
                    backgroundColor: "#000d6b",
                    pointHighlightStroke: "#fff",
                    data: [@foreach($districts as $key => $var) 
                            {{ $tests = 
                                \App\Candidate::where('district','=',$key)->where('isTestTaken','=','Yes')->get()->count()
                                    }},
                        @endforeach]
                }
            ]
    };

    var options = {
    tooltips: {
//            callbacks: {
//                label: function(tooltipItem) {
//                    return "$" + Number(tooltipItem.yLabel) + " and so worth it !";
//                }
//            }
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
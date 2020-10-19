@extends('layouts.main')
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
<section id="contact" class="contact">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <!--  <h3>Contact With Us</h3> -->
                    <div class="white-text">
                        <font size="10" color="blue" font-family="Oswald"><strong>E</strong></font><font size="7" color="white"><strong>nroll &nbsp; Here</strong></font> 
                    </div>

                </div>
            </div>
        </div>
        <hr style="border-top:none;">
        <div class="row">
            <div class="col-lg-12">
                {!! Form::open(['method' => 'GET',  'action' => ['Candidate\EnrollmentController@index'], 'class' => 'form-horizontal']) !!}
                 <!--<form action="{{url('/enrollment')}}" method="GET">-->
                <div class="row" style="background-color: #8080806b; padding: 10px;">
                    <div class="col-sm-4">
                        <p style="color:#5BB12F;font-weight:bold">Search By Scheme</p>
                        <div class="form-group ">
                            <p class="white-text">Scheme</p>
                            <select class="form-control"  id="idScheme" name="idScheme" data-validation-required-message="This Is Required"  style="height: 42px;" >
                                <option value="">---Select---</option>
                                @foreach($schemes as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                            <span class="help-block">
                                <strong>
                                </strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p style="color:#5BB12F;font-weight:bold">Search By Location</p>
                        <div class="form-group ">
                            <p class="white-text">State</p>
                            <select class="form-control"  id="idState" name="idState" style="height: 42px;">
                                <option value="" selected>Haryana</option>
                            </select>
                            <span class="help-block">
                                <strong>
                                </strong>
                            </span>
                        </div>
                        <div class="form-group ">
                            <p class="white-text">District</p>
                            <select class="form-control"  id="idDistrict" name="idDistrict" style="height: 42px;" >
                                <option value="">---Select---</option>
                                @foreach($districts as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                            <span class="help-block">
                                <strong>
                                </strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p style="color:#5BB12F;font-weight:bold">Search By Sector</p>
                        <div class="form-group ">
                            <p class="white-text">Sector</p>
                            <select class="form-control"  id="idSector" name="idSector" style="height: 42px;">
                                <option value="">---Select---</option>
                                @foreach($sectors as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach

                            </select>
                            <span class="help-block">
                                <strong>
                                </strong>
                            </span>
                        </div>
                        <div class="form-group ">
                            <p class="white-text">Job Role</p>
                            <select class="form-control"  id="idJobRole" name="idJobRole" style="height: 42px;">
                                <option value="">---Select---</option>

                            </select>
                            <span class="help-block">
                                <strong>
                                </strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>

                    
                    <div class="clearfix"></div>
                    <hr>
                    <hr style="border-top:none;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped dataTable">
                                    <thead id='thead'>
                                        <tr style="background:#d0d0d0;">
                                            <th style="text-align:center;">Training Partner</th>
                                            <th style="text-align:center;">Scheme</th>
                                            <th style="text-align:center;">Sector</th>
                                            <th style="text-align:center;">Job Role</th>
                                            <th style="text-align:center;">District</th>
                                            <th style="text-align:center;">Location</th>
                                            <th style="text-align:center;">Contact No.</th>
                                            <th style="text-align:center;">Email Id</th>
                                        </tr>
                                    </thead>
                                    <tbody id='tbody'>
                                        @if(count($companies)>0 )
                                        @foreach($companies as $var)
                                        <tr style="background:#d0d0d0;">
                                            <td style="text-align:center;">{{$var->trainingPartner}}</td>
                                            <td style="text-align:center;">{{$var->schemeName}}</td>
                                            <td style="text-align:center;">{{$var->sectorName}}</td>
                                            <td style="text-align:center;">{{$var->jobRoleName}}</td>
                                            <td style="text-align:center;">{{$var->districtName}}</td>
                                            <td style="text-align:center;">{{$var->address}}</td>
                                            <td style="text-align:center;">{{$var->contactNo}}</td>
                                            <td style="text-align:center;">{{$var->email}}</td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="8"><strong>Kindly Contact Haryana Skill Development Mission (HSDM) for more information (https://hsdm.org.in)</strong></td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                <div class="row"></div>
                  <!--</form>-->
                  {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr style="border-top:none;">
</section>

@stop
@section('script')
<script>
    $('#search_form').on('submit', function (e) {
        $.ajaxSetup({
            header: $('meta[name="_token"]').attr('content')
        });
        var formData = new FormData($('#search_form')[0]);
        $.ajax({
            type: "GET",
            url: "{{url('/enrollment') }}",
            processData: false,
            contentType: false,
            async: false,
            cache: false,
            data: formData,
            dataType: 'json',
            success: function (data) {
                $('#thead').append('<tr style="background:#d0d0d0;"><th style="text-align:center;">Training Partner</th><th style="text-align:center;">Location</th><th style="text-align:center;">Contact No.</th><th style="text-align:center;">Email Id</th></tr>');
            },
        })
    });
    $('select[name="idSector"]').on('change', function () {
        var sectorID = $(this).val();
        if (sectorID) {
            $.ajax({
                url: "{{url('/sector') }}" + '/' + sectorID + "/jobroles",
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('select[name="idJobRole"]').empty();
                    $('select[name="idJobRole"]').append('<option value="">---Select Job Role--</option>');
                    $.each(data, function (key, value) {
                        $('select[name="idJobRole"]').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('select[name="idJobRole"]').empty();
        }
    });
//    $('select[name="idDistrict"]').on('change', function () {
//        var districtID = $(this).val();
//        if (districtID) {
//            $.ajax({
//                url: "{{url('/district') }}" + '/' + districtID + "/blocks",
//                type: "GET",
//                dataType: "json",
//                success: function (data) {
//                    $('select[name="idBlock"]').empty();
//                    $('select[name="idBlock"]').append('<option val>---Select Block--</option>');
//                    $.each(data, function (key, value) {
//                        $('select[name="idBlock"]').append('<option value="' + value + '">' + value + '</option>');
//                    });
//                }
//            });
//        } else {
//            $('select[name="idBlock"]').empty();
//        }
//    });
</script>
@stop
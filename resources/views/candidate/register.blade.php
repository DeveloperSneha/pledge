@extends('layouts.main')
@section('content')
<style>
    .navbar-default.navbar-fixed-top {
        padding: 10px 0;
        background-color: #1cb0b7;
    }
    .navbar-default .nav li a {
        text-transform: uppercase;
        font-family: sans-serif;
        font-weight: 700;
        letter-spacing: 1px;
        color: #fbf6f6;
        font-size: 12px;
    }
    .sa-icon sa-custom{
        height: 177px;
    }
    #submit{
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border:2px solid #FFFFFF;
        border-radius:10px;
        cursor:pointer !important;    
    }

    #submit:hover{
        background-color:#222222;
    }
    .loading1{
        font-size:0;
        width:30px;
        height:30px;
        margin-top:5px;
        border-radius:50%!important;
        padding:0;
        border:3px solid #FFFFFF;
        border-bottom:3px solid rgba(255,255,255,0.0);
        border-left:3px solid rgba(255,255,255,0.0);
        background-color:transparent !important;
        animation-name: rotateAnimation;
        -webkit-animation-name: wk-rotateAnimation;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        animation-delay: 0.2s;
        -webkit-animation-delay: 0.2s;
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
    }

    @keyframes rotateAnimation {
        0%   {transform: rotate(0deg);}
        100% {transform: rotate(360deg);}
    }
    @-webkit-keyframes wk-rotateAnimation {
        0%   {-webkit-transform: rotate(0deg);}
        100% {-webkit-transform: rotate(360deg);}
    }

</style>
<!-- Start Pricing Table Section -->
<div id="pricing" class="pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="col-md-12 text-center">
                            <br><br><br><strong style="color:white; font-size: 30px;" >*** PLEDGE ***</strong>
                            <p class="white-text" style="margin: 0px;padding: 0px;font-size:20px;margin:10px;"> World Youth Skills Day -15th July 2019 </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="margin:10px;">
                <div class="col-md-12">
                    <div class=" text-center">
                        <div class="col-md-12 text-center">
                                <font size=8 color=red font-family=Oswald><strong>H</strong></font><font size=8 ><strong>UNAR &nbsp;</strong></font> 
                                <font size=8 color=red font-family=Oswald><strong>H</strong></font><font size=8 ><strong>AI &nbsp;</strong></font>
                                <font size=8 color=red font-family=Oswald><strong>T</strong></font><font size=8 ><strong>OH  &nbsp;</strong></font>
                                <font size=8 color=red font-family=Oswald><strong>K</strong></font><font size=8 ><strong>ADAR  &nbsp; </strong></font>
                                <font size=8 color=red font-family=Oswald><strong>H</strong></font><font size=8 ><strong>AI</strong></font><br><br>
                                <font size=15 color=red font-family=Oswald><strong>हु</strong></font><font size=10 ><strong>नर &nbsp;</strong></font>
                                <font size=15 color=red font-family=Oswald><strong>है&nbsp;</strong></font>
                                <font size=15 font-family=Oswald><strong>तो&nbsp;</strong></font>
                                <font size=15 color=red font-family=Oswald><strong>क</strong></font><font size=10 ><strong>दर &nbsp;</strong></font>
                                <font size=15 color=green font-family=Oswald><strong>है</strong></font>                          

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Pricing Table Section -->


        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <!--  <h3>Contact With Us</h3> -->
                            <div class="white-text">
                                <font size=10 color=blue font-family=Oswald><strong>P</strong></font><font size=7 color=white ><strong>rovide &nbsp;</strong></font> 
                                <font size=10 color=red font-family=Oswald><strong>Y</strong></font><font size=7 color=white ><strong>our &nbsp;</strong></font>
                                <font size=10 color=green font-family=Oswald><strong>D</strong></font><font size=7 color=white ><strong>etails &nbsp;</strong></font>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('candidate.register.submit')}}" method="POST" id="register"> 
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <input type="hidden" name="password" id="password">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('#name1') ? ' has-error' : '' }}">
                                        <p class="white-text">Your Name /आपका नाम  *</p>
                                        {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Please enter your name','id'=>'name']) !!}
                                        <span id="name1"></span>
                                    </div>

                                    <div class="form-group {{ $errors->has('#dob1') ? ' has-error' : '' }}">
                                        <p class="white-text">Date of Birth /जन्म की तारीख *</p>
                                        {!! Form::text('dob', null, ['class' => 'form-control datepicker','placeholder'=>'Please enter your date of birth','autocomplete'=>'off','id'=>'dob']) !!}
                                        <span id="dob1"></span>
                                    </div>
                                    <div class="form-group {{ $errors->has('#gender1') ? ' has-error' : '' }}">
                                        <p class="white-text">Select Gender / लिंग चुने *</p>
                                        {!! Form::select('gender',getGender(), null, ['class' => 'form-control','style'=>'height: 42px;']) !!}       
                                        <span id="gender1"></span>
                                    </div>
                                    <div class="form-group {{ $errors->has('#email1') ? ' has-error' : '' }}">
                                        <p class="white-text">Your Email / ईमेल आईडी *</p>
                                        {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'Please enter your email']) !!}
                                        <span id="email1"></span>
                                    </div>
                                    <div class="form-group {{ $errors->has('#mobile1') ? ' has-error' : '' }}">
                                        <p class="white-text">Mobile Number / मोबाइल नंबर *</p>
                                        {!! Form::text('mobile', null, ['class' => 'form-control','placeholder'=>'Please enter your mobile number','minlength'=>'10','maxlength'=>'10']) !!}
                                        <span id="mobile1"></span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('#country1') ? ' has-error' : '' }}">
                                        <p class="white-text">Select Country /अपना देश चुने  *</p>
                                        <select class="form-control"  id="country" name="country" data-validation-required-message="This Is Required" required style="height: 42px;">
                                            <option value="INDIA">INDIA / भारत </option>
                                        </select>
                                        <span id="country1"></span>
                                    </div>
                                    <div class="form-group {{ $errors->has('#state1') ? ' has-error' : '' }}">
                                        <p class="white-text">Select State / राज्य  चुने  *</p>
                                        {!! Form::select('state',getState(), null, ['class' => 'form-control','style'=>'height: 42px;']) !!}  
                                        <span id="state1"></span>
                                    </div>
                                    <div class="form-group {{ $errors->has('#district1') ? ' has-error' : '' }}">
                                        <p class="white-text">Select District /   जिला चुने *</p>
                                        <select class="form-control" id="district" name="district" style="height: 42px;">
                                            <option value="">Select District</option>
                                        </select>
                                        <span id="district1"></span>
                                    </div>
                                    <div class="form-group {{ $errors->has('#address_location1') ? ' has-error' : '' }}">
                                        <p class="white-text">Address Location / पता स्थान *</p>
                                        {!! Form::select('address_location',getLoc(), null, ['class' => 'form-control','style'=>'height: 42px;']) !!}  
                                        <span id="address_location1"></span>
                                    </div>
                                    <div class="form-group {{ $errors->has('#present_status1') ? ' has-error' : '' }}">
                                        <p class="white-text">Present Status / वर्तमान स्थिति *</p>
                                        {!! Form::select('present_status',getStatus(), null, ['class' => 'form-control','style'=>'height: 42px;']) !!}                                             
                                        <span id="present_status1"></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <input type="submit" id="submit" class="btn btn-primary" value="I Plan"><br>
                                    <p class="white-text">(link to skill assessment tests)</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Clients Aside -->
            <section id="partner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <!-- <h3>Our Honorable Partner</h3> -->
                                <!--<p>Our Honorable Partners</p>-->
                                <p class="white-text" style="font-size: 50px;">Our Honourable Partners</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                <div class="clients">

                    <div class="col-md-12">
                        <a href="http://www.hsdm.org.in/" target="_blank">  <img src="{{asset('dist/images/logos/themeforest.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://itiharyana.gov.in/" target="_blank">        <img src="{{asset('dist/images/logos/creative-market.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://www.hvsu.ac.in/" target="_blank">    <img src="{{asset('dist/images/logos/designmodo.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://itiharyana.gov.in/" target="_blank">       <img src="{{asset('dist/images/logos/creative-market.png')}}" class="img-responsive" alt="..."></a>
                    </div>                    

                    <div class="col-md-12">
                        <a href="http://www.hsdm.org.in/" target="_blank">  <img src="{{asset('dist/images/logos/sk.png')}}" class="img-responsive" alt="..."></a>
                    </div>
                    <div class="col-md-12">
                        <a href="http://www.hvsu.ac.in/" target="_blank">  <img src="{{asset('dist/images/logos/designmodo.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://www.hsdm.org.in/" target="_blank">  <img src="{{asset('dist/images/logos/themeforest.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://itiharyana.gov.in/" target="_blank">     <img src="{{asset('dist/images/logos/creative-market.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://www.hvsu.ac.in/" target="_blank">  <img src="{{asset('dist/images/logos/designmodo.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>
                </div>
            </div>
                </div>
            </section>
        </section>
@stop
@section('script')
<script>
    $(document).ready(function () {
        $('select[name="state"]').on('change', function () {
            var idState = $(this).val();
            if (idState) {
                $.ajax({
                    url: "{{url('/state/') }}" + '/' + idState + "/districts",
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="district"]').empty();
                        $('select[name="district"]').append('<option value="">--- Select District ---</option>');
                        $.each(data, function (key, value) {
                            $('select[name="district"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="district"]').empty();
            }
        });
    });

    $('#register').on('submit', function (e) {
        
        var candidatename = $('#name').val();
        $("#submit").addClass("loading1");
        var password = $("#dob").val();
        var pass = password.replace('-', '');
        $("#password").val(pass.replace('-', ''));
        $.ajaxSetup({
            header: $('meta[name="_token"]').attr('content')
        });
        var formData = new FormData($('#register')[0]);
        $.ajax({
            type: "POST",
            url: "{{url('/cregister') }}",
            processData: false,
            contentType: false,
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data[Object.keys(data)[0]] === 'SUCCESS') {
                    $("#submit").removeClass("loading1");
                    setTimeout(function () {
                        swal({
                            title: "धन्यवाद ! "+ candidatename +" जी",
                            text: "हरियाणा स्किल डिवेलॅप्मॅन्ट मिशन की इस पहल में हिस्सा लेने के लिए,\n हम आपका आभार प्रकट करते है! \n\
                                    आशा है हमारी योजनाएं आपकी उन्नति में उपयोगी सिद्ध होंगी।",
                            imageUrl: "{{asset('dist/images/hands.jpg')}}",
                            confirmButtonText: "आगे बढ़े"                        
                    }, function () {
                            window.location = "{{url('/candidate')}}";
                        }, 2000);
                    });
//                window.location = "{{url('/candidate')}}";
                    //True Case i.e. passed validation
                    
            } else {                  //False Case: With error msg
                    $("#msg").html(data);   //$msg is the id of empty msg
                }

            },

            error: function (data) {
                // console.log(data);
                if (data.status === 422) {
                    $("#submit").removeClass("loading1");
                    var errors = data.responseJSON;
                    // console.log(errors);
                    var errorHtml = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function (key, value) {
                        errorHtml += '<li>' + value + '</li>';
                    });
                    errorHtml += '</ul></div>';

                    $('#formerrors').html(errorHtml);
                    if (errors['name'] === undefined) {
                        $('#name1').empty();
                    } else {
                        errorname = '<span class="help-block"><strong>' + errors['name'] + '</strong></span>';
                        $('#name1').html(errorname);
                    }
                    if (errors['district'] === undefined) {
                        $('#district1').empty();
                    } else {
                        errorname = '<span class="help-block"><strong>' + errors['district'] + '</strong></span>';
                        $('#district1').html(errorname);
                    }
                    if (errors['state'] === undefined) {
                        $('#state1').empty();
                    } else {
                        errorname = '<span class="help-block"><strong>' + errors['state'] + '</strong></span>';
                        $('#state1').html(errorname);
                    }
                    if (errors['dob'] === undefined) {
                        $('#dob1').empty();
                    } else {
                        errorname = '<span class="help-block"><strong>' + errors['dob'] + '</strong></span>';
                        $('#dob1').html(errorname);
                    }
                    if (errors['gender'] === undefined) {
                        $('#gender1').empty();
                    } else {
                        errorname = '<span class="help-block"><strong>' + errors['gender'] + '</strong></span>';
                        $('#gender1').html(errorname);
                    }
                    if (errors['mobile'] === undefined) {
                        $('#mobile1').empty();
                    } else {
                        errorname = '<span class="help-block"><strong>' + errors['mobile'] + '</strong></span>';
                        $('#mobile1').html(errorname);
                    }
                    if (errors['present_status'] === undefined) {
                        $('#present_status1').empty();
                    } else {
                        errorfname = '<span class="help-block"><strong>' + errors['present_status'] + '</strong></span>';
                        $('#present_status1').html(errorfname);
                    }
                    if (errors['address_location'] === undefined) {
                        $('#address_location1').empty();
                    } else {
                        errorfname = '<span class="help-block"><strong>' + errors['address_location'] + '</strong></span>';
                        $('#address_location1').html(errorfname);
                    }
                    if (errors['email'] === undefined) {
                        $('#email1').empty();
                    } else {
                        errorfname = '<span class="help-block"><strong>' + errors['email'] + '</strong></span>';
                        $('#email1').html(errorfname);
                    }
                }
            }
        });
        return false;
    });
</script>
@stop
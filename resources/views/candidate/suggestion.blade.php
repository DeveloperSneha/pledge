@extends('layouts.main')
@section('content')
<style>
    .sweet-alert {
        background-color: #ffffff;
        width: 440px!important;
    }
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="section-title text-center">
                            <!--  <h3>Contact With Us</h3> -->
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="margin-bottom: 17px;"></div>
                    <div class="col-lg-12" style="margin-top: 17px;">
                        <div id="success"></div>
                        {!! Form::open(['url' => 'suggestion','id'=>'sug']) !!}
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4" style="border: 2px groove white;padding: 14px;text-align: center;">
                                    <div class="white-text">
                                        <font size=4 color=white ><strong>Submit Your Valuable Suggestion &nbsp;<br>अपना बहुमूल्य सुझाव प्रस्तुत करें</strong></font> 
                                        <!--<font size=7 color=white ><strong>ogin &nbsp;</strong></font>-->

                                    </div><hr>
                                    <div class="form-group">
                                        <!--<p class="white-text">Your Suggestion</p>-->
                                        <textarea name="suggestion" size="30x3" class="form-control" required="required" placeholder="Any idea/Suggestion to improve Skill Development Program"></textarea>
                                        <!--<input type="textarea" class="form-control" name="mobile" id="mobile" required data-validation-required-message="Please enter your User Name.">-->
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </div>
                                </div>
                            </div>                            
                        {!!Form::close()!!}
                    </div>
                </div><br><br><br><br><br><br>
            </div>
        </section>
@stop
@section('script')
<script>
    $('#sug').on('submit', function (e) {
        $.ajaxSetup({
            header: $('meta[name="_token"]').attr('content')
        });
        var formData = new FormData($('#sug')[0]);
        $.ajax({
            type: "POST",
            url: "{{url('/suggestion') }}",
            processData: false,
            contentType: false,
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data[Object.keys(data)[0]] === 'SUCCESS') {
                    setTimeout(function () {
                        swal({
                            title: "Thank You For suggestion",
//                            text: "हरियाणा स्किल डिवेलॅप्मॅन्ट मिशन की इस पहल में हिस्सा लेने के लिए,\n हम आपका आभार प्रकट करते है! \n आशा है हमारी योजनाएं आपकी उन्नति में उपयोगी सिद्ध होंगी।",
                            type: "success",
                            confirmButtonText: ""                        
                    }, function () {
                            window.location = "{{url('/')}}";
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

                    
                }
            }
        });
        return false;
    });
</script>
@stop
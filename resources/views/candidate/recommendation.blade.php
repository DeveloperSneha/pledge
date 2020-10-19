@extends('layouts.maincm')
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
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <!--  <h3>Contact With Us</h3> -->
                    <div class="white-text">
                        <font size="10" color="blue" font-family="Oswald"><strong>A</strong></font><font size="7" color="white"><strong>ny &nbsp;</strong></font> 
                        <font size="10" color="red" font-family="Oswald"><strong>R</strong></font><font size="7" color="white"><strong>ecommendation &nbsp;</strong></font>
                        <p class="white-text" style="padding-bottom: 10px; font-size: 25px;">जिसे आप कौशल विकास के लिए नामांकित करना चाहते है </p>
                     </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {!! Form::open(['url' => 'recommendation','id'=>'recom']) !!}
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="form-group ">
                                <p class="white-text"> Name / नाम  *</p>
                                <input class="form-control" placeholder="Please enter your name" name="referenceName" type="text" required="required">
                                <span class="help-block">
                                    <strong>
                                    </strong>
                                </span>
                            </div>
                            <div class="form-group ">
                                <p class="white-text"> Email / ईमेल आईडी *</p>
                                <input class="form-control" placeholder="Please enter your email" name="email" type="email"  required="required">
                                <span class="help-block">
                                    <strong>
                                    </strong>
                                </span>
                            </div>
                            <div class="form-group ">
                                <p class="white-text">Mobile Number / मोबाइल नंबर *</p>
                                <input class="form-control" placeholder="Please enter your mobile number" name="mobile" type="text"  required="required">
                                <span class="help-block">
                                    <strong>
                                    </strong>
                                </span>
                            </div>
                            <div class="form-group ">
                                <p class="white-text">Any Skill Preferred / कोई कौशल पसंद किया गया</p>
                                <select class="form-control"  id="country" name="idSector" data-validation-required-message="This Is Required" required style="height: 42px;"  required="required">
                                    <option value="0">---Select---</option>
                                    @foreach($sectors as $key=>$value)
                                    <option value="{{$value}}">{{$key}}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    <strong>
                                    </strong>
                                </span>
                            </div>
                            <div class="form-group ">
                                <p class="white-text">Any Comment</p>
                                <textarea name="comment" size="30x2" class="form-control" required="required" placeholder="Enter Comment Here"></textarea>
                                        
                                <span class="help-block">
                                    <strong>
                                    </strong>
                                </span>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop
@section('script')
<script>
    $('#recom').on('submit', function (e) {
        $.ajaxSetup({
            header: $('meta[name="_token"]').attr('content')
        });
        var formData = new FormData($('#recom')[0]);
        $.ajax({
            type: "POST",
            url: "{{url('/recommendation') }}",
            processData: false,
            contentType: false,
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data[Object.keys(data)[0]] === 'SUCCESS') {
                    setTimeout(function () {
                        swal({
                            title: "Thank You For Recommendation",
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

                    $('#formerrors').html(errorHtml);
                    
                }
            }
        });
        return false;
    });
</script>
@stop
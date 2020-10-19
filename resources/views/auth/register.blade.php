@extends('layouts.maincm')
@section('content')
<style>
    .navbar-default.navbar-fixed-top {
        padding: 10px 0;
        background-color: #1cb0b7;
    }
    .white-text{color:#090169!important}
    .navbar-right{display: none;}

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
                            <br><br><br><strong style="color:white; font-size: 30px;" > PLEDGE ON WORLD YOUTH SKILL DAY</strong>
                            <p class="white-text" style="margin: 0px;padding: 0px;font-size:20px;margin:10px;"> World Youth Skills Day -15<sup>th</sup> July 2019 </p>
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
                        <div class="col-md-7" class="cmtext">
                            <p class="white-text" style="text-align:justify;font-size: 24px;line-height: 61px;">विश्व युवा कौशल दिवस पर आज 15<sup>th</sup> जुलाई,2019 को मैं यह प्रतिज्ञा लेता हूँ की मैं स्वयं के हितों के साथ अपने प्रदेश के हितों की पहचान करूँगा एवं भारत सरकार और हरियाणा सरकार द्वारा कार्यान्वित विभिन्न कौशल विकास योजनाओं में अधिकतम युवाओं की रूचि बढ़ाने हेतु कार्यरत रहूंगा।</p>
                            <p class="white-text" style="text-align:justify;font-size: 24px;line-height: 61px;"> मैं कौशल विकास की आवश्यकता पर प्रदेश के नागरिकों को जागरूक करने के लिए सदैव तत्पर रहूँगा।</p>
                            <p class="white-text" style="text-align:center;font-size: 24px;line-height: 61px;"> जय हिन्द ! जय हरियाणा !</p> 
                            <a id="submit">                                    
                                <div class="plan-signup">
                                    <p style='font-size: 28px;font-weight: bold;color: white;text-align:center;font-family: serif;'> I-Pledge
                                    <!--<span style="font-size: 12px;text-align: center;color: white;">(link to registration form)</span></p>-->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 text-center" style="margin-top:20px">
                            <img src="{{asset('dist/images/cm.jpeg')}}" style="height:495px;">
                        </div>                        
                    </div>
                </div>
            </div>

        </div>

        <!-- End Pricing Table Section 


        <section id="contact" class="contact">
        <!-- Clients Aside -->
        <section id="partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <p class="white-text" style="font-size: 50px;color:#f5170b!important">Our Honourable Partners</p>
                            {{-- <strong>Our Honorable Partners</strong> --}}
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

                $('#submit').on('click', function (e) {
                    setTimeout(function () {
                        swal({
                            title: "धन्यवाद ! \n\n माननीय मुख्यमंत्री महोदय जी",
                            text: "आपके मूल्यवान समय का हरियाणा स्किल डिवेलॅप्मॅन्ट मिशन सहृदय अभिनन्दन करता है।",
                            imageUrl: "{{asset('dist/images/hands.jpg')}}",
                            confirmButtonText: "आगे बढ़े"
                        }, function () {
                            window.location = "{{url('/cm')}}";
                        }, 1000);
                    });

                });
            });
        </script>
        @stop
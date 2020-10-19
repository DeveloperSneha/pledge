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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title text-center">
                    <!--  <h3>Contact With Us</h3> -->
                    <div class="white-text"><br><br>
                        <font size=20 color=blue font-family=Oswald><strong>W</strong></font><font size=10 color=white ><strong>elcom </strong></font><font size=20 color=red font-family=Oswald><strong>T</strong></font><font size=20 color=white font-family=Oswald><strong>o &nbsp;</strong></font>
                        <font size=20 color=white><strong>{{$candidates->name}}</strong></font> &nbsp;&nbsp;
                        <font size=20 color=blue font-family=Oswald><strong>D</strong></font><font size=10 color=white ><strong>ash </strong></font><font size=20 color=red font-family=Oswald><strong>B</strong></font><font size=20 color=white font-family=Oswald><strong>oard &nbsp;</strong></font>
                    </div><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12"></div>
            <div class="col-lg-12">
                <div class="row" style="margin-left: 20px;">
                    <div class="col-lg-5 col-md-5">
                        <h2 style="color:black;">Aspiration Tests</h2>
                        <p style="color:black;">Aspiration Test measures the seriousness & ambition of an individual in pursuing employment. It is especially catered to students from a weaker socio – economic background. This test helps identify candidates who are likely to benefit from further training/education. </p>
                        <br><br>
                        <p style="color:black;">इस टेस्ट के माध्यम से यह अनुमान लगाया जा सकता है की प्रतिभागी के कौशल परीक्षण से लांभावित होने की संभावना कितनी रहेगी। </p>
                        <br><br><br>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x" style="font-size: 6em"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <p style="text-align:center;font-size: 34px;font-family: serif;line-height: 49px;">Aspiration Test</p>
                                        <i class="fa fa-list" style="font-size:20px;"></i>  47 Questions
                                        <i class="fa fa-clock-o" style="font-size:20px;"></i>  25 Mins
                                        <div class="huge" style="font-size: 30px"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/test/Aspiration Test')}}" target="_blank">
                                <div class="panel-footer">
                                    <span class="pull-left">@if($candidates->resultUrl1)Completed @elseif($candidates->testUrl) Partial Completed @else Click Here To Start Test @endif</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-md-offset-1">
                        <h2 style="color:black;">BARO Career Interests Test</h2>
                        <p style="color:black;">Baro Career Interest Test is based on John Hollande’s RIASEC model Dr. Holland's theory proposes that there are six broad areas into which all careers can be classified. This test indicates interest in the business area of the participant</p>
                        <br><br><br>
                        <p style="color:black;">BARO टेस्ट विश्वप्रसिद्ध मनोविज्ञानी डॉ. होलांदे के सिद्धांतों पे आधारित है जिसमे कुल 6 क्षेत्रों में सभी व्यवसायों को विभाजित किया गया है। इस टेस्ट से प्रतिभागी की व्यवसाय क्षेत्र में रूचि के संकेत मिलते हैं। </p>
                        <br><br>
                        <div class="panel panel-green" style="border-color:#bf0000">
                            <div class="panel-heading" style="background: #bf0000;color: white;">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x" style="font-size: 6em"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <p style="text-align:center;font-size: 32px;font-family: serif;line-height: 49px;">Career Interests Test</p>
                                        <i class="fa fa-list" style="font-size:20px;"></i>  72 Questions
                                        <i class="fa fa-clock-o" style="font-size:20px;"></i>  15 Mins
                                        <div class="huge" style="font-size: 30px"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/test/BARO VI')}}" target="_blank">
                                <div class="panel-footer">
                                    <span class="pull-left">@if($candidates->resultUrl2)Completed @elseif($candidates->testUrl1) Partial Completed @else Click Here To Start Test @endif</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        @if(($candidates->resultUrl1 == null)&&($candidates->resultUrl2 == null))
        <div class="col-md-12" id="promte" style="margin-bottom:50px;margin-left:28px;margin-right:38px;">
            <p style='font-size: 20px;font-weight: bold;color: white;text-align:center;padding-top: 0px;margin: 15px;'> <a href="{{ url('/promote')}}" class="btn-system btn-small" style="color: white;">मैं उपरोक्त टेस्ट्स अभी नही देना चाहता (Skip Tests)</a></p>
        </div><br><br>
        @endif
        @if((!empty($candidates->resultUrl2)) || (!empty($candidates->resultUrl1)))
        <div class="row" style=" margin-top:10px;"><br>
        	<h2 style="text-align:center;color:black">Your Test Result</h2>
        	<br><br>
            @if(!empty($candidates->resultUrl1))
            <div class="col-lg-5 col-md-5" style="margin-left: 20px;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <a href="{{$candidates->resultUrl1}}" target="_blank">
                                <div class="col-xs-3">
                                        <i class="fa fa-id-card-o fa-5x" style="font-size: 6em;color:white"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <p style="text-align:center;font-size: 27px;font-family: serif;line-height: 49px;color: white;">Download Aspiration Test Result <i class="fa fa-arrow-circle-down"></i></p>
                                </div>
<!--                            <div class="col-xs-3">
                                <i class="fa fa-calendar fa-5x" style="font-size: 4em"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <p style="text-align:center;font-size: 27px;font-family: serif;line-height: 49px;">Download Aspiration Test Result</p>
                                <div class="huge" style="font-size: 30px"></div>
                            </div>-->
                            </a>
                        </div>
                    </div>                        
                </div>                    
            </div>
            @endif
            @if(!empty($candidates->resultUrl2))
            <div class="col-lg-5 col-md-5 col-md-offset-1">
                <div class="panel panel-green" style="border-color:#bf0000">
                    <div class="panel-heading" style="background: #bf0000;color: white;">
                        <div class="row">
                            <a href="{{$candidates->resultUrl2}}" target="_blank">
                                <div class="col-xs-3">
                                    <i class="fa fa-id-card-o fa-5x" style="font-size: 6em;color:white"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <p style="text-align:center;font-size: 27px;font-family: serif;line-height: 49px;color: white;">Download Career Interests Test Result <i class="fa fa-arrow-circle-down"></i></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endif
        @if(($candidates->resultUrl1 != null) || ($candidates->resultUrl2 != null))
        <div class="col-md-11" id="promte" style="margin-bottom:50px;margin-left:18px;margin-top: 10px;">
            <p style='font-size: 20px;font-weight: bold;color: white;text-align:center;padding-top: 0px;margin: 15px;'> <a href="{{ url('/promote')}}" class="btn-system btn-small" style="color: white;">I Promote (Way forward)</a></p>
        </div><br><br>
        @endif
    </div>
</section>
@stop
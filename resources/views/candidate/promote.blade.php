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
<section id="page-top"></section>
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title text-center">
                    <!--  <h3>Contact With Us</h3> -->
                    <div class="white-text"><br><br>
                        <font size=20 color=blue font-family=Oswald><strong>D</strong></font><font size=10 color=white ><strong>ash </strong></font><font size=20 color=red font-family=Oswald><strong>B</strong></font><font size=20 color=white font-family=Oswald><strong>oard &nbsp;</strong></font>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" style="margin:20px;">
                <h2 class="white-text" style="text-align:center;font-size:30px;">I-Promote</h2>
            </div>
            <div class="col-lg-12">
                <div class="row" style="margin-bottom:40px;">
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <center><img src="{{ asset('dist/images/user-manual.png')}}"></center><br>
                                        <p class="white-text" style="text-align:center;font-size: 19px;font-family: serif;"><a href="{{url('enrollment')}}"><span style="font-size:16px;line-height: 23px;" class="white-text">I want to enroll in a Skill Development Program</span><br><br><span class="white-text" style="font-size:14px;line-height: 23px;">मैं एक कौशल विकास कार्यक्रम के लिए नामांकन करना चाहता हूं</span></a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <center><img src="{{ asset('dist/images/find_trainer.png')}}"></center><br>
                                        <p class="white-text" style="text-align:center;font-size: 17px;font-family: serif;"><a href="{{url('recommendation')}}"><span style="font-size:16px;line-height: 23px;" class="white-text">I want to recommend someone for a Skill Development Program</span><br><br><span class="white-text" style="font-size:14px;line-height: 23px;"> मैं एक कौशल विकास कार्यक्रम के लिए किसी की सिफारिश करना चाहता हूं</span></a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-green" style="border-color:#bf0000">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <center><img src="{{ asset('dist/images/knowledge_bank.png')}}"></center><br>
                                        <p class="white-text" style="text-align:center;font-size: 17px;font-family: serif;"><a href="{{url('suggestion')}}"><span style="font-size:16px;line-height: 23px;" class="white-text">I have an idea to improve Skill Development Program</span><br><br><span class="white-text" style="font-size:14px;line-height: 23px;">मेरे पास कौशल विकास कार्यक्रम में सुधार करने का विचार है</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-green" style="border-color:#bf0000">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <center style="margin-bottom:15px;"><img src="{{ asset('dist/images/summary.png')}}"></center><br>
                                        <p class="white-text" style="text-align:center;font-size: 24px;font-family: serif;line-height: 24px;"><a href="https://saksham.hsdm.org.in/candidate/register" target="_blank"><span style="font-size:17px;line-height: 23px;" class="white-text">I am looking for a Job</span><br><br><span class="white-text" style="font-size:15px;line-height: 23px;">मै नौकरी ढूंढ रहा हूँ</span><br> </a></p><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @stop

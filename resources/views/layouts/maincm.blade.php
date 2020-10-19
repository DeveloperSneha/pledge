<!DOCTYPE html>
<html>
    @include('layouts.partials.head')
    <body>
        <div class="wrapper1">
            @include('layouts.partials.nav')
            <!-- Content Wrapper. Contains page content -->
            <div class="whole_content_wrap">
                <!-- Content Header (Page header) -->
                <!--<section class="content-header">
                    
                </section>-->

                <!-- Main content -->
                <section class="content1">
                    @if(session()->has('message'))
                    <div class="alert alert-info">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                    @endif
                    @include('flash::message')
                    {{--     @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    @yield('content')
                    <div id="loader">
                        <div class="spinner">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
                <footer class="style-1" style="margin-top: 0px !important;">
                    <div class="container">
                        <div class="row">
                            <a class="navbar-brand page-scroll" href="#page-top"><p>Haryana Skill Development Mission</p></a>
<!--                            <div class="col-md-4 col-xs-12">
                                <span class="copyright" style="color:text;">Visitor Counter</a></span>
                                <span style="text-align:center;"><img src="https://counter4.wheredoyoucomefrom.ovh/private/freecounterstat.php?c=xwhm2ccetftlkw5au38tqamprzh8ehm3" border="0" title="page counter" alt="page counter"></span>
                            </div>-->
<!--                            <div class="col-md-4 col-xs-12">
                                <div class="footer-social text-center">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="footer-link">
                                    <ul class="pull-right">
                                        <li><a href="#" style="color:white;">Privacy Policy</a>
                                        </li>
                                        <li><a href="#" style="color:white;">Terms of Use</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </footer>
        </div>
        <!-- /.content-wrapper -->    
    </div>
<!-- ./wrapper -->
@include('layouts.partials.script')
@yield('script')
</body>
</html>

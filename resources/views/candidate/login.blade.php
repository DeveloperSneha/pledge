@extends('layouts.main')
@section('content')
<style>
    .navbar-default.navbar-fixed-top {
    padding: 10px 0;
    background-color: #1cb0b7;
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
                    
                        <form action="{{ route('candidate.login.submit')}}" method="POST"> 
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4" style="padding: 14px;text-align: center;">
                                    <div class="white-text" style="margin-bottom: 55px;">
                                        <font size=10 color=blue font-family=Oswald><strong>C</strong></font><font size=7 color=white ><strong>andidate &nbsp;</strong></font> 
                                        <font size=10 color=red font-family=Oswald><strong>L</strong></font><font size=7 color=white ><strong>ogin &nbsp;</strong></font>

                                    </div>
                                    <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
                                        <p class="white-text">User Name *</p>
                                        <input type="text" class="form-control" name="mobile" placeholder="Your mobile number">
                                        <span class="help-block">
                                            <strong>
                                                @if($errors->has('mobile'))
                                                <p>{{ $errors->first('mobile') }}</p>
                                                @endif
                                            </strong>
                                        </span>
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <p class="white-text">Your Password *</p>
                                        <input type="password" class="form-control" placeholder="Your date of birth (ddmmyyyy)*" name="password">
                                        <span class="help-block">
                                            <strong>
                                                @if($errors->has('password'))
                                                <p>{{ $errors->first('password') }}</p>
                                                @endif
                                            </strong>
                                        </span>
                                    </div>
                                    @if(session()->has('msg'))
                                    <div class="alert alert-success">
                                        {{ session()->get('msg') }}
                                    </div>                                      
                                    @endif
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 text-center" style="margin-bottom: 60px;">

                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <a class="btn btn-link" href="{{ route('admin.login') }}">
                                    Admin Login
                                </a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@stop
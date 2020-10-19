    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><p> World Youth Skills Day 2019</p></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!--  <li>
                       <a class="page-scroll" href="#feature">What We Do</a>
                   </li> -->
                    <!-- <li>
                         <a class="page-scroll" href="#portfolio">Portfolio</a>
                     </li> 
                     <li>
                         <a class="page-scroll" href="#about-us">About</a>
                     </li> -->
                    <!--<li>
                        <a class="page-scroll" href="#service">Schemes</a>
                    </li> -->
                    <!-- <li>
                         <a class="page-scroll" href="#team">Team</a>
                     </li> -->
                    @if (\Route::current()->getName() == 'home')
                    <li>
                        <a class="page-scroll" href="#testimonial">LEADERSHIP MESSAGES</a></p>
                    </li>
                    <li>
                        <a class="page-scroll" href="#pricing">PLEDGE</a>
                    </li>
                    @else
                    <li>
                        <a class="page-scroll" href="{{url('/')}}">LEADERSHIP MESSAGES</a></p>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/cregister')}}">PLEDGE</a>
                    </li>
                    @endif
                    @if (\Route::current()->getName() == 'candidate.login')
                    <li>
                        <a class="page-scroll" href="{{url('/#partner')}}">Partners</a>
                    </li>
<!--                    <li>
                        <a class="page-scroll" href="{{url('/#contact')}}">Contact</a>
                    </li>-->
                    @else 
                    <li>
                        <a class="page-scroll" href="#partner">Partners</a>
                    </li>
<!--                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>-->
                    @endif
                    @if(Auth::guard('candidate')->check())
                    <li>
                        <a href="{{ url('promote') }}">Promote</a>                        
                    </li>
                    <li>
                        <a href="{{ url('candidate') }}">Dashboard</a>                        
                    </li>
                    @endif
                    <li>
                        @if(Auth::guard('candidate')->check())
                            <a href="{{ route('candidate.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp; Logout
                            </a>
                            <form id="logout-form" action="{{ route('candidate.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                        @else
                            <a class="page-scroll" href="{{ url('/clogin')}}" target="_blank"><font size=2 color=red><strong>Login</strong></font></a>
                        @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Navigation -->
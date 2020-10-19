<header class="main-header navbar  navbar-fixed-top head-top" >
    <!-- Logo -->
    <a href="{{ url('/')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini" style="color:white !important;font-size:15px;"><b>WYSD</b></span>
        <span class="logo-lg" style="color:white !important;font-size:12px;"><b>WORLD YOUTH SKILL DAY 2019</b></span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <i class="fa fa-user"></i>&nbsp;&nbsp;{{ Auth::guard('web')->user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp; Logout
                            </a>

                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <div class="image pull-left">
                <img src="{{asset('/dist/images/avatar5.png')}}" class="img-circle" alt="User Image">
            </div>
                    <a class="info" style="color:#00b5d0">
                <h4>Welcome</h4>
            </a>
        </div>
        <!-- Sidebar user panel -->
        <centre><br></centre>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ checkActive(['admin'])}}">
                <a href="{{ url('/admin')}}">
                    <i class="fa fa-tachometer"></i> <span> Dashboard</span>
                </a>
            </li>
            <li class="{{ checkActive(['statewise'])}}">
                <a href="{{ url('/statewise')}}">
                    <i class="fa fa-thumbs-up"></i> <span>State Wise Pledge</span>
                </a>
            </li>
            <li class="{{ checkActive(['districtwise'])}}">
                <a href="{{ url('/districtwise')}}">
                    <i class="fa fa-globe"></i> <span> District Wise Pledge</span>
                </a>
            </li>
            <li class="{{ checkActive(['pledges'])}}">
                <a href="{{ url('/pledges')}}">
                    <i class="fa fa-user"></i> <span> Candidates</span>
                </a>
            </li>
            <li class="{{ checkActive(['suggest'])}}">
                <a href="{{ url('/suggest')}}">
                    <i class="fa fa-book"></i> <span> Suggestion</span>
                </a>
            </li>
            <li class="{{ checkActive(['recommend'])}}">
                <a href="{{ url('/recommend')}}">
                    <i class="fa fa-th"></i> <span> Recommendation</span>
                </a>
            </li>
            <li class="{{ checkActive(['enroll'])}}">
                <a href="{{ url('/enroll')}}">
                    <i class="fa fa-plus-square"></i> <span> Enrollment</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
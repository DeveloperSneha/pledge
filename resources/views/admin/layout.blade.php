<!DOCTYPE html>
<html>
    @include('layouts.partials.head')
    <body class="hold-transition skin-green-light sidebar-mini" >
        <div class="wrapper">
            @include('admin.nav')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
<!--                <section class="content-header">
                    
                </section>-->

                <!-- Main content -->
                <section class="content">
                    @include('flash::message')
                    @if(session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                    
                    @endif
                    
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
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
<!--    <center>-->
        <strong>@Haryana Skill Development Mission (HSDM)</strong>
<!--    </center>-->
    </footer>

</div>
<!-- ./wrapper -->
@include('layouts.partials.script')
@yield('script')
</body>
</html>

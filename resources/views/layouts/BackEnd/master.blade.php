<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

	

    <!-- Bootstrap Core CSS href="{{URL::asset('css/responsive.css')}}"-->
    <link href="{{URL::asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('admin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('admin/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Toastr CSS -->
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

</head>

<body>

    <div id="soft-all-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        	@include('Admin.inc.header')
            <!-- /.navbar-top-links -->

            @include('Admin.inc.leftmenu')
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @yield('mainContent')
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('admin/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::asset('admin/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ URL::asset('admin/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('admin/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ URL::asset('admin/data/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('admin/dist/js/sb-admin-2.js') }}"></script>

    <!-- Toastr JS -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ env('APP_NAME').' | '. $title }}</title>
    @section('css')
	    <!-- Bootstrap Core CSS -->
	    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

	    <!-- MetisMenu CSS -->
	    <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">

	    <!-- Timeline CSS -->
	    <link href="{{asset('css/timeline.css')}}" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="{{asset('css/startmin.css')}}" rel="stylesheet">

	    <!-- Morris Charts CSS -->
	    <link href="{{asset('css/morris.css')}}" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    @show
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        @include('menus.topLeft')
        

        <!-- Top Navigation: Right Menu -->
        @include('menus.topRight')

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
            @include('menus.searchbar')        
                    <!-- INIZIO MENU -->
		    @include('menus.mainMenu')
                    <!-- FINE MENU -->
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ $page_title }}</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
	    @yield('main')
	    	<!-- ... Your content ends here ... -->
        </div>
    </div>

</div>
@section('script')
	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="{{asset('js/metisMenu.min.js')}}"></script>

	<!-- Custom Theme JavaScript -->
	<script src="{{asset('js/startmin.js')}}"></script>
@show
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="Daffodil International University" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{asset('assets/backend/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/backend/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/backend/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{asset('assets/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('assets/backend/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/backend/css/material_style.css')}}">
	<!-- Theme Styles -->
	<link href="{{asset('assets/backend/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('assets/backend/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/backend/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/backend/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/backend/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	{{-- <link rel="shortcut icon" href="{{asset('assets/backend/img/favicon.ico')}}" /> --}}
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
	@stack('css')
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		@include('layouts.backend.partials.navbar')
		<!-- end header -->
		<!-- start color quick setting -->
		@include('layouts.backend.partials.color-settings')
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			@include('layouts.backend.partials.sidebar')
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">@yield('title')</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{route('home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">@yield('title')</li>
							</ol>
						</div>
					</div>
					@yield('content')
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			@include('layouts.backend.partials.chatbar')
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		@include('layouts.backend.partials.footer')
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="{{asset('assets/backend/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/popper/popper.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
	<!-- Common js-->
	<script src="{{asset('assets/backend/js/app.js')}}"></script>
	<script src="{{asset('assets/backend/js/layout.js')}}"></script>
	<script src="{{asset('assets/backend/js/theme-color.js')}}"></script>
	<!-- Material -->
	<script src="{{asset('assets/backend/plugins/material/material.min.js')}}"></script>
	<!-- end js include path -->

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
	@stack('js')

</body>

</html>
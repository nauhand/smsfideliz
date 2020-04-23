<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>DASHBOARD | FIDELIZ SMS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="#">
	<link rel="icon" href="{{ asset('fidelizsms/files/assets/images/fideliz1sms.png') }}" type="image/x-icon">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="">
	<meta name="author" content="#">
	<link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/bower_components/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/bower_components/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/bower_components/datedropper/css/datedropper.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/themify-icons/themify-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/icofont/css/icofont.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/feather/css/feather.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/css/jquery.mCustomScrollbar.css') }}">
	@toastr_css

</head>

<body>

	@include('layouts.loader')

	<div id="pcoded" class="pcoded">
	    <div class="pcoded-overlay-box"></div>
	    <div class="pcoded-container navbar-wrapper">

	        @include('layouts.horizontal-nav')

	        <div class="pcoded-main-container">
	            <div class="pcoded-wrapper">

	                @include('layouts.vertical-nav')

	                @yield('content')

	            </div>
	        </div>
	    </div>
	</div>

</body>

<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/assets/pages/advance-elements/moment-with-locales.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/datedropper/js/datedropper.min.js') }}"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/ckeditor/ckeditor.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/chart/echarts/js/echarts-all.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next/js/i18next.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/user-profile.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/js/pcoded.min.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/js/vartical-layout.min.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}" type="19d25c6e30a8cf6e3cbb84f9-text/javascript"></script>
<script type="19d25c6e30a8cf6e3cbb84f9-text/javascript" src="{{ asset('fidelizsms/files/assets/js/script.js') }}"></script>

<script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="19d25c6e30a8cf6e3cbb84f9-|49" defer=""></script>
@toastr_js
@toastr_render

</html>
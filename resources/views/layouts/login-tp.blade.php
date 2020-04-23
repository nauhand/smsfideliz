<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Connexion | FIDELIZ SMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <link rel="icon" href="{{ asset('fidelizsms/files/assets/images/fideliz1sms.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="#">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" {{ asset('fidelizsms/files/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/css/style.css') }}">
    @toastr_css

</head>

<body class="fix-menu">
    
    @yield('content')

</body>

<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next/js/i18next.min.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
<script type="a19a292cbbb0419d98afd23f-text/javascript" src="{{ asset('fidelizsms/files/assets/js/common-pages.js') }}"></script>
<script src="{{ asset('fidelizsms/files/assets/js/rocket-loader.min.js') }}" data-cf-settings="a19a292cbbb0419d98afd23f-|49" defer=""></script>
@toastr_js
@toastr_render

</html>
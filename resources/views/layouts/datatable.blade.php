<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>DASHBOARD | FIDELIZ SMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <link rel="icon" href="{{ asset('fidelizsms/files/assets/images/fideliz1sms.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="#">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/feather/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/css/jquery.mCustomScrollbar.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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

<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/}files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/data-table/js/jszip.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/data-table/js/pdfmake.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/data-table/js/vfs_fonts.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/data-table/extensions/key-table/js/dataTables.keyTable.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next/js/i18next.min.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/data-table/extensions/key-table/js/key-table-custom.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/js/pcoded.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/js/vartical-layout.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}" type="7a7fa98a142edbdad3e24ddf-text/javascript"></script>
<script type="7a7fa98a142edbdad3e24ddf-text/javascript" src="{{ asset('fidelizsms/files/assets/js/script.js') }}"></script>
@toastr_js
@toastr_render

@include('layouts.scripts')

@yield('loader')

</html>
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
    <meta name="author" content="#">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" {{ asset('fidelizsms/files/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/icon/feather/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/css/bootstrap-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fidelizsms/files/assets/pages/chart/radial/css/radial.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fidelizsms/files/assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <style>

        #custom-button {
          padding: 10px;
          color: white;
          background-color: #009578;
          border: 1px solid #000;
          border-radius: 5px;
          cursor: pointer;
        }

        #custom-button:hover {
          background-color: #00b28f;
        }

        #custom-text {
          margin-left: 10px;
          font-family: sans-serif;
          color: #aaa;
        }

    </style>
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

<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/bower_components/chart.js/js/Chart.js') }}"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/widget/amchart/amcharts.js') }}" type="5aaa5f89c516d98bbdd768cf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/widget/amchart/serial.js') }}" type="5aaa5f89c516d98bbdd768cf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/pages/widget/amchart/light.js') }}" type="5aaa5f89c516d98bbdd768cf-text/javascript"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('fidelizsms/files/assets/js/pcoded.min.js') }}" type="5aaa5f89c516d98bbdd768cf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}" type="5aaa5f89c516d98bbdd768cf-text/javascript"></script>
<script src="{{ asset('fidelizsms/files/assets/js/vartical-layout.min.js') }}" type="5aaa5f89c516d98bbdd768cf-text/javascript"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/assets/pages/dashboard/analytic-dashboard.min.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/files/assets/js/script.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/js/select2.min.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/js/toastr.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/js/bootstrap-select.min.js') }}"></script>
<script type="5aaa5f89c516d98bbdd768cf-text/javascript" src="{{ asset('fidelizsms/js/bootstrap-select.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


<script>

    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function() {
      realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function() {
      if (realFileBtn.value) {
        customTxt.innerHTML = realFileBtn.value.match(
          /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
      } else {
        customTxt.innerHTML = "No file chosen, yet.";
      }
    });

</script>

<script type="text/javascript"> 
    const event = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    let date = event.toLocaleDateString(undefined, options);

        document.querySelector('.output').textContent = date;

    function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
    }

    $("#inputGroupFile01").change(function(){
      $("#custom-file-label").text(this.files[0].name);
    });
</script>

<script>

    $(document).ready(function() {

        $('select').selectpicker();
        //$('.my-select').selectpicker();
        
        });


</script>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

@include('layouts.scripts')

@yield('loader')

</html>
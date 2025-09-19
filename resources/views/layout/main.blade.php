<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<title>Future Boos Myanmar Co.,Ltd</title>
<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">



  <!-- Main Header-->
    @include('layout.header')
  <!--End Main Header -->

  <!-- Banner Section -->
    @include('layout.slider')
  <!-- End Banner Section -->

  

  <!-- Main Footer -->
        @include('layout.footer')
  <!--End Main Footer -->
        @yield('content')
</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script data-cfasync="false" src="{{asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/knob.js')}}"></script>
<script src="{{asset('assets/js/gsap.min.js')}}"></script>
<script src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('assets/js/splitType.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
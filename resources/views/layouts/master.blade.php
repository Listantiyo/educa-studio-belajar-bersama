<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/metismenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/editor.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css.map')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.scss')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/jquerysctipttop.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css.map')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.scss')}}">


    

</head>
<body>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    <div>
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layouts.footer')

    <!-- Links of JS File -->
    <script src="{{asset('template/pify/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/jquery.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/meanmenu.min.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/ajaxchimp.min.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/metismenu.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/editor.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/like-dislike.min.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/custom.js')}}"></script>
    <script src="{{asset('template/pify/assets/js/font-awesome-5.js')}}"></script>
</body>
</html>
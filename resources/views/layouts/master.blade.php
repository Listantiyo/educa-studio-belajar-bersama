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
    {{-- <link rel="stylesheet" href="{{asset('template/pify/assets/css/font-awesome.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/editor.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css.map')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.scss')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/jquerysctipttop.css')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css.map')}}">
    <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.scss')}}">  
    <script src="https://kit.fontawesome.com/7f8292fccf.js" crossorigin="anonymous"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

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
    {{-- <script src="{{asset('template/pify/assets/js/font-awesome-5.js')}}"></script> --}}

     {{-- bootstarp --}}
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <script>
 
         
         $('.owl-carousel').owlCarousel({
         loop:true,
         margin: 10,
         nav: true,
         navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 3
             },
             1000: {
                 items: 3
             }
         }
     });
     </script>
    
</body>
</html>
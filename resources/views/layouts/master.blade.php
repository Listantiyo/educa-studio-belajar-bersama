<!doctype html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
		<link rel="stylesheet" href="{{asset('pify/assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/remixicon.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/meanmenu.min.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/metismenu.min.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/editor.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('pify/assets/css/responsive.css')}}">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>Pify - Social Questions & Answers HTML Template</title>
		<style>
			/* navbar */
			.navbar-area{
				padding-top: 0px;
				padding-bottom: 0px;
			}
			.navbar-brand img{
				max-width: 69%;
			}
			.desktop-nav .navbar .others-options ul li .search-box .form-control
			{
				height: 2.7rem !important;
    			width: 20rem;
				margin-top:3%; 
			}
			/* form-radius */
			.global-radius{
				border-radius:0.2rem !important; 
			}
		</style>
		{{-- @yield('style') --}}

    </head>

    <body>
		<!-- Start Preloader Area -->
		{{-- <div class="preloader" id="loader-style">
			<div class="preloader-wrap">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div> --}}
		<!-- End Preloader Area -->
		
		<!-- Start Navbar Area --> 
        @include('layouts.navbar')
		<!-- End Navbar Area -->
		@yield('banner')

		<div>
			<div class="main-content-area ptb-100">
				<div class="container">
					<div class="row">
						@include('layouts.left_sidebar')

						<div class="col-lg-6" id="app">
       						@yield('content')		
						</div>

						@include('layouts.right_sidebar')				
					</div>
				</div>
			</div>
		</div>
		<!-- End Mail Content Area -->

		<!-- Start Footer Area -->
        @include('layouts.footer')
		<!-- End Footer Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Links of JS File -->
		<script src="{{asset('vue/vue.global.js') }}"></script>
        <script src="{{asset('pify/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('pify/assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('pify/assets/js/meanmenu.min.js')}}"></script>
		<script src="{{asset('pify/assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('pify/assets/js/form-validator.min.js')}}"></script>
		<script src="{{asset('pify/assets/js/contact-form-script.js')}}"></script>
		<script src="{{asset('pify/assets/js/ajaxchimp.min.js')}}"></script>
		<script src="{{asset('pify/assets/js/metismenu.js')}}"></script>
		<script src="{{asset('pify/assets/js/editor.js')}}"></script>
		<script src="{{asset('pify/assets/js/like-dislike.min.js')}}"></script>
		<script src="{{asset('pify/assets/js/custom.js')}}"></script>

		@stack('scripts')
    </body>
</html>
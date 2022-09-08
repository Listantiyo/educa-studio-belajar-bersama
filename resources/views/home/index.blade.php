@extends('layouts.master')   

@section('content')

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

<div id="app">
	{{-- <p v-for="quest in quest">
		@{{quest}}
	</p> --}}
		<!-- Start Banner Area -->
		{{-- <div class="banner-area">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner-content">
							<h1>Pify</h1>
							<h3>Share & grow the world's <span>knowledge</span>!</h3>
							<p>We want to connect with people who will share their knowledge from one person to another.</p>
							<a href="user.html" class="default-btn">
								Create a free team
							</a>
						</div>
					</div>

					<div class="col-lg-6 pe-0">
						<div class="banner-img">
							<img src="{{asset('pify/assets/images/banner/banner-img.png')}}" alt="Image">
							<img src="{{asset('pify/assets/images/banner/shape-1.png" alt="Image" class="s')}}hape shape-1">
							<img src="{{asset('pify/assets/images/banner/shape-2.png" alt="Image" class="s')}}hape shape-2">
							<img src="{{asset('pify/assets/images/banner/shape-3.png" alt="Image" class="s')}}hape shape-3">
							<img src="{{asset('pify/assets/images/banner/shape-4.png" alt="Image" class="s')}}hape shape-4">
							<img src="{{asset('pify/assets/images/banner/shape-5.png" alt="Image" class="s')}}hape shape-5">
							<img src="{{asset('pify/assets/images/banner/shape-6.png" alt="Image" class="s')}}hape shape-6">
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Banner Area -->

		<!-- Start Mail Content Area -->
		<div class="main-content-area ptb-100">
			<div class="container">
				<div class="row">
                    {{-- sidebar start --}}
                    @include('dashboard.left_sidebar')
                    {{-- sidebar end --}}

                    {{-- content --}}
                    @include('dashboard.content')
                    {{-- content end --}}

                    {{-- right sidebar start --}}
                    @include('dashboard.right_sidebar')
                    {{-- right sidebar end --}}
				</div>
			</div>
		</div>
</div>
		<!-- End Mail Content Area -->

		<!-- Start Footer Area -->
		{{-- <div class="footer-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget style-two">
							<a href="index.html">
								<img src="{{asset('pify/assets/images/logo.png')}}" alt="Image">
							</a>

							<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Pellentesque in ipsum id orci porta dapibus.</p>
						</div>
					</div>

					<div class="col-lg-2 col-sm-6">
						<div class="single-footer-widget style-two ml-15">
							<h3>Company</h3>

							<ul class="import-link">
								<li>
									<a href="about.html">About us</a>
								</li>
								<li>
									<a href="contact-us.html">Contact us</a>
								</li>
								<li>
									<a href="blog.html">Blog</a>
								</li>
								<li>
									<a href="user.html">User</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2 col-sm-6">
						<div class="single-footer-widget style-two">
							<h3>Explore</h3>

							<ul class="import-link">
								<li>
									<a href="ask-questions.html">Ask question</a>
								</li>
								<li>
									<a href="faq.html">FAQs</a>
								</li>
								<li>
									<a href="privacy-policy.html">Privacy policy</a>
								</li>
								<li>
									<a href="terms-conditions.html">Terms & Conditions</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2 col-sm-6">
						<div class="single-footer-widget style-two">
							<h3>Follow us</h3>

							<ul class="import-link">
								<li>
									<a href="https://www.facebook.com/" target="_blank">Facebook</a>
								</li>
								<li>
									<a href="https://www.instagram.com/" target="_blank">Instagram</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/" target="_blank">Linkedin</a>
								</li>
								<li>
									<a href="https://www.twitter.com/" target="_blank">Twitter</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget style-two">
							<h3>Contact Us</h3>

							<ul class="address-link">
								<li>
									<span>Call:</span>
									<a href="tel:+1-719-504-1984">+1 719-504-1984</a>
								</li>
								<li>
									<span>Email:</span>
									<a href="mailto:pify@gmail.com">pify@gmail.com</a>
								</li>
								<li>
									<span>Address:</span>
									7200 E Dry Creek Rd C104, Centennial, CO 80112, United States
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-shape">
				<img src="{{asset('pify/assets/images/footer-shape.png')}}" alt="Image">
			</div>
		</div> --}}
		<!-- End Footer Area -->



		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->
@endsection

@push('scripts')
  
<script>
	$(document).ready(function () {
		$("#btnn").click(function (e) { 
		e.preventDefault();
		alert()
	});
	});
</script>

<script>
	const { createApp } = Vue

    const vues = createApp({
        data() {
            return {
                quest :'',
                quest_most :'',
                quest_unans :'',
                quest_featur :'',
                classe :'dfgh',
                type  : [],
            }
        },mounted() {

            var classe ='';
            var type ='';
            var dt ='';
            
            $(document).ready(function (e) {
            
                ajax = $.ajax({
                    url: "/api/data/question",
                    success: function(rsp){
                        vues.quest = rsp.question_all ;
                        vues.quest_most = rsp.question_most ;
                        vues.quest_unans = rsp.question_unans ;
                        vues.quest_featur = rsp.question_feature ;
                        
                    }
                 }); 

            });
            
        },methods: {


        },
    }).mount('#app') 
</script>

@endpush
<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
		{{-- <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css')}}"> --}}
		<link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css')}}">
		<link rel="stylesheet" href="{{asset('template/pify/assets/css/register.css')}}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>Pify - Social Questions & Answers HTML Template</title>
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

		<div class="login-area pt-40">
			<div class="container">
				<form class="user-form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
					<div class="row">
						{{-- <div class="col-lg-6 col-sm-6">
							<a href="https://www.google.com/" target="_blank" class="or-login google rounded-pill">
								<i class="bi bi-google"></i>
								Google
							</a>
						</div>
		
						<div class="col-lg-6 col-sm-6">
							<a href="https://www.facebook.com/" target="_blank" class="or-login facebook rounded-pill">
								<i class="bi bi-facebook"></i>
								Facebook
							</a>
						</div>
		
						<div class="col-12">
							<span class="or">Or</span>
						</div> --}}
		
						<div class="col-12">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                
                                    <input id="name" type="text" class="form-control rounded-pill" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>
						</div>

						<div class="col-12">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
                                    <input id="email" type="email" class="form-control rounded-pill" name="email" value="{{ old('email') }}" placeholder="Email" required>
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>
						</div>
		
						<div class="col-12">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                
                                    <input id="password" type="password" class="form-control rounded-pill" name="password" placeholder="Password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>
						</div>

						<div class="col-12">
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control rounded-pill" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
						</div>
		
                        <div class="col-12 pt-1">
                            <div class="login-action">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="terms-conditions.html">Terms of Use</a> and <a href="privacy-policy.html">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>
		
						<div class="col-12">
                            <button type="submit" class="default-btn rounded-pill">
                                Register
                            </button>
                        </div>

		
						<div class="col-12">
                            <p class="create">Already on disilab?  <a href="{{route('login')}}">Login</a></p>  
                        </div>
					</div>
				</form>
			</div>
		</div>

        <!-- Links of JS File -->
        <script src="{{asset('template/pify/assets/js/jquery.min.js')}}"></script>
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
    </body>
</html>

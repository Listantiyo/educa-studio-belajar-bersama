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
		{{-- <link rel="stylesheet" href="{{asset('template/pify/assets/css/style.css')}}"> --}}
		<link rel="stylesheet" href="{{asset('template/pify/assets/css/responsive.css')}}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="{{asset('template/pify/assets/css/login.me.css')}}">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="login-area col-md-12 col-md-offset-2 pt-90">
                <div class="panel panel-default">
    
    
                    <div>
                        <form class="user-form" method="POST" action="{{ route('login') }}">
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
    
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-12">
                
                                    <input id="email" type="email" class="form-control rounded-pill" name="email" value="{{ old('email') }}" placeholder="User name or email" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                    
                                </div>
    
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-12">
    
                                        <input id="password" type="password" class="form-control rounded-pill" name="password" placeholder="Password" required>
    
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                            
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-6">
                                        <div class="login-action">
                                            <span class="forgot-login">
                                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button class="default-btn rounded-pill" type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                                </div>
    
                                <div class="col-12">
                                    <p class="create">Don't have an account? <a href="{{route('register')}}">Sign Up</a></p>  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!-- Links of JS File -->
            <script src="{{asset('template/pify/assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('template/pify/assets/js/bootstrap.bundle.min.js')}}"></script>
            {{-- <script src="{{asset('template/pify/assets/js/meanmenu.min.js')}}"></script> --}}
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


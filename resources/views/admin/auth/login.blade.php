<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Siona Solutions">
	<meta name="robots" content="noindex, nofollow">
	<title>Login - {{config('app.name')}}</title>

	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	@livewireStyles

	<!--[if lt IE 9]>
			<script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
			<script src="{{asset('assets/js/respond.min.js')}}"></script>
		<![endif]-->
</head>

<body class="account-page">

	<div class="main-wrapper">
		<div class="account-content">
			<div class="container">

				<div class="account-logo">
					<a href="admin-dashboard.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
				</div>

				<div class="account-box">
					<div class="account-wrapper">
						<h3 class="account-title">Login</h3>
						<p class="account-subtitle">Access to our dashboard</p>

						<form action="{{route('admin.login')}}" method="post">
							@csrf
							<livewire:email-address-check/> 
							<div class="form-group">
								<div class="row">
									<div class="col">
										<label>Password</label>
									</div>
									<div class="col-auto">
										<a class="text-muted" href="forgot-password.html">
											Forgot password?
										</a>
									</div>
								</div>
								<div class="position-relative">
									<input name="password" class="form-control" type="password" placeholder="Password" id="password">
									<span class="fa fa-eye-slash" id="toggle-password"></span>
								</div>
							</div>
							<div class="form-group text-center">
								<button class="btn btn-primary account-btn" type="submit">Login</button>
							</div>
							<div class="account-footer">
								<p>Don't have an account yet? <a href="register.html">Register</a></p>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>

	 @livewireScripts

	 @include('sweetalert::alert')


</body>

<!-- Mirrored from smarthr.dreamguystech.com/orange/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 02:12:19 GMT -->

</html>
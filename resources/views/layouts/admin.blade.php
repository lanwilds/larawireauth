<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Siona Solutions">
	<meta name="robots" content="noindex, nofollow">
	<title>Dashboard - {{config('app.name')}}</title>

	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!--[if lt IE 9]>
			<script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
			<script src="{{asset('assets/js/respond.min.js')}}"></script>
		<![endif]-->
</head>

<body>

	<div class="main-wrapper">

		<div class="header">

			<div class="header-left">
				<a href="admin-dashboard.html" class="logo">
					<img src="assets/img/logo.png" width="40" height="40" alt="">
				</a>
			</div>

			<a id="toggle_btn" href="javascript:void(0);">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>

			<div class="page-title-box">
				<h3>{{config('app.name')}}</h3>
			</div>

			<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

			<ul class="nav user-menu">

				<li class="nav-item">
					<div class="top-nav-search">
						<a href="javascript:void(0);" class="responsive-search">
							<i class="fa fa-search"></i>
						</a>
						<form action="https://smarthr.dreamguystech.com/orange/search.html">
							<input class="form-control" type="text" placeholder="Search here">
							<button class="btn" type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</li>


				<li class="nav-item dropdown has-arrow flag-nav">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
						<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/us.png" alt="" height="16"> English
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/fr.png" alt="" height="16"> French
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/de.png" alt="" height="16"> German
						</a>
					</div>
				</li>


				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<i class="fa fa-bell-o"></i> <span class="badge rounded-pill">3</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">John Doe</span> added
													new task <span class="noti-title">Patient appointment booking</span>
												</p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-03.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
													changed the task name <span class="noti-title">Appointment booking
														with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-06.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Misty Tison</span>
													added <span class="noti-title">Domenic Houston</span> and <span
														class="noti-title">Claire Mapes</span> to project <span
														class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-17.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span>
													completed task <span class="noti-title">Patient and Doctor video
														conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-13.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
													added new task <span class="noti-title">Private chat module</span>
												</p>
												<p class="noti-time"><span class="notification-time">2 days ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="activities.html">View all Notifications</a>
						</div>
					</div>
				</li>


				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<i class="fa fa-comment-o"></i> <span class="badge rounded-pill">8</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Messages</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-09.jpg">
												</span>
											</div>
											<div class="list-body">
												<span class="message-author">Richard Miles </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur
													adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-02.jpg">
												</span>
											</div>
											<div class="list-body">
												<span class="message-author">John Doe</span>
												<span class="message-time">6 Mar</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur
													adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-03.jpg">
												</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Tarah Shropshire </span>
												<span class="message-time">5 Mar</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur
													adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-05.jpg">
												</span>
											</div>
											<div class="list-body">
												<span class="message-author">Mike Litorus</span>
												<span class="message-time">3 Mar</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur
													adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-08.jpg">
												</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Catherine Manseau </span>
												<span class="message-time">27 Feb</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur
													adipiscing</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="chat.html">View all Messages</a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown has-arrow main-drop">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
						<span>Admin</span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="index-2.html">Logout</a>
					</div>
				</li>
			</ul>


			<div class="dropdown mobile-user-menu">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
						class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="profile.html">My Profile</a>
					<a class="dropdown-item" href="settings.html">Settings</a>
					<a class="dropdown-item" href="index-2.html">Logout</a>
				</div>
			</div>

		</div>


		@include('admin.includes.sidebar')


		<div class="page-wrapper">
			<div class="content container-fluid">
				@yield('content')
			</div>
		</div>
	</div>


	<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>
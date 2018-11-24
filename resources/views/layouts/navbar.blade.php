<!DOCTYPE html>

<html lang="en">

<head>
	<title>TBAR3</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="website help charities">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{ url("/design/card/font.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/card/bootstrap.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/card/card.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/bootstrap4/bootstrap.min.css") }}">
	<link href="{{ url("/design/colo/plugins/font-awesome-4.7.0/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/main_styles.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/responsive.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/mystyle.css") }}">

	<script src="{{ url("/design/colo/js/jquery-3.3.1.min.js") }}"></script>

</head>

<body>

<div class="super_container">

	<header class="header trans_300">

		<div class="main_nav_container">

			<div class="container">

				<div class="row">

					<div class="col-lg-12 text-right">

						<div class="logo_container">

							<img src="{{ url("/design/images/1.jpg") }}">

						</div>

						<nav class="navbar" >

							<ul class="navbar_menu">
								<li><a href="{{url('/about_us')}}">! من نحن</a></li>
								<li><a href="{{url('/register')}}">أنضم الان</a></li>
								<li><a href="{{url('/login')}}">تسجيل الدخول</a></li>
								<li><a href="{{url('/persons')}}">الحالات</a></li>
								<li><a href="{{url('/home')}}">الرئيسية</a></li>
							</ul>

							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li style="margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/home')}}"> الرئيسية</a></li>
				<li style="margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/persons')}}"> الحالات</a></li>
				<li style="margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/login')}}"> تسجيل الدخول</a></li>
				<li style="margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/register')}}">أنضم الان</a></li>
				<li style="margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/about_us')}}"> ! من نحن</a></li>	
			</ul>
				
		</div>
	</div>
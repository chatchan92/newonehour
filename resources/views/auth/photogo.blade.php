<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chanfocus-让更多人看到你的照片</title>

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('resources/views/auth/images/ico.ico')}}" media="screen" >

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

		<!-- Animate.css -->
		<link rel="stylesheet" href="{{asset('resources/views/auth/css/animate.css')}}">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="{{asset('resources/views/auth/css/icomoon.css')}}">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="{{asset('resources/views/auth/css/bootstrap.css')}}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{asset('resources/views/auth/css/magnific-popup.css')}}">
		<!-- Superfish -->
		<link rel="stylesheet" href="{{asset('resources/views/auth/css/superfish.css')}}">

		<link rel="stylesheet" href="{{asset('resources/views/auth/css/style.css')}}">


		<!-- Modernizr JS -->
		<script src="{{asset('resources/views/auth/js/modernizr-2.6.2.min.js')}}"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="{{asset('resources/views/auth/js/respond.min.js')}}"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><img class="img-responsive" src="{{asset('resources/views/auth/images/onehourfocus.png')}}" alt="" style="width:200px;"></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="\index">主页</a>
								</li>
								<li  class="active"><a href="\photo">摄影师补全计划</a></li>
								<li><a href="\about_me">关于我</a></li>
								<li><a href="\login">@if(Auth::check()){{Auth::user()->name}}@else注册/登录@endif</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>

		<div class="fh5co-hero fh5co-hero-2">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(http://p1.bqimg.com/1949/403f9025256187d5.jpg);">
				<div class="desc animate-box">
					<h2>摄影师补全计划</h2>
					<span>Chanfocus---需要你的照片</a></span>
				</div>
			</div>

		</div>
		<!-- end:header-top -->
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						
						<p>
Hey! <br>你想让你的照片也成为网站的一部分吗？<br>
你想让更多的人看到你的照片吗？<br>
你想让你的照片出现在大家的屏幕上吗？<br><br><br>

将你的照片发送到这里<br>
<a href=mailto:Chatchan92@163.com>Chatchan92@163.com</a><br><br><br>
格式：<br>
标题：Chanfocus照片投稿<br>
内容：照片、你的名字或代号、联系方式（微信或邮箱）<br><br><br>

要求：<br>
像素不低于1280*800<br><br>
照片风格请保持宁静，平和或胶片感；不接受人像正面照片<br>
请勿自行添加水印，一旦采用，我们将统一添加水印，标明摄影师信息与联系方式<br><br><br><br>


免责声明：<br>
请确保您上传的照片无任何形式的版权纠纷<br>
所有的照片在无其他声明的情况下仅使用于该网站chanfocus.com<br>
照片将经过筛选，有选择性的发布在页面上，发布的照片都将会添加统一格式水印，标明摄影师信息与联系方式<br>
照片是否入选将不另行通知，请多关注小站<br>
任何形式的盗图、盗链及其他侵犯版权的行为，请自行承担所带来的后果，Chanfocus将保留所有法律追究权利<br><br>
<br><br><br>
     <br>Chan<br><br><br></p>
					</div>
				</div>
			</div>
		</div>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
							<h3>关于这里</h3>
							<p>「人的眼睛看到的事情，不是唯一的。」 「为什么？」我问。魔术师思考了一会儿，用沙哑的声音回答： 「因为有时候你一辈子记住的事，不是眼睛看到的事。」</p>
						</div>
						<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
							<h3>小站框架</h3>
							<ul class="float">
								<li><a href="#">Materialize</a></li>
								<li><a href="#">Branding &amp; Identity</a></li>
								<li><a href="#">Free HTML5</a></li>
								<li><a href="#">HandCrafted Templates</a></li>
							</ul>
							<ul class="float">
								<li><a href="#">Free Bootstrap Template</a></li>
								<li><a href="#">Free HTML5 Template</a></li>
								<li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
								<li><a href="#">HandCrafted Templates</a></li>
							</ul>

						</div>

						<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
							<h3>联系我</h3>
							<ul class="fh5co-social">
								<li><a href="\about_me"><i class="icon-mail"></i> Email</a></li>
								<li><a href="\about_me"><i class="icon-chat"></i> Wechat</a></li>
								<li><a href="https://500px.com/chatchan92"><i class="icon-500px"></i> 500px</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="fh5co-copyright text-center">
					<p>&copy; Xia CHEN Onehourfocus All rights reserved. 版权所有</p>	
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="{{asset('resources/views/auth/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('resources/views/auth/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('resources/views/auth/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('resources/views/auth/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar -->
	<script src="{{asset('resources/views/auth/js/jquery.stellar.min.js')}}"></script>
	<!-- Superfish -->
	<script src="{{asset('resources/views/auth/js/hoverIntent.js')}}"></script>
	<script src="{{asset('resources/views/auth/js/superfish.js')}}"></script>

	<!-- Main JS (Do not remove) -->
	<script src="{{asset('resources/views/auth/js/main.js')}}"></script>

	</body>
</html>


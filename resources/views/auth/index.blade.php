
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>一小时专注--给你最高效的学习空间</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<META NAME="Description" CONTENT="Chanfocus是一个帮助你快速投入学习和工作页面，这里提供：1、专业的专注音乐：阿尔法波、白噪音和自然音乐。2、记录学习轨迹的时间足迹。最后，还有一个让你身临其境的禅境花园，愿在屏幕前的你，全力以赴">
		<META NAME="Keywords" CONTENT="专注">
		<META NAME="Keywords" CONTENT="一小时">
		<META NAME="Keywords" CONTENT="学习">
		<META NAME="Keywords" CONTENT="效率">
		<META NAME="Keywords" CONTENT="高效">
		<META NAME="Keywords" CONTENT="放松">


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
								<li class="active">
									<a href="\index">主页</a>
								</li>
								<li><a href="\photo">摄影师补全计划</a></li>
								<li><a href="\about_me">关于我</a></li>
								<li><a href="\login">@if(Auth::check()){{Auth::user()->name}}@else注册/登录@endif
									</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
			{!!csrf_field()!!}
        
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(http://p1.bqimg.com/1949/c8e81b8e8bd0c38d.jpg);">
				<div class="desc animate-box">
					<h2>Focus on the good.</h2>
					<span>Chanfocus---高效的专注空间</span>
					<p><a class="btn btn-primary btn-lg btn-learn" href="\focus">现在开始</a></p>
				</div>
			</div>

		</div>
		<!-- end:header-top -->
				<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Hey！</h3>
						<p>欢迎来到Chan的一小时专注小站<br>戴上耳机，这里提供三种不同的音乐，进入属于自己的专注空间</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-hotairballoon"></i></span>
							<h3>阿尔法波</h3>
							<p>节拍在60--70，频率在8-14HZ范围内音乐，引导大脑进入阿尔法脑波状态，刺激脑内分泌内酚酞，保持右脑潜意识活动积极。提高<strong>记忆力、创造力</strong></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-quote"></i></span>
							<h3>自然音乐</h3>
							<p>背景音乐中模仿来自大自然的声音：海浪、森林、鸟鸣；让全身回归自然，放松身心，减缓学习工作压力。提高<strong>专注度、想象力</strong></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-shield"></i></span>
							<h3>白噪音</h3>
							<p>远离周围不可控高分贝噪音，营造自己的舒适区域，原来世界上最甜美的声音就是安静。帮助快速进入<strong>高效状态</strong></p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div id="fh5co-work">
			<div class="container">
				<div class="row">
					<div class="col-md-12 work">
						<div class="row">
							<div class="col-md-6 col-md-pull-2">
								<div class="half-inner " style="background-image:url(http://p1.bqimg.com/1949/0c39efa13044290c.jpg); overflow:hidden;">
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="desc">
									<h3><a href="#">时间足迹</a></h3>
									<p>Chanfocus小站在为您营造专注环境之外，另提供时间足迹功能。记录下你的工作、休息时间轨迹，可以根据番茄计时法，调整自己专注的时间节奏，串成时间足迹，梳理自己一天的效率。让你接下来的每一天，都做得比原来更好。</p>
									<p><a class="btn btn-primary" href="\focus">Learn More</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 work">
						<div class="row">
							<div class="col-md-6 col-md-push-6">
								<div class="half-inner half-inner2" style="background-image:url(http://p1.bqimg.com/1949/a05c1720a206280c.jpg);">
								</div>
							</div>
							<div class="col-md-6 col-md-pull-6 animate-box">
								<div class="desc desc2">
									<h3><a href="#">禅境花园</a></h3>
									<p>Chanfocus小站提供的另一大板块，给屏幕前的你，工作学习之余的小憩花园，拥有深秋森林，冬日炉火，黑胶唱片，曙光地球，密林深处，蔚蓝海岸，云端穿行，上善若水和圣诞烛光等场景，让自己远离片刻的喧嚣，释放压力。</p>
									<p><a class="btn btn-primary" href="\rest">Learn More</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-features">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">

							<div class="feature-left">
								<span class="icon">
									<i class="icon-profile-male"></i>
								</span>
								<div class="feature-copy">
									<h3>呼吸冥想</h3>
									<p>禅境花园内的冥想，引导你快速释放压力，恢复平静。</p>
								</div>
							</div>

						</div>

						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-heart"></i>
								</span>
								<div class="feature-copy">
									<h3>怦然心动</h3>
									<p>禅境花园内冥想，帮助你短时间内减轻烦躁情绪，拥抱温暖世界。</p>
								</div>
							</div>

						</div>
						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-magnifying-glass"></i>
								</span>
								<div class="feature-copy">
									<h3>全身扫描</h3>
									<p>禅境花园内冥想，引导你重新感知全身，快速重新提高专注度和高效状态。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- END What we do -->
		
		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>很高兴遇见你</h3>
						<p>世间所有的相遇，都是久别重逢。就算什么都没发生，也沒关系，重要的是，我們度过了美好的一天。</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="testimony">
							<blockquote>
								&ldquo;我是上海一名高中生，一直在使用你的一小时专注，白噪音·自习室空调和原野暖风，感觉效率有了很大提升，非常感谢你的付出。&rdquo;
							</blockquote>
							<figure>
								<img class="img-responsive" src="http://p1.bpimg.com/4851/624d20f7797cb4c8.png" alt="user">
							</figure>
							<p class="author">Jason Hu</p>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="testimony">
							<blockquote>
								&ldquo; 今天被朋友推荐了这个小站，很喜欢里面的音乐，确实能让人静下心来学习。感谢你提供了这么好的一个网站，谢谢！&rdquo;
							</blockquote>
							<figure>
								<img class="img-responsive" src="http://p1.bpimg.com/4851/ff2a5e788aad5685.png" alt="user">
							</figure>
							<p class="author">zhouxiaolu</p>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="testimony">
							<blockquote>
								&ldquo;大爱这个网页，在我学习的时候让我专注度爆棚，界面很简洁，之前有做过APP，所以很有感触，所以很喜欢&rdquo;
							</blockquote>
							<figure>
								<img class="img-responsive" src="http://p1.bpimg.com/4851/624d20f7797cb4c8.png" alt="user">
							</figure>
							<p class="author">Xing Yang</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fh5co-content-section -->


		<!-- fh5co-blog-section -->
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
	<!-- Magnific Popup -->
	<script src="{{asset('resources/views/auth/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('resources/views/auth/js/magnific-popup-options.js')}}"></script>

	<!-- Main JS -->
	<script src="{{asset('resources/views/auth/js/main.js')}}"></script>

	</body>
</html>


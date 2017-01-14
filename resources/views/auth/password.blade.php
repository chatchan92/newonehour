<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>还差一步--一小时专注</title>



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

    <link href="{{asset('resources/views/auth/css/login/login.css')}}" rel="stylesheet">
    <script src="{{asset('resources/views/auth/js/login/login.js')}}"></script>
    <!-- Modernizr JS -->
    <script src="{{asset('resources/views/auth/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('resources/views/auth/js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
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
                        <li><a href="\photo">摄影师补全计划</a></li>
                        <li><a href="\about_me">关于我</a></li>
                        <li class="active"><a href="\login">注册/登录</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
  <div class="cont" style="background-image: url('http://p1.bpimg.com/1949/cfed4218b40f1ae9.jpg');">
  <div class="demo">
    <div class="login">
    <div class="login__check"></div>
    <div class="login__form" style="margin-top:-10%;">
        <div style="color:white;">@include("errors.errors")</div>
        <form action="" method="post">
        {!!csrf_field()!!}
        <div class="login__row">     
          <input name="email" type="email" class="login__input name email" placeholder="请输入您注册的邮箱地址"/  autofocus> 
        </div> 
        <div class="login__row">
          <div style="margin-top:10px;">{!! Geetest::render() !!}</div>
         </div>
         <div style="margin-top:5px;">
           <button type="submit" class="login__submit">发送重置链接</button>
         </div>
         <div style="">
         <p class="login__signup"><a href="\login">后退</a></p>
         </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- http://codepen.io/suez/pen/dPqxoM -->
<!-- http://codepen.io/suez/pen/dPqxoM -->
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


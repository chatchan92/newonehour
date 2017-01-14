<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Login Demo</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
    </style>

</head>
<body>
<!-- 导航栏 -->
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <a href="\" class="navbar-brand">Login Demo</a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            @if( Auth::check())
                <li><a href="\logout">登出</a></li>
                <li><a href="#">{{Auth::user()->name}}</a></li>
                @if (!Auth::user()->active)
                    <li><a href="/send">激活账号</a></li>
                @endif
            @else
                <li><a href="\login" class="navbar-link">登录</a></li>
                <li><a href="\register" class="navbar-link">注册</a></li>
                <li><a href="/password/email" class="navbar-link">找回密码</a></li>
            @endif
        </ul>
    </div>
</nav>
<!-- 错误提示 -->
@include("errors.errors")
<div class="container">
    @yield('content')
</div>

</body>
</html>
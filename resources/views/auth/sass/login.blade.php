<!DOCTYPE html>
<html lang="zh-CN" style="height: 100%;">
<head>
  <link href="{{asset('resources/views/auth/css/login/login.css')}}" rel="stylesheet">
  <script src="{{asset('resources/views/auth/dist/js/jquery-1.12.3.min.js')}}"></script>
  <script src="{{asset('resources/views/auth/js/login/login.js')}}"></script>
</head>
<body>

  <div class="cont">
  <div class="demo">
    <div class="login">
    <div style="margin-left:30%;">
    <img src='http://i1.piimg.com/1949/00cfe582688008ad.jpg' style="width:12rem;margin-top:35%;"></div>
      <div class="login__form" style="margin-top: -5%;">
        <div style="color:white;">@include("errors.errors")</div>

        <form action="" method="post">
        {!!csrf_field()!!}
        <div class="login__row">

          <input name="email" type="email" class="login__input name form-control"  value="{{ old('email') }}"  placeholder="登录邮箱"/ autofocus>
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
        </div>
        <div class="login__row">

          <input name="password" type="password" class="login__input pass form-control" placeholder="密码"/>
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
        </div>
        <div class="login__row">
          <div style="margin-top:10px;">{!! Geetest::render() !!}</div>
         </div>
         <div style="margin-top:5px;">
           <button type="submit" class="login__submit">登录</button>
         </div>
         <div style="">
         <p class="login__signup">没有账户？ &nbsp;<a href="\register">注册</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/password/email">找回密码</a></p>
         </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- http://codepen.io/suez/pen/dPqxoM -->
</body>
</html>



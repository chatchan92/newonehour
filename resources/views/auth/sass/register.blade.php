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
    <div class="login__check"></div>
    <div class="login__form" style="margin-top:-20%;">
        <div style="color:white;">@include("errors.errors")</div>

        <form action="" method="post">
        {!!csrf_field()!!}
        <div class="login__row">     
          <input name="email" type="email" class="login__input name email" placeholder="注册邮箱"/  autofocus>        
        </div>
        <div class="login__row">     
          <input name="name" type="text" class="login__input name" placeholder="用户名"/>
        </div>  
        <div class="login__row">         
          <input name="password" type="password" class="login__input pass password" placeholder="密码"/>
        </div>
        <div class="login__row">         
          <input name="password_confirmation" type="password" class="login__input pass" id="password_confirmation" placeholder="确认密码"/>
        </div>
        <div class="login__row">
          <div style="margin-top:10px;">{!! Geetest::render() !!}</div>
         </div>
         
         <div style="margin-top:5px;">
           <button type="submit" class="login__submit">提交</button>
         </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- http://codepen.io/suez/pen/dPqxoM -->
</body>
</html>

@extends('layouts.app')

@section('content')
    <form method="post" action="/register" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name"  class="col-sm-2 control-label">用户名:</label>
            <div class="col-sm-10">
                <input type="text"  id="name" name="name" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="mail"  class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email"  id="email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="password"  class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password"  id="password" name="password">
            </div>
        </div>
        <div class="form-group">
            <label for="password"  class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
                <input type="password"  id="password_confirmation" name="password_confirmation">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">注册</button>
            </div>
        </div>
    </form>
@endsection
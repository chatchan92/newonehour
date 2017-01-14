@extends('layouts.app')

@section('content')
    <form method="POST" action="/login" class="form-horizontal">
        {!! csrf_field() !!}

        <div class="form-group">
            <label class="col-md-4 control-label">邮箱</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">密码</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> 记住我
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">登录</button>
            </div>
        </div>
    </form>
@endsection
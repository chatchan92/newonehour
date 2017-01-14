@extends('layouts.app')
@section('content')
    <form method="POST" action="/password/reset" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="col-sm-offset-2 col-sm-10">
            <input type="hidden"  value="{{$token}}" name="token">
        </div>

        <div class="form-group">
            <label for="email"  class="col-sm-2 control-label">邮箱</label>
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
                <button type="submit" class="btn btn-default">重置</button>
            </div>
        </div>
    </form>
@endsection
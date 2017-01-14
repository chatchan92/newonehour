@extends('layouts.app')
@section('content')
    <form method="POST" action="/password/email" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email"  class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email"  id="email" name="email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">发送重置链接</button>
            </div>
        </div>
    </form>
@endsection
@extends('common.layout')
@section('TitleAndCss')
<title>TopPage</title>
<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/media-queries.css')}}}">
@stop

@section('content')
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">+ヒト</h1>

            </div>
            <h3>ユーザー登録</h3>
            <p>hello new user^^</p>
            <form method="post" class="m-t" role="form" action="">
                <div class="form-group">
                     @if ($errors->has('name'))
                    <div class="errors"><p>{{ $errors->first('name') }}</p></div>
                    @endif
                    <input id="name" type="text" name="name" class="form-control" placeholder="名前" required="" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Eメール" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="パスワード" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input name="term" type="checkbox"><i></i> 利用規約に同意する </label></div>
                </div>
                <button type="submit" value="Add New" class="btn btn-primary block full-width m-b">登録</button>

                <p class="text-muted text-center"><small>すでにアカウントをお持ちですか？</small></p>
                <a class="btn btn-sm btn-white btn-block" href="../login">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>
@stop

@section('Js')
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
@stop
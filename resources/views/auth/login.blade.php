@extends('common.layout_auth')
@section('TitleAndCss')
<title>TopPage</title>

<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
@stop
@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>ログイン</h3>
            <form method="post" class="m-t" role="form" action="/auth/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                <div class="form-group">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Eメールアドレス" required="" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <input id="password" name="password" type="password" class="form-control" placeholder="パスワード" required="">
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

            <button type="submit" class="btn btn-primary block full-width m-b">ログイン</button>

                <a href="/password/email"><small>パスワードをお忘れの場合</small></a><br>
                <p class="text-muted text-center"><small>アカウントをお持ちでない方</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/auth/register">サインアップ</a>
            </form>
            @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            <p class="m-t"> <small>TIMELAG Inc. &copy; 2016</small> </p>
        </div>
    </div>
@stop
@section('Js')
<script src="{{asset('/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('/assets/js/wow.min.js')}}"></script>
<script src="{{asset('/assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
@stop

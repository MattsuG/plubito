@extends('common.layout_auth')
@section('TitleAndCss')
<title>プラビト / メール再送信</title>

<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">
@stop
@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>ログイン</h3>
            <form method="post" class="m-t" role="form" action="">
                {{ csrf_field() }}
 
                <div class="form-group">
                    <label for="email">登録したemailアドレスを再入力してください。</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Eメールアドレス" required="" value="{{ old('email') }}">
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
            </form>

            <a href="{{url('/password/email')}}"><small>パスワードをお忘れの場合</small></a><br>
            <p class="text-muted text-center"><small>アカウントをお持ちでない方</small></p>
            <a class="btn btn-sm btn-white btn-block" href="/auth/register">サインアップ</a>

            @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            <p class="m-t"> <small>TIMELAG Inc. &copy; 2016</small> </p>
        </div>
    </div>
@stop
@section('Js')
<script src="{{secure_asset('/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{secure_asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{secure_asset('/assets/js/wow.min.js')}}"></script>
<script src="{{secure_asset('/assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{secure_asset('assets/js/scripts.js')}}"></script>
@stop

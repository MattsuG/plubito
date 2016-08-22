@extends('common.layout')
@section('TitleAndCss')
<title>TopPage</title>

<link rel="stylesheet" href="{{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/style.css')}}}">

@stop

@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">+ヒト</h1>

            </div>
            <h3>ログイン</h3>
            <p>welcome back to +ヒト</p>
            <form method="post" class="m-t" role="form" action="/auth/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
 

            {{-- nameフィールド --}}
                <div class="form-group">
                    @if ($errors->has('email'))
                    <div class="errors"><p>{{ $errors->first('email') }}</p></div>
                    @endif
                    <input id="email" name="email" type="email" class="form-control" placeholder="Eメールアドレス" required="" value="{{ old('email') }}">
                </div>

            {{-- passwordフィールド --}}
                <div class="form-group">
                    @if ($errors->has('password'))
                    <div class="errors"><p>{{ $errors->first('password') }}</p></div>
                    @endif
                    <input id="password" name="password" type="password" class="form-control" placeholder="パスワード" required="">
                </div>

            {{-- remember me（継続ログイン）の有効無効指定チェックボックス --}}
                <label for="remember" class="pure-checkbox">
                    <input id="remember" type="checkbox" name="remember"
                      {{-- remember入力項目が存在しているならば、チェックされている --}}
                      {!! old('remember') ? 'checked="checked"' : '' !!} > 継続ログイン
                </label>

            {{-- ログインボタン --}}
            <button type="submit" class="btn btn-primary block full-width m-b">ログイン</button>

                <a href="#"><small>パスワードをお忘れの場合</small></a>
                <p class="text-muted text-center"><small>アカウントをお持ちでない方</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/auth/register">サインアップ</a>
            </form>
            <p class="m-t"> <small>TIMELAG Inc. &copy; 2016</small> </p>
        </div>
    </div>
@stop
@section('Js')
<script src="{{{secure_asset('/assets/js/jquery-1.11.1.min.js')}}}"></script>
<script src="{{{secure_asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>
<script src="{{{secure_asset('assets/js/jquery.backstretch.min.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/wow.min.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/retina-1.1.0.min.js')}}}"></script>
<script src="{{{secure_asset('assets/js/scripts.js')}}}"></script>
@stop

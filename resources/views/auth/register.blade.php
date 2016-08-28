@extends('common.layout3')
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
            <h3>ユーザー登録</h3>
            <form method="post" class="m-t" role="form" action="/auth/register">
            
                {{-- nameフィールド --}}
                <div class="form-group">
                     @if ($errors->has('name'))
                    <div class="errors"><p>{{ $errors->first('name') }}</p></div>
                    @endif
                    <input id="name" type="text" name="name" class="form-control" placeholder="名前" required value="{{ old('name') }}">
                </div>

                {{-- emailフィールド --}}
                <div class="form-group">
                    @if ($errors->has('email'))
                    <div class="errors"><p>{{ $errors->first('email') }}</p></div>
                    @endif
                    <input id="email" type="email" name="email" class="form-control" placeholder="Eメール" required value="{{ old('email') }}">
                </div>

                {{-- passwordフィールド --}}
                <div class="form-group">
                    @if ($errors->has('password'))
                    <div class="errors"><p>{{ $errors->first('password') }}</p></div>
                    @endif
                    <input id="password" type="password" name="password" class="form-control" placeholder="パスワード" required>
                </div>

                {{-- password_confirmationフィールド --}}
                <div class="form-group">
                     @if ($errors->has('password_confirmation'))
                    <div class="errors"><p>{{ $errors->first('password_confirmation') }}</p></div>
                    @endif
                    
                    <input id="password_confirmantion" type="password" name="password_confirmation" class="form-control" placeholder="パスワード確認" required>
                </div>

                {{-- 登録ボタン --}}
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input name="term" type="checkbox" required><i></i> 利用規約に同意する </label></div>
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">登録</button>

                <p class="text-muted text-center"><small>すでにアカウントをお持ちですか？</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/auth/login">ログイン</a>
                
                {{-- CSRFを防ぐためのトークンを隠しフィールドに埋め込むコードの生成 --}}
                {!! csrf_field() !!}
            </form>
            <p class="m-t"> <small>TIMELAG Inc. &copy; 2016</small> </p>
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
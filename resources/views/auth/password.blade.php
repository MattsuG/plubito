@extends('common.layout_auth')
@section('TitleAndCss')
<title>プラビト / パスワード変更</title>
<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/media-queries.css')}}">
@stop

@section('content')

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <h3>パスワード変更</h3>
            <form method="post" class="m-t" role="form" action="">
            

                <div class="form-group">
                    <input id="email" type="email" name="email" class="form-control" placeholder="Eメール" required value="{{ old('email') }}">
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

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                {!! csrf_field() !!}

                <button type="submit" class="btn btn-primary block full-width m-b">パスワード変更</button>

            </form>
            <p class="m-t"> <small>TIMELAG Inc. &copy; 2016</small> </p>
        </div>
    </div>
@stop

@section('Js')
<!-- Mainly scripts -->
<script src="{{secure_asset('/assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{secure_asset('/assets/js/bootstrap.min.js')}}"></script>
@stop
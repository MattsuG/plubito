@extends('common.layout_auth')
@section('TitleAndCss')
<title>TopPage</title>

<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">
@stop
@section('content')
    <div class="middle-box text-center">
        <h3>決済の確定</h3>
        <h4>トーク名:</h4>
        <h4>価格:</h4>
        <form method="post" class="m-t" role="form" action="/payment/confirm">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary block full-width m-b">確定</button>
        </form>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <p class="m-t"> <small>TIMELAG Inc. &copy; 2016</small> </p>
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

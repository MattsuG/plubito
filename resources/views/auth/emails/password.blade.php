
@extends('common.layout')
@section('TitleAndCss')
<title>show.php | ユーザー詳細</title>

<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style_pre_index.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
Click here to reset your password: {{ url('password/reset/'.$token) }}
@stop

@section('Js')
<script src="{{secure_asset('/assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{secure_asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{secure_asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{secure_asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{secure_asset('/assets/js/inspinia.js')}}"></script>
<script src="{{secure_asset('/assets/js/plugins/pace/pace.min.js')}}"></script>
@stop

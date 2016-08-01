@extends('common.layout')
@section('TitleAndCss')
<title>TopPage</title>

<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">

@stop

@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">+ ヒ ト</h1>

            </div>
            <h3>Welcome to + ヒト</h3>
            <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>xxxxxxxxxxxxxxxxxxxxxxxx.</p>
            <form class="m-t" role="form" action="mentor">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>パスワードをお忘れの場合</small></a>
                <p class="text-muted text-center"><small>すでにアカウントをお持ちの方</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">サインアップ</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>
@stop
@section('Js')
<script src="{{{asset('/assets/js/jquery-1.11.1.min.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>
<script src="{{{asset('assets/js/jquery.backstretch.min.js')}}}"></script>
<script src="{{{asset('/assets/js/wow.min.js')}}}"></script>
<script src="{{{asset('/assets/js/retina-1.1.0.min.js')}}}"></script>
<script src="{{{asset('assets/js/scripts.js')}}}"></script>
@stop

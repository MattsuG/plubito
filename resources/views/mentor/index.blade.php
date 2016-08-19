@extends('common.layout')
@section('TitleAndCss')
<title>show.php | トーク一覧</title>

<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">                         
                            <a href="/mentor"><img alt="image" class="img" src="{{{asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
                    </div>
                    <div class="dropdown profile-element"> 
                        <span>
                            <img alt="image" class="img-circle" src="{{{asset(Auth::user()->pic3_path)}}}" />
                        </span>
                        <a class="dropdown-toggle" href="#">
                            <span class="clear"> 
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold">{{ Auth::user()->name }}</strong>
                                </span> 
                                <span class="text-muted text-xs block">{{ Auth::user()->introduction }}</span>
                            </span>
                        </a>                        
                    </div>                    
                    <div class="logo-element">
                        <a href="/mentor"><img alt="image" class="img" src="{{{asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
                    </div>
                </li>
                <li>
                    <a href="/user/show/{{ Auth::user()->id }}"><i class="fa fa-user"></i> <span class="nav-label">プロフィール表示</span></a>
                </li>
                <li>
                    <a href="/user/edit/{{ Auth::user()->id }}"><i class="fa fa-pencil"></i> <span class="nav-label">プロフィール編集</span></a>
                </li>
                <li>
                    <a href="{{ url('mentor/create')}}"><i class="fa fa-bullhorn"></i> <span class="nav-label">トーク作成</span></a>
                </li>
                 <li>
                    <a href="/user/mypage"><i class="fa fa-comment"></i> <span class="nav-label">メッセージ</span></a>
                </li>  
                <li>
                    <a href="/user/mypage"><i class="fa fa-calendar"></i> <span class="nav-label">マイページ</span></a>
                </li>                 
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">トーク一覧ページへようこそ</span>
                    </li>
                    <li>
                        <a href="/auth/logout">
                            <i class="fa fa-sign-out"></i> ログアウト
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <!-- <div class="row wrapper border-bottom white-bg page-heading inbox-title">
            <div class="col-lg-9ƒ">
                <h2>トーク一覧</h2>
                <ol class="breadcrumb">
                    <li class="active">
                        <strong>トーク一覧</strong>
                    </li>
                </ol>
            </div>
        </div> -->


        <div class="row white-bg">
            <form method="get" role="search" class="navbar-form" action="">
                <div class="form-group">
                    <select class="form-control" name="category_id">
                        <option value="" selected>カテゴリを選択</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if((int)$category->id===(int)$category_id)selected @endif>{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    <input type="text" placeholder="検索ワード" class="form-control" name="word" id="top-search" value="{{ $word }}">
                </div>
            </form>
        </div>
        <div class="row">
            <div id="contents">
                <main id="main">
                    <article>
                        <section>
                            <div class="grid-items">
                                <ul>
                                 @foreach ($talks as $talk)
                                    <li>
                                    <a href="{{ url('mentor/'.$talk->id) }}" style="color:#000;text-decoration:none"><img src="{{{asset($talk->pic0_path)}}}" alt="">
                                    <h3>{{ $talk->title }}</h3>
                                    <h4>興味あり:{{ $talk->likes_count }}人 申込者:{{ $talk->applications_count }}人</h4>
                                    <h4>{{ $talk->category->category_name }}</h4>
                                    <h4></a>
                                    <a href="{{ url('mentor/'.$talk->id) }}"><button type="button" class="btn2 btn-default btn-sm btn-block">詳細を見る</button></a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </section>
                    </article>
                </main>
            </div>
        </div>
        <div class="row">
            <div class="footer">                       
                <div>
                    <strong>Copyright</strong> TIMELAG Inc. &copy; 2016
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('Js')
<script src="{{{asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>

<script src="{{{asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}}"></script>

<script src="{{{asset('/assets/js/inspinia.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/pace/pace.min.js')}}}"></script>
<script>
$(function(){
    var $setElm = $('h3.abbreviation3');
    var cutFigure = '11'; // カットする文字数
    var afterTxt = ' …'; // 文字カット後に表示するテキスト

    $setElm.each(function(){
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))

        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });
});
</script>
<!-- jQueryの読み込み(CDN)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<!-- jQuery Easing Pluginの読み込み(CDN)-->
<!-- ローカルで動作するように本書とは一部記述を変えています -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>window.jQuery.easing.def || document.write('<script src="js/vendor/jquery.easing.1.3.js"><\/script>')</script>
<!-- jquery.vgrid.min.jsの読み込み -->
<script src="{{{asset('/assets/js/jquery.vgrid.min.js')}}}"></script>
<script src="{{{asset('/assets/js/script.js')}}}"></script>
@stop

@extends('common.layout')
@section('TitleAndCss')
<title>show.php | トーク一覧</title>

<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style_pre_index.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">

@stop

@section('content')

        <div class="row wrapper border-bottom white-bg page-heading inbox-title">
            <div class="col-lg-9ƒ">
                <h2>トーク一覧</h2>
                <ol class="breadcrumb">
                    <li class="active">
                        <strong>トーク一覧</strong>
                    </li>
                </ol>
            </div>
        </div>
        
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
                                @if (count($talks) < 1)
                                    <h2>お探しの条件に一致するトークは見つかりませんでした。</h2>
                                @endif
                                @foreach ($talks as $talk)
                                    <li>
                                    <a href="{{ url('mentor/'.$talk->id) }}" style="color:#000;text-decoration:none"><img src="{{secure_asset($talk->pic0_path)}}" alt="">
                                    <h4>{{ $talk->title }}</h4>
                                    <p><i class="fa fa-thumbs-up" aria-hidden="true">いいね：</i>{{ count($talk->likes) }}&nbsp;&nbsp;&nbsp;<i class="fa fa-headphones" aria-hidden="true">トーク：</i>{{ $talk->applications_count }}</p>
                                    <h4>{{ $talk->category->category_name }}</h4>
                                    <h4></a>
                                    <a href="{{ url('mentor/'.$talk->id) }}"><button type="button" class="btn2 btn-default btn-sm btn-block">詳細を見る</button></a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <div id="pagenate">
                            {!! $talks->render() !!}
                        </div>
                        </section>
                    </article>
                </main>
            </div>
        </div>

@stop

@section('Js')
<script src="{{secure_asset('/assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{secure_asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{secure_asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{secure_asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{secure_asset('/assets/js/inspinia.js')}}"></script>
<script src="{{secure_asset('/assets/js/plugins/pace/pace.min.js')}}"></script>

<!-- jQueryの読み込み(CDN)-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<!-- jQuery Easing Pluginの読み込み(CDN)-->
<!-- ローカルで動作するように本書とは一部記述を変えています -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>window.jQuery.easing.def || document.write('<script src="js/vendor/jquery.easing.1.3.js"><\/script>')</script>
<!-- jquery.vgrid.min.jsの読み込み -->
<script src="{{secure_asset('/assets/js/jquery.vgrid.min.js')}}"></script>
<script src="{{secure_asset('/assets/js/script.js')}}"></script>
@stop

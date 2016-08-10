
@extends('common.layout')
@section('TitleAndCss')
<title>show.php | トーク詳細</title>

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
                            <img alt="image" class="img-circle" src="{{{asset('/assets/img/about/1.jpg')}}}" />
                        </span>
                        <a class="dropdown-toggle" href="#">
                            <span class="clear"> 
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold">松澤隼人</strong>
                                </span> 
                                <span class="text-muted text-xs block">スポーツメーカーを退職後、大阪にて教育系ウェブサービスの立ち上げ準備中。2016年4月から6月までセブ島留学をしてプログラミングを学び、その時のルームメートと個人間で進路情報をシェアできるサービスを構築中。</span>
                            </span>
                        </a>                        
                    </div>                    
                    <div class="logo-element">
                        <a href="/"><img alt="image" class="img" src="{{{asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
                    </div>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">アカウント編集</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/user/edit">プロフィール編集</a></li>
                        <li><a href="graph_morris.html">Email編集</a></li>
                        <li><a href="graph_rickshaw.html">パスワード編集</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/mentor/create"><i class="fa fa-bullhorn"></i> <span class="nav-label">トーク作成</span></a>
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
                        <span class="m-r-sm text-muted welcome-message">トーク詳細ページへようこそ</span>
                    </li>
                    <li>
                        <a  class="dropdown-toggle count-info" href="/mentor">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> ログアウト
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>トーク詳細</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="/mentor">トーク一覧</a>
                    </li>
                    <li class="active">
                        <strong>トーク詳細</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row white-bg animated fadeInRight">
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>話し手プロフィール</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-circle" src="{{{asset($talk->mentor->profile_picture_path)}}}">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>{{ $talk->mentor->name }}</strong></h4>
                            <p><i class="fa fa-map-marker"></i> Seoul, S.Korea</p>
                            <h5>
                                自己紹介
                            </h5>
                            <p>
                                {{ $talk->mentor->introduction }}
                                <a href="{{ url('/user/show/'.$talk->mentor_id) }}">...詳細を見る</a>
                            </p>
                            <div class="user-button">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i> メッセージを送る</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>トーク詳細</h5>
                    </div>
                    <div class="ibox-content">

                        <div>
                            <div class="feed-activity-list">
                                <div class="feed-element">
                                    <h6>{{ $talk->category->category_name }}</h6>
                                    {{ $talk->title }} 
                                    <div class="photos">
                                        <img alt="image" class="feed-photo" src="{{{asset($talk->pic0_path)}}}">
                                        @if (!empty($talk->pic1_path))
                                        <img alt="image" class="feed-photo" src="{{{asset($talk->pic1_path)}}}">
                                        @endif

                                    </div>
                                </div>
                                <div class="feed-element" style="text-align: left;">
                                    <h6>詳細</h6>
                                    {!! nl2br(e($talk->detail)) !!}
                                </div>
                                <div class="feed-element">
                                    <h6>価格</h6>
                                    {{ $talk->price }}円
                                </div>
                                <div class="feed-element">
                                    興味あり:人
                                    申込者数:人
                                </div>
                            </div>
                                <button  class="btn btn-primary btn-block m" onClick="location.href=''">興味あり！</button>
                            @if ((int)$talk->mentor_id === (int)Auth::user()->id)
                                <button  class="btn btn-primary btn-block m" onClick="location.href='{{ url('mentor/'.$talk->id.'/edit') }}'">編集する</button>
                            @elseif ($check)
                                <button class="btn btn-primary btn-block m" data-toggle="modal" data-target="#request-modal" disabled="disabled">予約済み</button>
                            @else
                                <button class="btn btn-primary btn-block m" data-toggle="modal" data-target="#request-modal">予約リクエスト</button>
                            @endif

                            @if (Session::has('flash_message'))
                                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                            @endif


                        </div>

                    </div>
                </div>

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

    @if (!$check)
        <div class="modal" id="request-modal" tabindex="-1">
            <div class="modal-dialog">
            <!-- 3.モーダルのコンテンツ -->
                <div class="modal-content">
                    <!-- 4.モーダルのヘッダ -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modal-label">このトークに申し込みますか？</h4>
                    </div>
                    <!-- 5.モーダルのボディ -->
                    <div class="modal-body">
                        <p>{{ $talk->title }}</p>
                        <p>{{ $talk->price }}円</p>
                    </div>
                    <!-- 6.モーダルのフッタ -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">やめる</button>
                        <form method="post" action="{{ url('/mentor/apply') }}">
                            <input name="talk_id" value="{{ $talk->id }}" type="hidden">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="申し込む">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@stop

@section('Js')
<script src="{{{asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>

<script src="{{{asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}}"></script>

<script src="{{{asset('/assets/js/inspinia.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/pace/pace.min.js')}}}"></script>
@stop

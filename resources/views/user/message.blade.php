
@extends('common.layout')
@section('TitleAndCss')
<title>mypage.php | マイページ</title>
<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">
<style>
    p{
      width: 100px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      -o-text-overflow: ellipsis; /* Opera9,10対応 */
    }
</style>

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
                            @if (!empty(Auth::user()->profile_picture_path))
                            <img alt="image" class="img-circle" src="{{{asset(Auth::user()->profile_picture_path)}}}">
                            @endif
                            @if (empty(Auth::user()->profile_picture_path))
                            <img alt="image" class="img-circle" src="/assets/img/default_thumbnail.jpg">
                            @endif
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
                        <span class="m-r-sm text-muted welcome-message">メッセージ画面へようこそ</span>
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
                <h2>メッセージ</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>メッセージ</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row wrapper wrapper-content white-bg animated fadeInUp">
            <div class="ibox">
                <div class="ibox-content">
                    
                    <div class="row m-t-sm">
                        <div class="col-lg-12">
                        <div class="panel blank-panel">
                        <div class="panel-heading">
                            <div class="panel-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-1" data-toggle="tab">受信</a></li>
                                    <li class=""><a href="#tab-2" data-toggle="tab">送信</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                        <div class="tab-content" style="text-align: left">
                        <div class="tab-pane" id="tab-1">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>送信者</th>
                                    <th>トーク名</th>
                                    <th>本文</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($received_mails as $received_mail)
                                    <tr>
                                        <td>
                                            <img alt="profile_image" class="img-circle" src="{{ asset($received_mail->sender->profile_picture_path) }}">
                                        </td>
                                        <td>
                                            {{ $received_mail->sender->name }}
                                        </td>
                                        <td>
                                            {{ $received_mail->talk->title }}
                                        </td>
                                        <td>
                                            <p>{{ $received_mail->body }}</p>
                                        </td>
                                        <td>
                                            <a href="{{ url('/user/message/'.$received_mail->talk_id) }}">詳細を見る</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>        
                            </table>

                        </div>

                         <div class="tab-pane" id="tab-2">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>送信先</th>
                                    <th>トーク名</th>
                                    <th>本文</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($sent_mails as $sent_mail)
                                <tr>
                                    <td>
                                        <img alt="profile_image" class="img-circle" src="{{ asset($sent_mail->receiver->profile_picture_path) }}">
                                    </td>
                                    <td>
                                        {{ $sent_mail->receiver->name }}
                                    </td>
                                    <td>
                                       {{ $sent_mail->talk->title }}
                                    </td>
                                    <td>
                                       <p>{{ $sent_mail->body }}</p>
                                    </td>
                                    <td>
                                        <a href="{{ url('/user/message/'.$sent_mail->talk_id) }}">詳細を見る</a>
                                    </td>
                                </tr>
                                <div class="modal" id="request-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                    <!-- 3.モーダルのコンテンツ -->
                                        <div class="modal-content">
                                            <!-- 4.モーダルのヘッダ -->
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modal-label">日時を入力してリクエストを承認してください。</h4>
                                            </div>
                                            <!-- 5.モーダルのボディ -->
                                            <div class="modal-body">
                                                <p>{{  }}</p>
                                                <p>{{  }}</p>
                                                <!-- <input type=""> -->
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
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                        </div>
                        </div>
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

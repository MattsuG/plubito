
@extends('common.layout')
@section('TitleAndCss')
<title>mypage.php | マイページ</title>

<link rel="stylesheet" href="{{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/style.css')}}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">                         
                            <a href="/mentor"><img alt="image" class="img" src="{{{secure_asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
                    </div>
                    <div class="dropdown profile-element"> 
                        <span>
                            <img alt="image" class="img-circle" src="{{{secure_asset('/assets/img/about/1.jpg')}}}" />
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
                        <a href="/"><img alt="image" class="img" src="{{{secure_asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
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
                    <a href="add"><i class="fa fa-bullhorn"></i> <span class="nav-label">トーク作成</span></a>
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
                        <span class="m-r-sm text-muted welcome-message">マイページへようこそ</span>
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
                <h2>マイページ</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>マイページ</strong>
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
                                    @if ((int)$user->role === 1)
                                    <li class="{{$app_to_me_active}}"><a href="#tab-1" data-toggle="tab">予約リクエスト一覧</a></li>
                                    <li class="{{$my_talk_active}}"><a href="#tab-2" data-toggle="tab">開設したトーク一覧</a></li>
                                    @endif
                                    <li class="{{$app_active}}"><a href="#tab-3" data-toggle="tab">予約したトーク一覧</a></li>
                                    <li class="{{$like_active}}"><a href="#tab-4" data-toggle="tab">興味ありトーク一覧</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                        <div class="tab-content" style="text-align: left">
                        @if ((int)$user->role === 1)
                            <div class="tab-pane {{$app_to_me_active}}" id="tab-1">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ステータス</th>
                                        <th>タイトル</th>
                                        <th>申込者</th>
                                        <th>開始時間</th>
                                        <th>所要時間</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($apps_to_me as $app_to_me)
                                        <tr>
                                            <td>
                                            @if ((int)$app_to_me->user_finished_flag === 1 && (int)$app_to_me->mentor_finished_flag === 1)
                                                <span class="label label-primary"><i class="fa fa-check"></i> 終了</span>
                                            @elseif ((int)$app_to_me->paid_flag === 1)
                                                <span class="label label-primary"><i class="fa fa-check"></i> 支払い済</span>
                                            @elseif ((int)$app_to_me->approved_flag === 1)
                                                <span class="label label-primary"><i class="fa fa-check"></i> 承認済</span>
                                            @else
                                                <p>未承認</p>
                                            @endif
                                            </td>
                                            <td>
                                               {{ $app_to_me->talk->title }}
                                            </td>
                                            <td>
                                               {{ $app_to_me->user->name }}
                                            </td>
                                            <td>
                                            @if (empty($app_to_me->talk_date))
                                                 未定
                                            @else
                                                {{ date('Y/m/j', strtotime($app_to_me->talk_date)) }} {{ date('H:i', strtotime($app_to_me->starting_time)) }}
                                            @endif
                                            </td>
                                            <td>
                                                {{ $app_to_me->talk->talk_time }}分
                                            </td>
                                            <td>
                                                <form method="post" action="{{url('/user/message/'.$app_to_me->talk->id)}}">
                                                    <input type="hidden" name="receiver_id" value="{{$app_to_me->user->id}}">
                                                    <input type="submit" class="btn" value="メッセージを送る">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>
                                            <td>
                                            @if ((int)$app_to_me->approved_flag === 0)
                                                <button class="btn btn-primary btn-block m" data-toggle="modal" data-target="#approval-modal">承認する</button>
                                            @elseif ((int)$app_to_me->user_finished_flag === 1 && (int)$app_to_me->mentor_finished_flag === 1)
                                                <!-- 終了ボタン -->
                                            @endif
                                            </td>
                                        </tr>
                                        @if ((int)$app_to_me->approved_flag === 0)
                                        <div class="modal" id="approval-modal" tabindex="-1">
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
                                                    <form method="post" action="{{ url('/user/approve') }}">
                                                        <div class="form-group">
                                                        <!-- 5.モーダルのボディ -->
                                                            <div class="modal-body">

                                                                <p>{{ $app_to_me->talk->title }}</p>
                                                                <p>申込者:{{ $app_to_me->user->name }}</p>
                                                                <input type="date" name="date" class="form-control" required>
                                                                <input type="time" name="time" class="form-control" required>
                                                            </div>
                                                            <!-- 6.モーダルのフッタ -->
                                                            <div class="modal-footer">
                                                                <p>申込者との時間の相談が終わっていない場合は、先に相談し予定を合わせてください。</p>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">やめる</button>
                                                                    <input name="talk_id" value="{{ $app_to_me->talk->id }}" type="hidden">
                                                                    <input name="user_id" value="{{ $app_to_me->user_id }}" type="hidden">
                                                                    {{ csrf_field() }}
                                                                    <input type="submit" class="" value="承認する">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    </tbody>        
                                </table>
                            <div id="pagenate">
                                {!! $apps_to_me->render() !!}
                            </div>
                            </div>
                            <div class="tab-pane {{$my_talk_active}}" id="tab-2">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>タイトル</th>
                                        <th>カテゴリ</th>
                                        <th>価格</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($my_talks as $my_talk)
                                        <tr>
                                            <td>
                                                {{ $my_talk->title }}
                                            </td>
                                            <td>
                                                {{ $my_talk->category->category_name }}
                                            </td>
                                            <td>
                                                {{ $my_talk->price }}円/{{ $my_talk->talk_time }}分
                                            </td>
                                            <td>
                                                <a href="{{ url('/mentor/'.$my_talk->id) }}">詳細を見る</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            <div id="pagenate">
                                {!! $my_talks->render() !!}
                            </div>
                            </div>
                            

                        @endif

                        <div class="tab-pane {{$app_active}}" id="tab-3">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ステータス</th>
                                    <th>タイトル</th>
                                    <th>価格</th>
                                    <th>開始時間</th>
                                    <th>所要時間</th>
                                    <th>話し手</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($applications as $app)
                                    <tr>
                                        <td>
                                        @if ((int)$app->pivot->user_finished_flag === 1 && $app->pivot->mentor_finished_flag === 1)
                                            <span class="label label-primary"><i class="fa fa-check"></i> 終了</span>
                                        @elseif ((int)$app->pivot->paid_flag === 1)
                                            <span class="label label-primary"><i class="fa fa-check"></i> 支払い済</span>
                                        @elseif ((int)$app->pivot->approved_flag === 1)
                                            <span class="label label-primary"><i class="fa fa-check"></i> 承認済</span>
                                        @else
                                            <p>未承認</p>
                                        @endif
                                        </td>
                                        <td>
                                           {{ $app->title }}
                                        </td>
                                        <td>
                                            {{ $app->price }}円
                                        </td>
                                        <td>
                                        @if (empty($app->pivot->talk_date))
                                             未定
                                        @else
                                            {{ $app->pivot->talk_date.$app->pivot->starting_time }}
                                        @endif
                                        </td>
                                        <td>
                                            {{ $app->talk_time }}分
                                        </td>
                                        <td>
                                        <p class="small">
                                            {{ $app->mentor->name }}
                                        </p>
                                        </td>
                                        <td>
                                            <a href="{{ url('/mentor/'.$app->id) }}">詳細を見る</a>
                                        </td>
                                        <td>
                                            @if ((int)$app->pivot->approved_flag === 1 && (int)$app->pivot->paid_flag === 0)
                                                <!-- PayPalボタン -->
                                            @elseif ((int)$app->pivot->paid_flag === 1)
                                                <!-- 終了ボタン -->
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>        
                            </table>
                        <div id="pagenate">
                            {!! $applications->render() !!}
                        </div>
                        </div>

                         <div class="tab-pane {{$like_active}}" id="tab-4">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>タイトル</th>
                                    <th>価格</th>
                                    <th>所要時間</th>
                                    <th>話し手</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($likes as $like)
                                <tr>
                                    <td>
                                       {{ $like->title }}
                                    </td>
                                    <td>
                                       {{ $like->price }}円
                                    </td>
                                    <td>
                                        {{ $like->talk_time }}分
                                    </td>
                                    <td>
                                    <p class="small">
                                        {{ $like->mentor->name }}
                                    </p>
                                    </td>
                                    <td>
                                        <a href="{{ url('/mentor/'.$like->id) }}">詳細を見る</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        <div id="pagenate">
                            {!! $likes->render() !!}
                        </div>
                        </div>
                        </div>
                        @if (Session::has('flash_message'))
                            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                        @endif
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
</div>
@stop

@section('Js')
<script src="{{{secure_asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{secure_asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>

<script src="{{{secure_asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}}"></script>

<script src="{{{secure_asset('/assets/js/inspinia.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/plugins/pace/pace.min.js')}}}"></script>
@stop

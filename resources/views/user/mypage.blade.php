
@extends('common.layout')
@section('TitleAndCss')
<title>mypage.php | マイページ</title>

<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
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
                                               {{ $app_to_me->user->lastname }}&nbsp{{ $app_to_me->user->firstname }}
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
                                                <button onclick="location.href='{{url('/user/message/'.$app_to_me->user->id)}}'" type="submit">詳細を見る</button>
                                            </td>
                                            <td>
                                            @if ((int)$app_to_me->approved_flag === 0)
                                                <button class="btn btn-sm" data-toggle="modal" data-target="#approval-modal">承認</button>
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
                                                                <p>申込者:{{ $app_to_me->user->lastname }}{{ $app_to_me->user->firstname }}</p>
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
                                            {{ $app->mentor->lastname }}&nbsp{{ $app->mentor->firstname }}
                                        </p>
                                        </td>
                                        <td>
                                            <a href="{{ url('/mentor/'.$app->id) }}">詳細を見る</a>
                                        </td>
                                        <td>
                                            @if ((int)$app->pivot->approved_flag === 1 && (int)$app->pivot->paid_flag === 0)

                                            @elseif ((int)$app->pivot->paid_flag === 1)

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
                                        {{ $like->mentor->lastname }}&nbsp{{ $like->mentor->firstname }}
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
@stop

@section('Js')
<script src="{{{asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>

<script src="{{{asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}}"></script>

<script src="{{{asset('/assets/js/inspinia.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/pace/pace.min.js')}}}"></script>
@stop


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
                            @if (!empty($talk->mentor->profile_picture_path))
                            <img alt="image" class="img-circle" src="{{asset($user->profile_picture_path)}}">
                            @else
                            <img alt="image" class="img-circle" src="{{asset('/assets/img/default_thumbnail.jpg'}}">
                            @endif
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>{{ $talk->mentor->lastname }}&nbsp{{ $talk->mentor->firstname }}</strong></h4>
                            <p><i class="fa fa-map-marker"></i> Seoul, S.Korea</p>
                            <h5>
                                自己紹介
                            </h5>
                            <p>
                                {{ $talk->mentor->introduction }}
                                <a href="{{ url('/user/show/'.$talk->mentor_id) }}">...詳細を見る</a>
                            </p>
                            @if ((int)$talk->mentor_id !== (int)Auth::user()->id)
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-default btn-sm btn-block" onclick="location.href='{{ url('user/message/'.$talk->id) }}'"><i class="fa fa-envelope"></i> メッセージを送る</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
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
                                    <h6>所要時間</h6>
                                    {{ $talk->talk_time }}分
                                </div>
                                <div class="feed-element">
                                    興味あり:{{ $talk->likes_count }}人
                                    申込者数:{{ $talk->applications_count }}人
                                </div>
                            </div>
                            @if ((int)$talk->mentor_id !== (int)Auth::user()->id)
                                @if ($check_like)
                                    <button  class="btn btn-secondary btn-block m" onClick="location.href='{{ url('mentor/like/'.$talk->id) }}'">興味あり！</button>
                                @else
                                    <button  class="btn btn-primary btn-block m" onClick="location.href='{{ url('mentor/like/'.$talk->id) }}'">興味あり！</button>
                                @endif
                            @endif

                            @if ((int)$talk->mentor_id === (int)Auth::user()->id)
                                <button  class="btn btn-primary btn-block m" onClick="location.href='{{ url('mentor/'.$talk->id.'/edit') }}'">編集する</button>
                            @elseif ($check_application)
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
    @if (!$check_application)
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

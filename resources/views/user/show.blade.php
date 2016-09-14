
@extends('common.layout')
@section('TitleAndCss')
<title>Plubito/ユーザー詳細</title>

<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style_pre_index.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>ユーザー詳細</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>ユーザー詳細</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row white-bg animated fadeInRight">
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ $user->lastname }}&nbsp{{ $user->firstname }}さんのプロフィール</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            @if (!empty($user->profile_picture_path))
                            <img alt="image" class="img-circle" src="{{secure_asset($user->profile_picture_path)}}">
                            @else
                            <img alt="image" class="img-circle" src="{{secure_asset('/assets/img/default_thumbnail.jpg')}}">
                            @endif
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>{{ $user->name }}</strong></h4>
                            <p><i class="fa fa-map-marker"></i> {{ $user->place }}</p>
                            <h5>
                                自己紹介
                            </h5>
                            <p>
                                {!! nl2br(e($user->introduction)) !!}
                            </p>

                            <div class="user-button">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-default btn-sm btn-block" onclick="location.href='{{ url('user/message/'.$user->id) }}'"><i class="fa fa-envelope"></i> メッセージを送る</button>
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
                        <h5>プロフィール詳細</h5>
                    </div>
                    <div class="ibox-content">

                        <div>
                            <div class="feed-activity-list" style="text-align: left">
                                <div class="feed-element">
                                    <h6>やってみたいこと</h6>
                                    {!! nl2br(e($user->vision)) !!}
                                </div>
                                <div class="feed-element">
                                    <h6>現職</h6>
                                    {{ $user->current_job }}
                                    <h6>ポジション</h6>
                                        {{ $user->current_position }}
                                    <h6>業務内容</h6>
                                        {!! nl2br(e($user->current_detail)) !!} 
                                </div>
                                <div class="feed-element">
                                    <h6>前職</h6>
                                    {{ $user->past_job }}
                                    <h6>ポジション</h6>
                                        {{ $user->past_position }}
                                    <h6>業務内容</h6>
                                        {!! nl2br(e($user->past_detail)) !!}
                                </div>
                                <div class="feed-element">
                                    <h6>最終学歴</h6>
                                    {{ $user->latest_school }}
                                    <h6>学部・学科</h6>
                                        {{ $user->latest_major }}
                                    <h6>在籍期間</h6>
                                        {{ $user->latest_school_period }}
                                </div>
                                  <div class="feed-element">
                                    <h6>その他学歴</h6>
                                    {{ $user->other_school }}
                                    <h6>学部・学科</h6>
                                    {{ $user->other_major }}
                                    <h6>在籍期間</h6>
                                    {{ $user->other_school_period }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

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
@stop
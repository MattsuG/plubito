
@extends('common.layout')
@section('TitleAndCss')
<title>add.php | トーク作成</title>

<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">
<link rel="stylesheet" href="{{{('/assets/css/add.css')}}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
        <div class="row wrapper white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>メッセージ詳細</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>メッセージ詳細</strong>
                    </li>
                </ol>
            </div>
        </div>


        <div class="row wrapper border-bottom white-bg">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" action="{{ url('/user/message') }}">
                            <h2>送信先:{{ $receiver->lastname }}&nbsp{{ $receiver->firstname }}</h2>

                            <div class="form-group"><label class="col-sm-2 control-label">本文（＊必須）</label>
                                <div class="col-sm-10">
                                    <textarea name="body" id="body" class="form-control" rows="10" required placeholder="最大500文字">{{ old('body') }}</textarea>
                                    <p id="detail_count"></p>
                                </div>
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{ csrf_field() }}
                            <div class="" class="events-pad">
                                <div class="form-group">
                                    <input type="submit" id="confirm" class="btn btn-primary" value="メッセージを送信">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if (Session::has('flash_message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif
            </div>            
        </div>

        <div class="row wrapper border-bottom white-bg">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                    @foreach($mails as $mail)
                        <div>
                            <div>
                                <img alt="profile_image" class="img-circle" src="{{ asset($mail->sender->profile_picture_path) }}">
                                To {{$mail->receiver->lastname}}&nbsp{{$mail->receiver->firstname}} From {{ $mail->sender->lastname }}&nbsp{{$mail->sender->firstname}}
                                {{ $mail->sent_at }}
                            </div>
                            <div>
                                {!! nl2br(e($mail->body)) !!}
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div id="pagenate">
                            {!! $mails->render() !!}
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
<script src="{{{asset('/assets/js/add.js')}}}"></script>
@stop

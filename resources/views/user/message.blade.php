
@extends('common.layout')
@section('TitleAndCss')
<title>mypage.php | マイページ</title>

<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style_pre_index.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
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
                                    <li class="{{$received_active}}"><a href="#tab-1" data-toggle="tab">受信</a></li>
                                    <li class="{{$sent_active}}"><a href="#tab-2" data-toggle="tab">送信</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                        <div class="tab-content" style="text-align: left">
                        <div class="tab-pane {{$received_active}}" id="tab-1">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>送信者</th>
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
                                            {{ $received_mail->sender->lastname }}
                                            {{ $received_mail->sender->firstname }}
                                        </td>
                                        <td>
                                            <p>{{ $received_mail->body }}</p>
                                        </td>
                                        <td>
                                            <button onclick="location.href='{{url('/user/message/'.$received_mail->sender_id)}}'" type="submit">詳細を見る</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>        
                            </table>
                        <div id="pagenate">
                            {!! $received_mails->render() !!}
                        </div>
                        </div>

                         <div class="tab-pane {{$sent_active}}" id="tab-2">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>送信先</th>
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
                                        {{ $sent_mail->receiver->lastname }}
                                        {{ $sent_mail->receiver->firstname }}
                                    </td>
                                    <td>
                                       <p style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{ $sent_mail->body }}</p>
                                    </td>
                                    <td>
                                            <button onclick="location.href='{{url('/user/message/'.$sent_mail->receiver_id)}}'" type="submit">詳細を見る</button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        <div id="pagenate">
                            {!! $sent_mails->render() !!}
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop

@section('Js')
<script src="{{asset('/assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('/assets/js/inspinia.js')}}"></script>
<script src="{{asset('/assets/js/plugins/pace/pace.min.js')}}"></script>
@stop

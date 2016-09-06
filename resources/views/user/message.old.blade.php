
@extends('common.layout')
@section('TitleAndCss')
<title>mypage.php | メッセージページ</title>

<link rel="stylesheet" href="{{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/style.css')}}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>メッセージページ</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>メッセージページ</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row white-bg">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div>
                        <div class="chat-activity-list">

                            <div class="chat-element" style="text-align: left">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a2.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">1m ago</small>
                                    <strong>Mike Smith</strong>
                                    <p class="m-b-xs">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    </p>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                </div>
                            </div>

                            <div class="chat-element right">
                                <a href="#" class="pull-right">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body text-right ">
                                    <small class="pull-left">5m ago</small>
                                    <strong>John Smith</strong>
                                    <p class="m-b-xs">
                                        Lorem Ipsum is simply dummy text of the printing.
                                    </p>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                </div>
                            </div>

                            <div class="chat-element" style="text-align: left">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a2.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2h ago</small>
                                    <strong>Mike Smith</strong>
                                    <p class="m-b-xs">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    </p>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="chat-form">
                        <form role="form" method="post">
                            <div class="form-group">
                                <textarea name="body" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Send message</strong></button>
                            </div>
                        </form>
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

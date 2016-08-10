
@extends('common.layout')
@section('TitleAndCss')
<title>show.php | ユーザー詳細</title>

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
                        <span class="m-r-sm text-muted welcome-message">ユーザー詳細ページへようこそ</span>
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
        <div class="row wrapper white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>ユーザー詳細</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>ユーザー詳細</strong>
                    </li>
                </ol>
            </div>
        </div>


        <div class="row wrapper border-bottom white-bg">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            <div class="form-group"><label class="col-sm-2 control-label">お名前</label>
                                <div class="col-sm-10"><input type="text" placeholder="Hayato Matsuzawa" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">現在地</label>
                                <div class="col-sm-10"><input type="text" placeholder="Seoul, S.Korea" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">自己紹介</label>
                                <div class="col-sm-10"><textarea type="text" placeholder="placeholder" class="form-control"></textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">今後やってみたいこと</label>
                                <div class="col-sm-10"><textarea type="text" placeholder="placeholder" class="form-control"></textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">現職</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">現職のポジション</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">現職の業務内容詳細</label>
                                <div class="col-sm-10"><textarea type="text" placeholder="placeholder" class="form-control"></textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">前職</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">前職のポジション</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">前職の業務内容詳細</label>
                                <div class="col-sm-10"><textarea type="text" placeholder="placeholder" class="form-control"></textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">最終学歴</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">学部・学科</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">在籍期間</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>

                            <hr>

                             <div class="form-group"><label class="col-sm-2 control-label">その他学歴</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">学部・学科</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">在籍期間</label>
                                <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                            </div>    

                        </form>
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

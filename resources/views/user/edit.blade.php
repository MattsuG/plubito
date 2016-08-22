
@extends('common.layout')
@section('TitleAndCss')
<title>show.php | ユーザー詳細</title>

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
                            <img alt="image" class="img-circle" src="{{{secure_asset(Auth::user()->pic3_path)}}}" />
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
                        <a href="/"><img alt="image" class="img" src="{{{secure_asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
                    </div>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">アカウント編集</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/user/show/{{ Auth::user()->id }}">プロフィール表示</a></li>
                        <li><a href="/user/edit/{{ Auth::user()->id }}">プロフィール編集</a></li>
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
                        <a href="/auth/logout">
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
                        <form method="post" class="form-horizontal" action="{{ url('/user/edit', $user->id) }}" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            {{ method_field('patch') }}

                            <!-- プロフィール画像 -->
                            <div class="form-group"><label class="col-sm-2 control-label">プロフィール画像</label>
                                <input class="pic" name="pic3" id="pic3" type="file" style="display:none" enctype="multipart/form-data">
                                <div class="input-group">
                                  <input type="text" id="photoCover0" class="form-control" placeholder="jpgもしくはpng(5MBまで)">
                                  <span class="input-group-btn"><button type="button" class="btn btn-primary" onclick="$('#pic3').click();">ファイル選択</button></span>
                                </div>
                                <label id="label3" class="cebroad-pink"></label>
                                <div class="events-pad">
                                  <img src="" id="preview3" style="display:none; width: 300px;">
                            </div>

                             <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">お名前</label>
                                <div class="col-sm-10"><input type="text" name="name" placeholder="お名前" value="{{ old('name', $user->name) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">現在地</label>
                                <div class="col-sm-10"><input type="text" name="place" placeholder="現在地" value="{{ old('place', $user->place) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">自己紹介</label>
                                <div class="col-sm-10"><textarea type="text" name="introduction" placeholder="自己紹介" rows="4" class="form-control">{{ old('introduction', $user->introduction) }}</textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">今後やってみたいこと</label>
                                <div class="col-sm-10"><textarea type="text" name="vision" placeholder="今後やってみたいこと" rows="4" class="form-control">{{ old('vision', $user->vision) }}</textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">現職</label>
                                <div class="col-sm-10"><input type="text" name="current_job" placeholder="会社名など" value="{{ old('current_job', $user->current_job) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">現職のポジション</label>
                                <div class="col-sm-10"><input type="text" name="current_position" placeholder="職種、部署など" value="{{ old('current_position', $user->current_position) }}" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">現職の業務内容詳細</label>
                                <div class="col-sm-10"><textarea type="text" name="current_detail" placeholder="具体的な業務内容、スキルなど"  rows="7" class="form-control">{{ old('current_detail', $user->current_detail) }}</textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">前職</label>
                                <div class="col-sm-10"><input type="text" name="past_job"placeholder="placeholder" value="{{ old('past_job', $user->past_job) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">前職のポジション</label>
                                <div class="col-sm-10"><input type="text" name="past_position" placeholder="placeholder" value="{{ old('past_position', $user->past_position) }}" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">前職の業務内容詳細</label>
                                <div class="col-sm-10"><textarea type="text" name="past_detail" placeholder="placeholder" rows="7" class="form-control" >{{ old('past_detail', $user->past_detail) }}</textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">最終学歴</label>
                                <div class="col-sm-10"><input type="text" name="latest_school" placeholder="placeholder" value="{{ old('latest_school', $user->latest_school) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">学部・学科</label>
                                <div class="col-sm-10"><input type="text" name="latest_major" placeholder="placeholder" value="{{ old('latest_major', $user->latest_major) }}" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">在籍期間</label>
                                <div class="col-sm-10"><input type="text" name="latest_school_period" placeholder="placeholder" value="{{ old('latest_school_period', $user->latest_school_period) }}" class="form-control"></div>
                            </div>

                            <hr>

                             <div class="form-group"><label class="col-sm-2 control-label">その他学歴</label>
                                <div class="col-sm-10"><input type="text" name="other_school"　placeholder="placeholder" value="{{ old('other_school', $user->other_school) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">学部・学科</label>
                                <div class="col-sm-10"><input type="text" name="other_major" placeholder="placeholder" value="{{ old('other_major', $user->other_major) }}" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">在籍期間</label>
                                <div class="col-sm-10"><input type="text" name="other_school_period" placeholder="placeholder" value="{{ old('other_school_period', $user->other_school_period) }}" class="form-control"></div>
                            </div>    

                            <button type="submit" class="btn btn-primary block full-width m-b">更新</button>

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
<script src="{{{secure_asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{secure_asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>

<script src="{{{secure_asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}}"></script>

<script src="{{{secure_asset('/assets/js/inspinia.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/plugins/pace/pace.min.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/add.js')}}}"></script>
@stop

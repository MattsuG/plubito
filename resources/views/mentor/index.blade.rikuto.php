@extends('common.layout')
@section('TitleAndCss')
<title>show.php | トーク一覧</title>

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
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{{asset('/assets/img/about/1.jpg')}}}" />
                             </span>
                        <a class="dropdown-toggle" href="#">
                            <span class="clear"> 
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold">お名前</strong>
                                </span> 
                                <span class="text-muted text-xs block">職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。</span>
                            </span>
                        </a>                        
                    </div>
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <b class="caret"></b></span></span></a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">プロフィール編集</a></li>
                            <li><a href="profile.html">パスワード編集</a></li>
                            <li><a href="profile.html">Email編集</a></li>
                            <li><a href="contacts.html">メッセージBOX</a></li>   
                            <li class="divider"></li>
                            <li><a href="login.html">ログアウト</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        +ヒト
                    </div>
                </li>
                <!-- <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="{{ url('mentor/create')}}"><i class="fa fa-plus"></i> <span class="nav-label">トーク作成</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">アカウント編集</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">プロフィール編集</a></li>
                        <li><a href="graph_morris.html">Email編集</a></li>
                        <li><a href="graph_rickshaw.html">パスワード編集</a></li>                       
                    </ul>
                </li>                
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <!-- <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">トーク一覧ページへようこそ</span>
                </li>
                <li>
                    <a href="/">
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
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading inbox-title">
                <div class="col-lg-9ƒ">
                    <h2>トーク一覧</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">ホーム</a>
                        </li>
                        <li class="active">
                            <strong>トーク一覧</strong>
                        </li>
                    </ol>
                </div>
            </div>

    <!--     <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a href="profile.html">

                        <img alt="image" class="img-circle" src="img/a2.jpg">


                        <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                        <div class="font-bold">Graphics designer</div>
                        <address class="m-t-md">
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a href="profile.html">

                        <img alt="image" class="img" src="img/headphones.jpg">


                        <h3 class="m-b-xs"><strong>Alex Johnatan</strong></h3>

                        <div class="font-bold">CEO</div>
                        <address class="m-t-md">
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                        </div>
                    </div>

                </div>
            </div> -->
                <div class="row">
                    <form role="search" class="navbar-form" action="{{ url('/mentor') }}">
                        <div class="form-group">
                            <select class="form-control" name="search_category">
                                <option value="" selected>カテゴリを選択</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" placeholder="検索ワード" class="form-control" name="search_word" id="top-search">
                        </div>
                    </form>
                </div>
                <div class="row">
                    @foreach ($talks as $talk)             
                        <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                            <div class="pricing-box-inner">
                                <div class="pricing-box-price">
                                <img src="img/headphones.jpg" alt="">
                                </div>
                                <h3>{{ $talk->title }}</h3>
                                <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
                                <div class="pricing-box-features">
                                    <ul>
                                        <li>{{ $talk->title }}</li>
                                        <li>{{ $talk->price }}</li>
                                        <li><a href="{{ url('mentor/'.$talk->talk_id) }}"><button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i> 詳細をみる</button></a></li>                              
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="footer">                       
                        <div>
                            <strong>Copyright</strong> Example Company &copy; 2014-2015
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

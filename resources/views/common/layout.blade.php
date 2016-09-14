<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('TitleAndCss')
</head>
<body class="gray-bg">
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">                         
                            <a href="/mentor"><img alt="image" class="img" src="{{asset('/assets/img/plus.png')}}" width="25px" height="50px" /></a>
                    </div>
                    <div class="dropdown profile-element"> 
                        <span>
                            @if (!empty(Auth::user()->profile_picture_path))
                            <img alt="image" class="img-circle" src="{{asset(Auth::user()->profile_picture_path)}}">
                            @endif
                            @if (empty(Auth::user()->profile_picture_path))
                            <img alt="image" class="img-circle" src="/assets/img/default_thumbnail.jpg">
                            @endif
                        </span>
                        <a class="dropdown-toggle" href="#">
                            <span class="clear"> 
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold">{{ Auth::user()->lastname }}&nbsp{{ Auth::user()->firstname }}</strong>
                                </span> 
                                <span class="text-muted text-xs block">{{ Auth::user()->introduction }}</span>
                            </span>
                        </a>                        
                    </div>                    
                    <div class="logo-element">
                        <a href="/mentor"><img alt="image" class="img" src="{{asset('/assets/img/plus.png')}}" width="25px" height="50px" /></a>
                    </div>
                </li>
                <li>
                    <a href="{{ url('/user/show') }}"><i class="fa fa-user"></i> <span class="nav-label">プロフィール表示</span></a>
                </li>
                <li>
                    <a href="{{ url('/user/edit') }}"><i class="fa fa-pencil"></i> <span class="nav-label">プロフィール編集</span></a>
                </li>

                @if ((int)Auth::user()->role === 1)
                <li>
                    <a href="{{ url('/mentor/create')}}"><i class="fa fa-bullhorn"></i> <span class="nav-label">トーク作成</span></a>
                </li>
                @endif
                 <li>
                    <a href="{{ url('/user/message') }}"><i class="fa fa-comment"></i> <span class="nav-label">メッセージ</span></a>
                </li>  
                <li>
                    <a href="{{ url('/user/mypage') }}"><i class="fa fa-calendar"></i> <span class="nav-label">マイページ</span></a>
                </li>                 
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="white-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">トーク一覧ページへようこそ</span>
                    </li>
                    <li>
                        <a href="/auth/logout">
                            <i class="fa fa-sign-out"></i> ログアウト
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
	@yield('content')
	    <div class="row">
        <hr>
            <footer>
                <section id="contact" class="gray-section contact">
                    <div class="container">
                        <div class="row m-b-lg">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                          <!--       <h1>お問い合わせ</h1> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <!-- <a href="mailto:test@email.com" class="btn btn-primary">お問い合わせメール</a> -->
                                <!-- <p style="font-size: 18px; color: #676a6c;">
                                    (株)タイムラグ<br>
                                    Email:info@timelag.co.jp<br>
                                </p> -->
                                <ul class="list-inline social-icon">
                                    <li><a href="https://twitter.com/plubito"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://www.facebook.com/plubito/"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <ul class="list-inline termlink">
                                    <li><a href="terms">利用規約</a></li>
                                    <li><a href="privacy">個人情報</a></li>
                                    <li><a href="tradeterm">特定商取引法</a></li>
                                    <li><a href="qa">Q & A</a></li>
                                    <li><a href="howtouse">使い方</a></li>
                                    <li><a href="becometalker">話し手になる</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 text-center m-b-lg">
                            <hr>
                                <p>&copy; 2016 All right reserved by Timelag.Inc</p>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
        </div>
    </div>
</div>
	@yield('Js')
</body>
</html>
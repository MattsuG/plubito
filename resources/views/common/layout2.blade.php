<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('TitleAndCss')
</head>
<body class="gray-bg">
	<!-- Top menu -->
	<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
        <div class="container">
            <div class="navbar-header" style="background: white";>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1" style="background-color: #000000";>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Plubito Landing Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1" style="background-color: #fff">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="scroll-link" href="#features">＋ヒトについて</a></li>
                    <li><a class="" href="/mentor">トーク検索</a></li>
                    <li><a class="" href="/auth/login">ログイン</a></li>
                    <li><a class="btn btn-link-2" href="/auth/register">サインアップ</a></li>
                </ul>
            </div>
        </div>
	</nav>
	@yield('content')
<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 footer-about wow fadeInUp">
				<h4>+ヒトについて</h4>
				<p>
					<a href="qa">Q & A</a><br>
					<a href="howtouse">使い方</a><br>
					<a href="becometalker">話し手になる</a><br>
					<!-- <a>運営会社</a><br> -->		
				</p>
			</div>
			<div class="col-sm-4 footer-contact-info wow fadeInDown">
				<h4>コンタクト</h4>
				<p><i class="fa fa-envelope"></i> Email:　info@timelag.co.jp</a></p>	             
			</div>
			<div class="col-sm-4 footer-social wow fadeInUp">
				<h4>ソーシャルメディア</h4>
				<p>
					<a href="https://www.facebook.com/Timelag%E3%83%96%E3%83%AD%E3%82%B0-1000788249945274/?fref=ts"><i class="fa fa-facebook"></i></a> 
					<a href="#"><i class="fa fa-twitter"></i></a>  
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 footer-copyright">
				&copy; All right reserved by TIMELAG Inc.
			</div>
			<div class="col-sm-6 footer-menu">
				<ul>
					<li><a class="scroll-link" href="#top-content">ページトップ</a></li>
					<li><a href="terms">利用規約</a></li>
					<li><a href="privacy">個人情報</a></li>
					<li><a href="tradeterm">特定商取引法</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- MODAL: How it works -->
<div class="modal fade" id="modal-how-it-works" tabindex="-1" role="dialog" aria-labelledby="modal-how-it-works-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="modal-video">
    				<div class="embed-responsive embed-responsive-16by9">
	                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/84910153?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=42bfc2" 
	                    			webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	                </div>
                </div>
			</div>
		</div>
	</div>
</div>
	@yield('Js')
</body>
</html>
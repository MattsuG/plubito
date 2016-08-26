@extends('common.layout2')
@section('TitleAndCss')
<title>TopPage</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/media-queries.css')}}}">
@stop

@section('content')
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
            <a href="#"><img alt="image" class="img" src="{{{asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
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

<div class="terms_title">
    <h3>特定商取引法に基づく表記</h3>
</div>
<div class="terms_body">
    <p><br>
    <h3>特定商取引法に基づく表記</h3><br><br>
    運営会社<br>
    株式会社タイムラグ<br><br>

    運営責任者<br>
    吉田大樹<br><br>

    所在地<br>
    〒111-0034　東京都台東区雷門2-5-1-901<br><br>

    役務の対価<br>
    Webサイト上に表示される支払金額のうち30%をシステム手数料として当社が話し手より受領します。<br><br>

    支払方法<br>
    聞き手はPaypal (http://www.paypal.jp/jp）の提供する決済システム上で当社宛に謝礼の支払いを行ない、当社は、決済された謝礼のうち30％をシステム手数料として受領し70％を話し手に支払います。<br><br>

    支払時期<br>
    聞き手による当社宛の謝礼の決済をもってマッチングは成立するものとします。当社から話し手への振込は、月末締めの翌月末に行なわれます。<br><br>

    返金について<br>
    聞き手の都合によるキャンセルの場合、原則返金を行いません。話し手の都合によるキャンセルの場合、全額を聞き手に返金します。聞き手の予約リクエストを話し手が承諾することにより決定した登録実施日時から1週間以内をクレーム受付期間とし、クレームがあった場合は当社が仲裁を行ない返金の可否を判断します。<br><br>

    連絡先<br>
    info@timelag.co.jp<br><br>

    </p>
</div>
<!-- Footer -->
<footer>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-4 footer-about wow fadeInUp">
    			<h4>+ヒトについて</h4>
    			<p>
                    <a>よくある質問</a><br>
                    <a>使い方</a><br>
                    <a>運営会社</a><br>		
    			</p>
    			<p>
            		<a class="scroll-link" href="#about-us">Learn More</a>
            	</p>
            </div>
    		<div class="col-sm-4 footer-contact-info wow fadeInDown">
    			<h4>コンタクト</h4>
            	<p><i class="fa fa-map-marker"></i> xxxxxxxxxxxxx</p>
            	<p><i class="fa fa-envelope"></i> Email: <a href="xxxx@gmail.com">xxxxxxxxx@timelag.com</a></p>	             
            </div>
            <div class="col-sm-4 footer-social wow fadeInUp">
            	<h4>ソーシャルメディア</h4>
            	<p>
                	<a href="#"><i class="fa fa-facebook"></i></a> 
					<a href="#"><i class="fa fa-twitter"></i></a>  
				</p>
            </div>
        </div>
        <div class="row">
   			<div class="col-sm-6 footer-copyright">
            	&copy; All right reserved by <a href="">TIMELAG Inc.</a>
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
@stop
@section('Js')
<script src="{{{asset('/assets/js/jquery-1.11.1.min.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>
<script src="{{{asset('assets/js/jquery.backstretch.min.js')}}}"></script>
<script src="{{{asset('/assets/js/wow.min.js')}}}"></script>
<script src="{{{asset('/assets/js/retina-1.1.0.min.js')}}}"></script>
<script src="{{{asset('assets/js/scripts.js')}}}"></script>
<script>
$(function(){
    var $setElm = $('h3.abbreviation3');
    var cutFigure = '11'; // カットする文字数
    var afterTxt = ' …'; // 文字カット後に表示するテキスト

    $setElm.each(function(){
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))

        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });
});
</script>
@stop

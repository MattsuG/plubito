@extends('common.layout')
@section('TitleAndCss')
<title>TopPage</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
<link rel="stylesheet" href="{{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{secure_asset('/assets/css/media-queries.css')}}}">
@stop

@section('content')

    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>
				
        <!-- Top content -->
        <div class="top-content">
        	
        	<!-- Top menu -->
			<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#"><img alt="image" class="img" src="{{{asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-navbar-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="scroll-link" href="#features">＋ヒトについて</a></li>
							<li><a class="" href="/mentor">トーク検索</a></li>
							<li><a class="" href="/auth/login">ログイン</a></li>
							<li><a class="btn btn-link-2" href="/auth/register">サインアップ</a></li>
						</ul>
					</div>
				</div>
			</nav>
        
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-12 text">
                            <!-- <h1 class="wow fadeInLeftBig">+ヒト</h1> -->
                            <div class="description wow fadeInLeftBig">
                            	<p>
	                            その進路のこと話します。
                            	</p>
                            </div>
                            <!-- <div class="subscribe wow fadeInUp">
	                			<form class="form-inline" role="form" action="assets/subscribe.php" method="post">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="subscribe-email"></label>
			                        	<input type="text" name="email" placeholder="カテゴリ検索" class="subscribe-email form-control" id="subscribe-email">
			                        </div>
			                        <button type="submit" class="btn">検索</button>
			                    </form>
			                    <div class="success-message"></div>
                            </div> -->
                        </div>
                    </div>
                    
                    <!-- <div class="row">
	                	<div class="col-sm-8 col-sm-offset-2 top-video-link medium-paragraph wow fadeInUp">
	                		<a href="#" class="launch-modal" data-modal-id="modal-how-it-works">
		                		<span class="top-video-link-icon"><i class="fa fa-play"></i></span>
		            			<span class="top-video-link-text">See how it works</span>
	                		</a>
	                	</div>
	                </div> -->
	                
	                <div class="row">
	                	<div class="col-sm-12 top-social wow fadeInUp">
                            <span class="divider-2"></span>
	                		<a href="#"><i class="fa fa-facebook"></i></a> <span class="divider-2"></span> 
							<a href="#"><i class="fa fa-twitter"></i></a> <span class="divider-2"></span> 
	                	</div>
	                </div>
                    
                </div>
            </div>
        </div>    
        <!-- How it works -->
        <div class="how-it-works-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 how-it-works section-description wow fadeIn">
	                    <h2>+ヒトへようこそ</h2>
	                    <p>
	                    ＋ヒトは、進路に関わる情報を自分のネットワークを越えて個人から入手できるようにするマッチングサービスです。
						<br>直接話すことで、個人が経験した実践的な情報を効率良く聞くことができます。</p>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-3  how-it-works-box wow fadeInUp">
	                	<div class="how-it-works-box-icon">
	                		<i class="fa fa-search fa-5x" aria-hidden="true"></i>
	                	</div>
	                    <h3>トークを検索</h3>
	                    <p>カテゴリ検索やキーワード検索で聞いてみたいトークを検索</p>
                    </div>
                    <div class="col-sm-3  how-it-works-box wow fadeInUp">
	                	<div class="how-it-works-box-icon">
	                		<i class="fa fa-commenting fa-5x" aria-hidden="true"></i>
	                	</div>
	                    <h3>メッセージ</h3>
	                    <p>話し手とのメッセージで事前にオンライン通話サービスのIDを交換</p>
                    </div>
                    <div class="col-sm-3  how-it-works-box wow fadeInDown">
	                	<div class="how-it-works-box-icon">
	                		<i class="fa fa-paper-plane fa-5x" aria-hidden="true"></i>
	                	</div>
	                    <h3>予約リクエスト</h3>
	                    <p>聞いてみたいトークが見つかったら詳細ページから予約リクエスト</p>
                    </div>
                    <div class="col-sm-3 how-it-works-box wow fadeInDown">
	                	<div class="how-it-works-box-icon">
	                		<i class="fa fa-headphones fa-5x" aria-hidden="true"></i>
	                	</div>
	                    <h3>話す</h3>
	                    <p>自分の進路の参考にできる情報を質問したり、体験談を聞く</p>
                    </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link fa-5x" href="#pricing">詳しい使い方</a>
	            	</div>
	            </div>
	        </div>
        </div>
     	
     	<!-- More features 2 -->
        <div class="more-features-2-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 how-it-works section-description wow fadeIn">
	                    <h2>カテゴリ</h2>
	                </div>
	            	<div class="col-sm-3 more-features-2-box wow fadeInLeft">
	                    <img src="assets/img/about/job.jpg" alt="" with="50%">
	                </div>
	                <div class="col-sm-9 more-features-2-box more-features-2-box-right wow fadeInUp">
	                	<h3>就職・転職・起業。仕事について考えるとき:</h3>
                    	<p>
                    	大学3年から就職活動をして就職、長い間その企業でつとめる、そんな人生からすこし外れた経歴を持った人たちの話。
                    	</p>
                    	<p>
                    	転職を複数回した経験のある人、起業経験者、大企業とスタートアップをどちらも経験した人、就活せずフリーランスで生きている人など。
                    	</p>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- Many options -->
        <div class="many-options-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-9 many-options-box wow fadeInLeft">
	                    <h3>海外へ出ようと思う人へ:</h3>
                    	<p>
                    	海外大学・大学院へ留学した人、現地で就職した人など。
                    	実際に行ってみないと分からない情報や準備でしたことなど実践的な話。
                    	</p>
	                </div>
	                <div class="col-sm-3 many-options-box many-options-box-right wow fadeInUp">
	                    <img src="assets/img/about/studyabroad.jpg" alt="">
	                </div>
	            </div>
	        </div>
        </div>
        <div class="more-features-2-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 how-it-works section-description wow fadeIn">
	                </div>
	            	<div class="col-sm-3 more-features-2-box wow fadeInLeft">
	                    <img src="assets/img/about/study.jpg" alt="" with="50%">
	                </div>
	                <div class="col-sm-9 more-features-2-box more-features-2-box-right wow fadeInUp">
	                	<h3>大学受験以外の選択肢が気になったら:</h3>
                    	<p>
                    	受験勉強して大学へ行くことが当たり前だったこれまで。今は、もっといろんな選択肢がある。
                    	大学受験せずに他の進路を走っている人、大学へ入学したけれど中退して別の道を選んだ人など。
                    	</p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link fa-5x" href="#pricing">トーク検索</a>
	            	</div>
	            </div>
	        </div>
        </div>
		<!-- Pricing -->
        <div class="pricing-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 pricing section-description wow fadeIn">
	                    <h2>新しいトーク</h2>
	                </div>
	            </div>

	            <div class="row"> 
                    @foreach ($talks as $talk)         
                        <div class="col-sm-3 pricing-box pricing-box-best wow fadeInDown">
                            <div class="pricing-box-inner">
                                <div class="pricing-box-price">
                                <img src="{{{secure_asset($talk->pic0_path)}}}" alt="">
                                </div>
<<<<<<< HEAD
                                <p class="abbreviation3">{{ $talk->title }}</p>
                                <p>いいね:{{ count($talk->likes) }}人 トーク:{{ $talk->applications_count }}人</p>
=======
                                <h3 class="abbreviation3">{{ $talk->title }}</h3>
                                <h4>興味あり:{{ count($talk->likes) }}人 申込者:{{ count($talk->applications) }}人</h4>
>>>>>>> master
                                <div class="pricing-box-features">
                                    <ul>
                                        <li>{{ $talk->name }}</li>
                                        <!-- <li>価格:{{ $talk->price }}</li> -->
                                        <li><a href="{{ url('auth/login') }}"><button type="button" class="btn btn-default btn-sm btn-block">詳細を見る</button></a></li>                 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach  
                </div>
<<<<<<< HEAD
                <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link fa-5x" href="#pricing">トーク検索</a>
	            	</div>
=======
	        </div>
	    </div>
        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeIn">
	                    <h2>ユーザーの声</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp">
	                	<div role="tabpanel">
	                		<!-- Tab panes -->
	                		<div class="tab-content">
	                			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
	                				<div class="testimonial-image">
	                					<img src="{{{secure_asset('/assets/img/testimonials/1.jpg')}}}" alt="" data-at2x="assets/img/testimonials/1.jpg')}}}">
	                					<div class="testimonial-icon">
	                						<span aria-hidden="true" class="typcn typcn-pin"></span>
	                					</div>
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"ブログでは手に入らない生の情報が聞けてよかったです"<br>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab2">
	                				<div class="testimonial-image">
	                					<img src="{{{secure_asset('/assets/img/testimonials/2.jpg')}}}" alt="" data-at2x="assets/img/testimonials/2.jpg')}}}">
	                					<div class="testimonial-icon">
	                						<span aria-hidden="true" class="typcn typcn-pin"></span>
	                					</div>
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"進路選択で失敗した経験、どの様に取り戻していったか、そんなセンシティブな話は他ではなかなか聞けなかったので利用しました。"<br>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab3">
	                				<div class="testimonial-image">
	                					<img src="{{{secure_asset('/assets/img/testimonials/3.jpg')}}}" alt="" data-at2x="assets/img/testimonials/3.jpg')}}}">
	                					<div class="testimonial-icon">
	                						<span aria-hidden="true" class="typcn typcn-pin"></span>
	                					</div>
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"実践した本人の話は、説得力がありました。"<br>
		                                </p>
	                                </div>
	                			</div>
	                		</div>
	                		<!-- Nav tabs -->
	                		<ul class="nav nav-tabs" role="tablist">
	                			<li role="presentation" class="active">
	                				<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
	                			</li>
	                		</ul>
	                	</div>
	                </div>
>>>>>>> master
	            </div>
	        </div>
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
                    </div>
	        		<div class="col-sm-4 footer-contact-info wow fadeInDown">
	        			<h4>コンタクト</h4>
	                	<p><i class="fa fa-envelope"></i> Email: <a href="xxxx@gmail.com">info@timelag.co.jp</a></p>	             
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
                    		<li><a class="scroll-link" href="#top-content">トップ</a></li>
							<li><a href="#">利用規約</a></li>
							<li><a href="#">プライバシーポリシー</a></li>
							<li><a href="#">特定商取引法</a></li>
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
<script src="{{{secure_asset('/assets/js/jquery-1.11.1.min.js')}}}"></script>
<script src="{{{secure_asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>
<script src="{{{secure_asset('assets/js/jquery.backstretch.min.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/wow.min.js')}}}"></script>
<script src="{{{secure_asset('/assets/js/retina-1.1.0.min.js')}}}"></script>
<script src="{{{secure_asset('assets/js/scripts.js')}}}"></script>
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

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
    <h3>個人情報保護方針・個人情報の取り扱い</h3>
</div>
<div class="terms_body">
    <p><br>
    <h3>個人情報保護方針</h3><br><br>
    第一条　個人情報保護理念<br>
    当社は、進路情報の提供及びそれに付帯するサービスを提供する事業者として取扱う個人情報の重要性と社会的責任についてよく認識し、当社における個人情報保護への活動を日々推進しています。当社は、取扱う個人情報をお預かりする際には、個人情報保護を厳正に取扱います。<br><br>

    第二条　個人情報の取得と利用及び提供<br>
    当社は取得目的を明確にした上で、目的の範囲内に限り、個人情報を取得します。また個人情報の利用及び提供は、その取得目的から逸脱しない範囲とします。目的外利用は行いません。<br><br>

    第三条　準拠法等<br>
    当社は、当社が保有する個人情報に関して適用される「行政手続における特定の個人を識別するための番号の利用等に関する法律（以下、番号法と呼ぶ）」、「個人情報の保護に関する法律（以下、個人情報保護法と呼ぶ）」などの法令、国が定める指針その他規範を遵守いたします。<br><br>

    第四条　個人情報の管理と保護<br>
    個人情報の管理は、厳重に行うこととし、お客さまにご承諾いただいた場合又は法令に基づく場合を除き、第三者に対しデータを開示・提供することはいたしません。また個人情報に関する漏えい、滅失又はき損を防ぐための適切な予防並びに是正処置を行います。<br><br>

    第五条　苦情及び相談への対応<br>
    本件に関する問い合わせ先は、以下になります。<br>
    株式会社タイムラグ　苦情相談窓口<br>
    e-mail：info@timelag.co.jp<br>
    受付時間：10:00〜18:00　※ 土日、祝日、年末年始、GW期間は翌営業日以降の対応とさせていただきます。<br><br>

    第六条  個人情報保護マネジメントシステムの継続的改善<br>
    当社では、個人情報保護に関する管理の体制と仕組みについて継続的改善を実施いたします。<br><br>

    制定日　2016年8月20日<br>
    株式会社タイムラグ<br>
    代表取締役　吉田大樹<br><br><br>


    <h3>個人情報の取り扱い</h3><br><br>

    当社は取り扱う業務の中で取得する皆様の個人情報を、以下に記載する方法により細心の注意を払って管理します。<br>

    1.個人情報の利用目的<br>

    当社は皆様の個人情報を下記の目的で取得・利用させていただきます。ご提供いただいた個人情報を目的の範囲をこえて利用することはありません。<br>
    （1）サービスの提供及びサービス提供に関連するご連絡、及び関連するメール送信のため<br>
    （2）本サービスの改善や新サービスの開発等に役立てるための統計データ作成<br>
    （3）イベント企画、キャンペーン等の応募又はご登録に伴う確認、連絡、キャンペーンコンテンツの送信又は景品等の送付<br>
    （4）本サービス画面上に表示する情報、サービス、広告等の利用者の趣味、嗜好等に合わせたカスタマイズ<br>
    （5）その他、本サービスの適切な運営<br>
    ※なお、個別に利用目的を明示または通知する場合には、その利用目的によるものとします。<br><br>

    2.個人情報の第三者提供に関して<br>

    （1）当社は、お客様の個人情報を、あらかじめお客様の同意を得ることなく第三者に委託及び提供することはありません。ただし、次の場合は除きます。<br>
    1.あらかじめ、本人に必要事項を明示又は通知し、かつ同意頂いた範囲内で、サービス提供のために必要な情報を他の会員に開示する場合<br>
    2.法令に基づく場合<br>
    3.本人ならびに公衆の生命・身体・財産を脅かす可能性がある場合<br>
    4.公衆の衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難な場合<br>
    5.国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する場合であって、本人の同意を得ることにより当該事務の遂行に支障をきたす場合<br>
    6.合併その他の事由による事業の承継が行われる場合で、承継前の利用目的の範囲内で当該個人情報を取扱う場合<br>
    7.当社が業務の一部又は全部を他社に委託する場合で当該委託先に開示又は提供する場合<br>
    8.本サービス画面上に表示する情報、サービス、広告等の利用者の趣味、嗜好等に合わせてカスタマイズする場合で当該カスタマイズのために広告掲載企業等に開示又は提供する場合<br>

    （2）第三者提供した場合には、受領者側としては提供者の氏名やデータ取得経緯等を確認し、一定期間その内容を保存し、提供者側に立った場合も、受領者の氏名等を一定期間保存いたします。<br><br>

    3.業務委託について<br>
    当社は、正当な利用目的の範囲において、当社の業務委託先などにお客様の個人情報を、開示、委託または提供する場合があります。その際には、当社と委託先会社または提携会社間の委託契約や機密保持契約などにおいて、個人情報保護に関する契約を締結した上で、個人情報の開示、委託または提供を行います。但し、提供するお客様の個人情報は、当該業務の遂行に必要となる最低限の個人情報のみとし、また使用範囲もその範囲に限定します。<br><br>

    4.当社ウェブサイトにおける個人情報のお取扱い<br>
    当社は本ウェブサイトを通じて、利用者のPCに対してクッキーを送信することがあります。<br>利用者のPCに設定されたクッキーは、そのPCを識別して利用者の便宜を図る等の目的で使用されます。 <br>現在の多くのブラウザは、クッキーを受け入れるように初期設定されています。 利用者はご自身の判断で、クッキーを拒否するように、又はクッキーが送信されていることを表示するようにブラウザを再設定することもできます。<br>ただし、クッキーを拒否すると本ウェブサイトの一部が正常に機能しない場合があることにご留意ください。<br><br>

    5.個人情報の開示・訂正・削除（利用停止）等のお問い合わせについて<br>
    当社にて保有する個人情報につきましては、保有個人データの本人またはその代理人からの開示・訂正・削除等のご請求に対応させて頂いております。開示・訂正・削除等をご希望される場合は、個人情報苦情及び相談窓口宛にご連絡いただきますようお願いいたします。尚、お問い合わせの際、本人またはその代理人であることや、当社との取引状況等を確認させて頂く場合があります。ご請求があった場合には、合理的な範囲内で遅滞なく対応させて頂きます。<br><br>

    6.個人情報苦情及び相談窓口<br>
    株式会社タイムラグ　苦情相談窓口<br>
    e-mail：info@timelag.co.jp<br>
    受付時間 ： 10:00～18:00<br>
    ※土日、祝日、年末年始、GW期間は翌営業日以降の対応とさせていただきます。<br><br>
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
            </div>
            <div class="col-sm-4 footer-contact-info wow fadeInDown">
                <h4>コンタクト</h4>
                <p><i class="fa fa-envelope"></i> Email: <a href="info@timelag.co.jp">info@timelag.co.jp</a></p>                 
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

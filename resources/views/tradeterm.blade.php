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

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
    <h3>使い方</h3>
</div>
<div class="terms_body">
    <p><br>
    <h3>使い方</h3><br><br>
    
    <h3>1.メンター検索</h3>
    <p>ログイン後の「トーク一覧」ページで興味のあるトークを検索。</p>
    <p>詳細を見るボタンを押すとそのトークの詳細、話し手の情報が観れる「トーク詳細」ページが表示されます。</p><br><br>
    
    <h3>2.予約リクエスト申請</h3><br><br>
    <p>「トーク詳細」ページの予約リクエストボタンを押すと、そのトークの話し手にリクエストが送信されます。</p><br><br>
    
    <h3>3.メッセージ</h3><br><br>
    <p>予約リクエストを送った後、聞き手、話し手どちらからでも良いのでメッセージで日時を相談してください。</p><br><br>
    
    
    <h3>4.予約リクエスト承認</h3><br><br>
    <p>メッセージでのやり取りで日時が決まると、話し手がその情報を入れて予約リクエストを承認します。</p><br><br>
    
    <h3>5.支払い</h3><br><br>
    
    <h3>6.トーク</h3><br><br>
    
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

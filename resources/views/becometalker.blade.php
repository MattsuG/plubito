@extends('common.layout_no_sidebar')
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
    <h3>話し手になる</h3>
</div>
<div class="terms_body">
    <br>
    <h3>話し手をご検討の方へ</h3><br><br>
    <p>この度は+ヒトの話し手をご検討頂きありがとうございます。</p>
    <p>話し手の登録は下記の流れで行っています。</p><br>
    <p>1. info@timelag.co.jpへ話し手になりたい旨とスカイプIDをご連絡下さい。</p><br>
    <p>2. 日時を相談の上、+ヒト運営側が３０分ほどスカイプで面接や説明をさせて頂きます。</p><br>
    <p>3. 運営側とのスカイプ後、話し手として登録させて頂きます。</p><br>
    <p>4. 話し手としての登録が完了しますと、サイドバーよりトークを作成できるようになります。</p><br><br>
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

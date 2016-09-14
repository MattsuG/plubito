@extends('common.layout_no_sidebar')
@section('TitleAndCss')
<title>TopPage</title>
    <link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">
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
@stop

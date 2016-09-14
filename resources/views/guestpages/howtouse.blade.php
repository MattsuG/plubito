@extends('common.layout_no_sidebar')
@section('TitleAndCss')
<title>TopPage</title>
<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
@stop

@section('content')
<div class="terms_title">
    使い方
</div>
<div class="terms_body">
    <p><br>
    使い方<br><br>
    
    1.メンター検索
    <p>ログイン後の「トーク一覧」ページで興味のあるトークを検索。</p>
    <p>詳細を見るボタンを押すとそのトークの詳細、話し手の情報が観れる「トーク詳細」ページが表示されます。</p><br><br>
    
    2.予約リクエスト申請<br><br>
    <p>「トーク詳細」ページの予約リクエストボタンを押すと、そのトークの話し手にリクエストが送信されます。</p><br><br>
    
    3.メッセージ<br><br>
    <p>予約リクエストを送った後、聞き手、話し手どちらからでも良いのでメッセージで日時を相談してください。</p><br><br>
    
    
    4.予約リクエスト承認<br><br>
    <p>メッセージでのやり取りで日時が決まると、話し手がその情報を入れて予約リクエストを承認します。</p><br><br>
    
    5.支払い<br><br>
    
    6.トーク<br><br>  
    </p>
</div>
@stop
@section('Js')
</script>
@stop

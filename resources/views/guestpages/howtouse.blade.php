@extends(Auth::user() ? 'common.layout' : 'common.layout_no_sidebar')

@section('TitleAndCss')
<title>TopPage</title>
<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">
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
</script>
@stop

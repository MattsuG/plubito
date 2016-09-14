@extends(Auth::user() ? 'common.layout' : 'common.layout_no_sidebar')

@section('TitleAndCss')
<title>TopPage</title>
<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">
@stop

@section('content')
<div class="terms_title">
    <h3>Q & A</h3>
</div>
<div class="terms_body">
    <p><br>
    <h3>・＋ヒトとは</h3>
    <p>＋ヒトは、進路に関わる情報を自分のネットワークを越えて個人から入手できるようにするマッチングサービスです。 
    直接話すことで、個人が経験した実践的な情報を効率良く聞くことができます。</p>
    <h3>・話し手になるには</h3>
    <p>話し手をご検討の方は<a href="becometalker">こちら</a>をご参照下さい。</p><br><br><br>
</div>
@stop
@section('Js')
@stop

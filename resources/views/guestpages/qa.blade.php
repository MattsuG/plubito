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
    <p><br><br><br>
    
    ・＋ヒトとは<br>
    ＋ヒトは、進路に関わる情報を自分のネットワークを越えて個人から入手できるようにするマッチングサービスです。 
    直接話すことで、個人が経験した実践的な情報を効率良く聞くことができます。<br><br><br>
    
    ・話し手になるには<br>
    話し手をご検討の方は<a href="becometalker">こちら</a>をご参照下さい。<br><br><br>

    ・聞き手から話し手へはどのように謝礼を支払えば良いですか？<br>
	（PayPal決済実装後記述致します）<br><br><br>

	・話し手はどのように謝礼を受け取れますか？<br>
	トーク成立日の翌月末に、ご指定の銀行口座にお支払いします。振込手数料は、話し手の方のご負担とさせていただいています。<br><br><br>


	・サービス利用料は別途かかりますか？<br>
	謝礼にサービス利用料（30%）が含まれます。聞き手の方は、サイトに掲載されている通りの金額をお支払いください。お支払いいただいた金額から、運営側でサービス利用料を差し引いた上で、話し手の方へ支払います。<br><br><br>

	・日程を再調整したい場合はどうすれば良いですか？<br>
	サイト上のメッセージ機能で延期にしたい旨を伝えてください。相手方から延期の同意がとれた後、改めてメッセージ上で候補日程の調整をしてください。予約リクエストや承認フローなどを、再度行う必要はありません。<br><br><br>

	・キャンセルしたい場合はどうすれば良いですか？<br>
	話し手が、やむを得ない理由でキャンセルする場合は、以下の方法で手続きをお願いします。<br>
	1)メッセージで聞き手へキャンセルの旨をご連絡ください。<br>
	2)聞き手への返金手続きのためinfo@timelag.co.jpまでご連絡ください<br>
	3)聞き手からのキャンセルは返金されません。日程を再調整したい場合は、こちらをご参考の上、話し手にご連絡ください。<br>
	4)「決済前は、トークが成立していないので、キャンセル費用は発生しません。メッセージで話し手へご連絡してください。<br>
	</p>
</div>
@stop
@section('Js')
@stop

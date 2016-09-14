@extends(Auth::user() ? 'common.layout' : 'common.layout_no_sidebar')

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
    <br><br>
    <h3>話し手をご検討の方へ</h3><br><br><br>
    <p>あなたのこれまでの進路やキャリアの経験を、これからユニークな進路を辿ろうとしている人にシェアしませんか？<br><br>

        受験や就職、転職のための情報やサービスは溢れています。身近な先輩にも、それらのステップを経験した人が多いはずです。<br><br>

        でも、少しユニークな進路を考えている人にとってはそうではありません。周囲に経験者がいないのため、進路を決めるための情報が十分に得られません。<br><br>

        話し手の皆さんも、そうった情報収集や判断材料の不足に困った経験があるのではないでしょうか？少し先にそういった経験をしてきた皆さんに、話し手として情報の提供やアドバイスをしていただきたいと思っています。<br><br><br><br>

        登録の流れ<br><br>
        会員としてご登録ください。http://plubito.jp/auth/register<br><br>
        個人ページの「プロフィール編集」より経歴などをご登録ください。<br><br>
        info@timelag.co.jpへ話し手になりたい旨とスカイプIDをご連絡ください。<br><br>
        日程を調整の上、スカイプでの簡単な面談とサービスの説明をさせていただきます。※面談は、ネットワークビジネスへの勧誘や、採用目的での利用など、コンセプトから外れる利用を防ぐ目的です。<br><br>
        運営側とのスカイプ面談後、話し手として登録させて頂きます。<br><br>
        話し手としての登録が完了しますと、サイドバーよりトークを作成できるようにす。<br><br>

        使い方はこちら<br><br>
    </p>
</div>
@stop
@section('Js')
@stop

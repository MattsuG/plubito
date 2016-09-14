 <p>
    ようこそ、{{ $user->lastname }} {{ $user->firstname }} さん
</p>
 
<p>
    この度はプラビトへの仮登録ありがとうございます。
</p>
 
<p>
    <a href="{{ url('auth/confirm', [$token]) }}">こちら</a>をクリックして本登録に進んでください。
</p>
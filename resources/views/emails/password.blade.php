 <p>
    {{ $user->lastname }} {{ $user->firstname }} さん
</p>
 
<p>
    パスワードリセット用のリンクをお送りします。
</p>
 
<p>
    <a href="{{ url('auth/reset', [$token]) }}">こちら</a>をクリックしてパスワードリセットに進んでください。
</p>
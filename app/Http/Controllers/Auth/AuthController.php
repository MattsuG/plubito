<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

// Email認証実装時に追加
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Config\Repository as Config;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/mentor';

    protected $loginPath = '/auth/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'getLogout']);
        $this->middleware('confirm', ['only' => 'postLogin']); // ① 追加
    }


    protected function create(Mailer $mailer, array $data, $app_key)
    {
        $user = new User;
 
        $user->lastname = $data['lastname'];
        $user->firstname = $data['firstname'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
 
        $user->makeConfirmationToken($app_key);
        $user->confirmation_sent_at = Carbon::now();
 
        $user->save();
 
        $this->sendConfirmMail($mailer, $user);
 
        return $user;
    }


    private function sendConfirmMail(Mailer $mailer, User $user)
    {
        $mailer->send(
            'emails.confirm',
            ['user' => $user, 'token' => $user->confirmation_token],
            function($message) use ($user) {
                $message->to($user->email, $user->firstname.'様')->subject('+ヒト 仮登録のお知らせ');
            }
        );
    }


    public function postRegister(Request $request, Mailer $mailer, Config $config)
    {
        $this->validate($request, [
            'lastname' => ['required', 'max:10'],
            'firstname' => ['required', 'max:10'],
            'email' => ['required', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6', 'max:12', 'alpha_num', 'regex:/[0-9a-zA-Z]/'],
            'term' => ['required'],
        ]);
 
        $this->create($mailer, $request->all(), $config->get('app.key'));
 
        \Session::flash('flash_message', '仮登録確認メールを送りました。メール内のリンクから本登録へお進みください。');
 
        return redirect('auth/login');
    }

    public function getResend() {
        return view('auth.resend');
    }

    public function postResend(Request $request, Mailer $mailer, Config $config) {

    $this->validate($request, ['email' => 'required|email']);
    $user = User::where('email', $request->email)->first();

    if(!$user) {
        \Session::flash('flash_message', '登録されていないメールアドレスです。');
        return redirect()->back()
        ->withInput($request->only('email'))
        ->withErrors(['email' => trans('passwords.user')]);
    }

        if($user->isConfirmed()) {
            \Session::flash('flash_message', '既に本登録が完了しています。ログインしてください。');
            return redirect('auth/login');
        }

        $this->sendConfirmMail($mailer, $user);
     
        \Session::flash('flash_message', 'ユーザー登録確認メールを送りました。');
        return redirect()->guest('auth/login');
    }

    //ユーザーを確認済にする
    public function getConfirm($token) {
        $user = User::where('confirmation_token', $token)->first();
        if (! $user) {
            \Session::flash('flash_message', '無効なトークンです。');
            return redirect('auth/login');
        }
 
        $user->confirm();
        $user->save();
 
        \Session::flash('flash_message', 'ユーザー登録が完了しました。ログインしてください。');
        return redirect('auth/login');
    }

}

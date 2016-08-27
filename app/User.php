<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon; // email認証実装時追加

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'occupation_id', 'profile_picture_path', 'introduction', 'birthday', 'pic3_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','confirmation_token', 'confirmed_at', 'confirmation_sent_at'
    ];
    // email認証実装時追加 'confirmation_token', 'confirmed_at', 'confirmation_sent_at'

    protected $dates = [  // ②email認証実装時追加
        'confirmed_at',
        'confirmation_sent_at',
    ];

    public function makeConfirmationToken($key) { // ③ email認証実装時追加
        $this->confirmation_token = hash_hmac(
            'sha256',
            str_random(40).$this->email,
            $key
        );
 
        return $this->confirmation_token;
    }

    public function confirm() { // ④ email認証実装時追加追加
        $this->confirmed_at = Carbon::now();
        $this->confirmation_token = '';
    }
 
    public function isConfirmed() { // email認証実装時追加⑤ 追加
        return ! empty($this->confirmed_at);
    }

    public function talks() {
        return $this->belongsToMany('App\Talk');
    }

    public function likes() {
        return $this->belongsToMany('App\Talk', 'likes')->withPivot('liked_at');
    }

    public function applications() {
        return $this->belongsToMany('App\Talk', 'applications')->withPivot('approved_flag', 'paid_flag', 'finished_flag', 'applied_at', 'approved_at', 'paid_at', 'finished_at');
    }

    public function appsToMe() {
        return $this->hasManyThrough('App\Application', 'App\Talk', 'mentor_id');
    }

    public function sendMails() {
        return $this->belongsToMany('App\Talk', 'mails', 'sender_id');
    }
    public function receivedMails() {
        return $this->belongsToMany('App\Talk', 'mails', 'received_id');
    }
}

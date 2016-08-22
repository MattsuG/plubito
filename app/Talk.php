<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
	protected $fillable = ['title', 'category_id', 'price', 'detail', 'pic0_path', 'pic1_path'];

	public function mentor() {
		return $this->belongsTo('App\User', 'mentor_id');
	}

	public function applications() {
		return $this->belongsToMany('App\User', 'applications')->withPivot('approved_flag', 'paid_flag', 'finished_flag', 'applied_at', 'approved_at', 'paid_at', 'finished_at');

	}

	public function likes() {
		return $this->belongsToMany('App\User', 'likes');
	}

    public function mails() {
        return $this->belongsToMany('App\User', 'mails')->withPivot('body', 'sent_at');
    }

	public function category() {
		return $this->belongsTo('App\Category');
	}
}
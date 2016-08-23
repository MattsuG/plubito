<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
	protected $fillable = ['user_id', 'talk_id', 'approved_flag', 'paid_flag', 'finished_flag', 'applied_at', 'approved_at', 'paid_at', 'finished_at'];
	public $timestamps = false;

	public function talk() {
		return $this->belongsTo('App\Talk');
	}
	public function user() {
		return $this->belongsTo('App\User');
	}
}

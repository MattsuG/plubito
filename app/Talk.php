<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
	protected $fillable = ['title', 'category_id', 'price', 'detail', 'pic0_path', 'pic1_path'];

	public function user() {
		return $this->belongsTo('App\User', 'mentor_id');
	}

	public function category() {
		return $this->belongsTo('App\Category');
	}
}
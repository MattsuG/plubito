<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
	protected $fillable = ['title', 'category_id', 'price', 'detail', 'pic0_path', 'pic1_path'];
}
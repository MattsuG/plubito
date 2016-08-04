<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class TopPageController extends Controller
{
    public function index() {
	    $talks = DB::table('talks as t')
	    ->select('t.id',
	             't.title',
	             't.category_id',
	             't.price',
	             't.detail',
	             't.pic0_path',
	             'c.category_name')
	    ->leftJoin('categories as c', 't.category_id', '=', 'c.id')
	    ->orderBy('created_at', 'desc')
	    ->take(6)
	    ->get();
	    $categories = DB::table('categories')->get();
	    return view("index", compact('talks', 'categories'));
    }
}

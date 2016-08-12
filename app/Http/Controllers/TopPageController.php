<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Talk;

class TopPageController extends Controller
{
    public function index() {
    	$talks = Talk::orderBy('created_at', 'desc')
	    ->take(6)
	    ->get();
	    $categories = DB::table('categories')->get();
	    return view("index", compact('talks', 'categories'));
    }

    public function terms() {
	    return view("/terms");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App;

class TopPageController extends Controller
{
    public function index() {
    	$talks = App\Talk::orderBy('created_at', 'desc')
	    ->take(6)
	    ->get();
	    $categories = App\Category::All();
	    return view("index", compact('talks', 'categories'));
    }
}

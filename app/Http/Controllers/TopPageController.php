<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Talk;

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
    public function terms() {
	    return view("/terms");
    }
    public function privacy() {
	    return view("/privacy");
    }
    public function tradeterm() {
	    return view("/tradeterm");
    }
    public function howtouse() {
        return view("/howtouse");
    }
    public function qa() {
        return view("/qa");
    }
    public function about() {
        return view("/about");
    }
    public function becometalker() {
        return view("/becometalker");
    }
}

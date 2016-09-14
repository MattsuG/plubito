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
        ->take(8)
        ->get();
        $categories = App\Category::All();
        return view('guestpages.index', compact('talks', 'categories'));
    }
    
    public function supportPages($path) {
        if (view()->exists('guestpages.'.$path)) {
            return view('guestpages.'.$path);
        } else {
            return view('errors.404');
        }
    
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Talk;

use App;

class TopPageController extends Controller
{
    public function index($path=null) {
        switch ($path) {
            case null:

                $talks = App\Talk::orderBy('created_at', 'desc')
                ->take(8)
                ->get();
                $categories = App\Category::All();
                return view("/guestpages.index", compact('talks', 'categories'));

                break;

            case 'terms':
                return view('/guestpages.terms');
                break;

            case 'privacy':
                return view('/guestpages.privacy');
                break;

            case 'tradeterm':
                return view('/guestpages.tradeterm');
                break;

            case 'howtouse':
                return view('/guestpages.howtouse');
                break;

            case 'qa':
                return view('/guestpages.qa');
                break;

            case 'about':
                return view('/guestpages.about');
                break;

            case 'becometalker':
                return view('/guestpages.becometalker');
                break;
        }
    }
}
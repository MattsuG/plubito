<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{

    public function show($id){
    	$user = User::findOrFail($id);
    	// dd($user->toArray());//dump die
    	return view("user/show")->with('user',$user);
    }
}

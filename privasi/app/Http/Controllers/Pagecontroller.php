<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request; */
use DB;
use Redirect;
use View;
class Pagecontroller extends Controller
{
	public function login(){
		return view('login');
	}
	
}

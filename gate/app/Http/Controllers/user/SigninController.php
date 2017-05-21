<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CommonLibrary\Utilities;

class SigninController extends Controller
{

	public function signin() {
		
		$access_hash = Utilities::makeAccessHash();
		return view('user/signin')->with('access_hash',$access_hash);
	}
	
	public function complete($access_hash) {
		
		
		return view('user/complete');
	}
}

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CommonLibrary\Utilities;
use Illuminate\Support\Facades\DB;

class SigninController extends Controller
{

	public function signin() {
		
		$access_hash = Utilities::makeAccessHash();
		return view('user/signin')->with('access_hash',$access_hash);
	}
	
	public function complete(Request $request, $access_hash) {
		
		// newUser
		// newPassword
		// _token
		var_dump($request->input('newUser'));
        var_dump($request->input('newPassword'));
		return view('user/complete');
	}
}

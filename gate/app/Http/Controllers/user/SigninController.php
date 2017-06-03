<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CommonLibrary\Utilities;
use Illuminate\Support\Facades\DB;
use App\LavelUser;
use App\Http\Requests\StoreRequest;
	
//use Illuminate\View\Middleware\ShareErrorsFromSession;

class SigninController extends Controller
{

	public function signin() {
		
		$access_hash = Utilities::makeAccessHash();
		return view('user/signin')->with('access_hash',$access_hash);
	}
	
	
	// https://www.phpdoc.org/docs/latest/index.html
	public function complete(StoreRequest $request, $access_hash) {
		
		// do to validate
		// この設定だけだとsaveされないだけなので、
		// FrontでもってJSで制御しておいた方が楽。
//		$this->validate($request, [
//			'Email' => 'required|unique:lavel_users|email',
//			'Password' => 'required|min:4',
//		]);
//		
		
		
		// newUser
		// newPassword
		// _token
//		var_dump($request->input('Email'));
//		var_dump($request->input('Password'));

		$LavelUser = new LavelUser;
//		var_dump($LavelUser);
		//ここはテーブルカラム名で指定
		$LavelUser->uniqeid = uniqid('pre_');
		$LavelUser->email = $request->input('Email');
		$LavelUser->password = $request->input('Password');
		$LavelUser->count = 1;
		$LavelUser->deleted_at;
		$LavelUser->save();
		
		return view('user/complete');
	}
}

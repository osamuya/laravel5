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

	public function signin(Request $request) {
		
		
//		全セッションのダンプ
//		var_dump($request->session()->all());
		
//		送信した内容を保存してFromに返す
		$old_email = '';
		if (isset($request->session()->all()["_old_input"]['Email'])) {
			$old_email = $request->session()->all()["_old_input"]['Email'];
		}
		$old_password = '';
		if (isset($request->session()->all()["_old_input"]['Password'])) {
			$old_password = $request->session()->all()["_old_input"]['Password'];
		}
		
//		var_dump($request->session()->get('Password'));
		if ($request->session()->has('Password')) {
			echo 'Hoooooooooooo!!!!!!!!';
		}
		
		$access_hash = Utilities::makeAccessHash();
		return view('user/signin')
			->with('access_hash',$access_hash)
			->with('old_password',$old_password)
			->with('old_email', $old_email);
	}
	
	
	// https://www.phpdoc.org/docs/latest/index.html
	public function complete(StoreRequest $request, $access_hash) {
		
		// sessionに格納
//		session(['Email' => $request->input('Email')]);
//		session(['Password' => $request->input('Password')]);
		
		$request->session()->get('Email', $request->input('Email'));
		$request->session()->get('Password', $request->input('Password'));
		
		
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

<?php

namespace App\Http\Controllers;




use App\Http\Controllers\Controller;
//use Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function signin(Request $request)
    {
		var_dump($request->input('user_name'));
		var_dump($request->input('user_password'));
		var_dump($request->input('user_password2'));
//		$name = Input::get('user_name');
		
		var_dump($request->all());
//		var_dump($request->user_name());
//		var_dump($request->user_password());
//		var_dump($request->_token());
        return view('members/signin');
    }

}

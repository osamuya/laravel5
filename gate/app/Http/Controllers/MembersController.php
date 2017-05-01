<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
//use Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Providers\Utilities;
use App\CommonLibrary\Utilities;

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
		
		$return = Utilities::test();
		var_dump($return);
		
//		$obj = new Utilities();
		
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

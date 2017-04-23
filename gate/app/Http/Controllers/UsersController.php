<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */	
	public function page($id)
    {
//		echo $id;
        return view('users/page')->with('id',$id);
    }

}
